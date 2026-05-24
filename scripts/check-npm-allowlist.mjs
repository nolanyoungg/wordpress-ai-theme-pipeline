import fs from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const ROOT_DIR = path.resolve(__dirname, "..");
const PACKAGE_JSON = path.join(ROOT_DIR, "package.json");
const PACKAGE_LOCK = path.join(ROOT_DIR, "package-lock.json");

const ALLOWED_TOP_LEVEL = new Set(["esbuild", "react", "react-dom"]);

function fail(message) {
  console.error(message);
  process.exit(1);
}

if (!fs.existsSync(PACKAGE_JSON)) {
  fail("Missing package.json");
}

if (!fs.existsSync(PACKAGE_LOCK)) {
  fail("Missing package-lock.json. Run npm install to generate a pinned lockfile.");
}

const pkg = JSON.parse(fs.readFileSync(PACKAGE_JSON, "utf8"));
const lock = JSON.parse(fs.readFileSync(PACKAGE_LOCK, "utf8"));

const sections = ["dependencies", "devDependencies", "optionalDependencies"];
for (const section of sections) {
  const entries = pkg[section] || {};
  const names = Object.keys(entries);

  for (const name of names) {
    if (!ALLOWED_TOP_LEVEL.has(name)) {
      fail(`Disallowed ${section} entry "${name}". Allowed top-level npm deps: ${[...ALLOWED_TOP_LEVEL].join(", ")}`);
    }
  }
}

if (!lock.packages || !lock.packages[""]) {
  fail("package-lock.json is missing root package metadata.");
}

const rootDeps = lock.packages[""].devDependencies || {};
for (const name of Object.keys(rootDeps)) {
  if (!ALLOWED_TOP_LEVEL.has(name)) {
    fail(`package-lock.json contains disallowed top-level devDependency "${name}".`);
  }
}

console.log("NPM allowlist check passed.");

