# AGNIS development quickstart

This repository contains the AGNIS VS Code theme extension.

## Project structure

- `package.json` — extension manifest and published theme metadata
- `themes/agnis-ui.json` — workbench/UI colors
- `themes/agnis-base.json` — shared base token colors
- `themes/agnis.json` — main AGNIS theme
- `themes/agnis-legacy.json` — legacy variant

## Run the theme locally

1. Open this repository in VS Code
2. Press `F5` to launch an **Extension Development Host** window
3. In the new window, open **Preferences: Color Theme**
4. Select **AGNIS** or **AGNIS Legacy**

## Test token colors

To inspect how VS Code scopes a token:

1. Open a file with the language you want to inspect
2. Run **Developer: Inspect Editor Tokens and Scopes** from the Command Palette
3. Check the TextMate scopes and semantic token information

This is the fastest way to understand why a color rule does or does not apply.

## Making changes

- Theme JSON changes are reflected in the Extension Development Host after reload
- UI colors usually show up immediately after reloading the host window
- Syntax/token changes are easiest to validate with the demo files in `demo/`

## Useful references

- VS Code color theme guide: [code.visualstudio.com/api/extension-guides/color-theme](https://code.visualstudio.com/api/extension-guides/color-theme)
- VS Code publishing docs: [code.visualstudio.com/api/working-with-extensions/publishing-extension](https://code.visualstudio.com/api/working-with-extensions/publishing-extension)

## Notes

- AGNIS uses both TextMate token colors and semantic token colors
- The main theme is the primary target for active improvements
- The legacy theme is kept for users who prefer the older look and should stay usable when shared fixes are made
