# Dynamic Bang Theme Rules

This is a small WordPress theme.

## Core identity
- Theme prefix: `dynamic_bang_`
- Text domain: `dynamic_bang`

## Goals
- Keep the theme compatible with WordPress.org theme review expectations.
- Prefer WordPress-native APIs and patterns.
- Keep changes minimal, readable, and localized.
- Preserve existing behavior unless a fix is required.

## Hard rules
- Do not commit debug code such as `dd()`, `var_dump()`, or `die()`.
- Escape all dynamic output correctly:
  - `esc_url()` for URLs
  - `esc_html()` / `esc_attr()` where appropriate
  - `wp_kses_post()` only when limited HTML is intended
- Sanitize input before use:
  - `sanitize_text_field()`
  - `esc_url_raw()`
  - other context-appropriate sanitizers
- Localize all user-facing strings using the `dynamic_bang` text domain.
- Keep accessibility in mind:
  - keyboard navigation
  - visible focus states
  - skip links
  - ARIA only when appropriate
- Avoid unnecessary abstractions and heavy dependencies.

## Theme conventions
- Put `add_theme_support()` calls inside `dynamic_bang_setup()` hooked to `after_setup_theme`.
- Use `wp_enqueue_scripts` for front-end assets.
- Keep template logic in the appropriate template files and `template-parts/`.
- Use `dynamic_bang_post_thumbnail_html` carefully to avoid nested links.
- Keep `functions.php` as the core setup file.
- Use `style.css` for required theme metadata.

## Current asset notes
- Alpine.js: global, used for menus/modals.
- AOS: only load where needed.
- Font Awesome 6.0.0: global.

## Fix priority
1. Bugs
2. Security
3. Accessibility
4. Performance
5. Cleanup

## Review expectations
- Follow WordPress.org theme review guidelines.
- Keep markup semantic and accessible.
- Ensure scripts and styles are loaded only when needed.
- Report tradeoffs when a fix has side effects.
