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

CURRENT_BRANCH="$(git -C "$ROOT_DIR" branch --show-current)"
if [ "$CURRENT_BRANCH" = "main" ]; then
  FEATURE_BRANCH="ai/$(date +%Y%m%d-%H%M%S)-nolan-showcase-theme"
  git -C "$ROOT_DIR" checkout -b "$FEATURE_BRANCH"
  echo "Switched to feature branch: $FEATURE_BRANCH"
fi

perl -0pe 's/\{\{TASK\}\}/$ENV{TASK}/g' "$ROOT_DIR/.github/codex/prompts/planner.md" > "$ROOT_DIR/.ai/planner-run.md"
codex exec --cd "$ROOT_DIR" --output-last-message .ai/builder-prompt.md < "$ROOT_DIR/.ai/planner-run.md"

codex exec --cd "$ROOT_DIR" --sandbox workspace-write --output-last-message .ai/implementation-summary.md < "$ROOT_DIR/.ai/builder-prompt.md"

perl -0pe 's/\{\{TASK\}\}/$ENV{TASK}/g' "$ROOT_DIR/.github/codex/prompts/reviewer.md" > "$ROOT_DIR/.ai/reviewer-run.md"
codex exec --cd "$ROOT_DIR" --sandbox read-only --output-last-message .ai/reviewer-report.md < "$ROOT_DIR/.ai/reviewer-run.md"

printf '%s\n' "Local Codex workflow complete."
