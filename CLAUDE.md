# Project rules

## Git commits

- Never mention Claude, AI, or any assistant in commit messages. Do not add `Co-Authored-By` or session-link trailers; the commit must read as a normal human commit.
- Use semantic (Conventional Commits) messages: `<type>(optional scope): <short imperative summary>`.
- Allowed types: `feat` (new feature), `fix` (bug fix), `chore` (maintenance, tooling, config), `docs`, `style` (formatting/CSS-only tweaks with no logic change), `refactor`, `perf`, `test`, `build`, `ci`, `revert`.
- Keep the subject line under ~72 characters, lower-case, no trailing period. Add a body only when it explains the why.
- Examples: `feat(home): add travel services showcase`, `fix(cars): stop car images from tiling`, `perf: serve WebP images with lazy loading`, `chore: update sitemap`.
