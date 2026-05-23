#!/usr/bin/env bash
set -euo pipefail

if [ "$#" -lt 1 ]; then
  echo "Usage: $0 <task>"
  exit 1
fi

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
TASK="$*"
export TASK

mkdir -p "$ROOT_DIR/.ai"

perl -0pe 's/\{\{TASK\}\}/$ENV{TASK}/g' "$ROOT_DIR/.github/codex/prompts/planner.md" > "$ROOT_DIR/.ai/planner-run.md"
codex exec --cd "$ROOT_DIR" --prompt-file .ai/planner-run.md --output-last-message .ai/builder-prompt.md

codex exec --cd "$ROOT_DIR" --prompt-file .ai/builder-prompt.md --sandbox workspace-write --output-last-message .ai/implementation-summary.md

perl -0pe 's/\{\{TASK\}\}/$ENV{TASK}/g' "$ROOT_DIR/.github/codex/prompts/reviewer.md" > "$ROOT_DIR/.ai/reviewer-run.md"
codex exec --cd "$ROOT_DIR" --prompt-file .ai/reviewer-run.md --sandbox read-only --output-last-message .ai/reviewer-report.md

printf '%s\n' "Local Codex workflow complete."
