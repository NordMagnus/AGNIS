# Change Log

All notable changes to the "agnis" extension will be documented in this file.

__*I mainly test on the languages I use myself: JavaScript, TypeScript, CSS, JSX, Svelte, Markdown, HTML. If you miss something or need a change in other languages let me know*__

## Version 1.0.0

### Major Feature Expansion & Modern VS Code Support

#### Noteworthy
- **Comprehensive Language Support**: Added extensive semantic highlighting for 15+ programming languages including Python, C/C++, C#, Go, Rust, PHP, Java, Ruby, Swift, Kotlin, Dart, Scala, F#, Haskell, and Elm
- **Enhanced Token Coverage**: Expanded from ~50 to 200+ token color rules covering specialized languages like Elixir, Clojure, CoffeeScript, HLSL, SQL, LaTeX, PowerShell, Lua, Nim, Zig, and Crystal
- **Modern VS Code Features**: Full support for Jupyter notebooks, editor ghost text, light bulb actions, linked editing, fold backgrounds, stack frame highlighting, and advanced editor decorations
- **Improved Accessibility**: Significantly enhanced contrast ratios across all UI elements, symbol icons, and selection backgrounds for better readability

#### Language-Specific Enhancements
- **Python**: Classes, functions, variables, decorators, magic methods, async/await
- **TypeScript/JavaScript**: Interfaces, types, enums, JSX components, async patterns
- **C/C++**: Structs, macros, templates, system types, memory management
- **C#**: Properties, events, extension methods, LINQ expressions, generics
- **Go**: Channels, goroutines, packages, receivers, interface implementations
- **Rust**: Traits, lifetimes, macros, ownership keywords, pattern matching
- **PHP**: Namespaces, traits, magic methods, modern PHP features
- **Java**: Annotations, generics, lambda expressions, streams API
- **Ruby**: Symbols, blocks, metaprogramming, Rails conventions

#### UI & Accessibility Improvements
- **Better Contrast**: Replaced bright selection colors (#328897, #005b6b) with darker, more accessible alternatives (#1a4651)
- **Symbol Icon Colors**: Enhanced all symbol icons with improved contrast ratios while maintaining color distinction
- **Git Decorations**: Updated all git status colors for better visibility and differentiation
- **Modern UI Support**: Added theming for notebooks, command center, tree views, testing UI, and extension-specific elements
- **Selection Consistency**: Unified selection backgrounds across menus, lists, suggest widgets, and editor elements

#### Technical Improvements
- **Zero Syntax Errors**: All theme files validated and error-free
- **No Duplicate Keys**: Cleaned up all duplicate color definitions
- **VS Code Compliance**: Removed invalid properties and ensured full compatibility with latest VS Code
- **Professional Quality**: Enhanced theme to match feature completeness of top-tier VS Code themes

## Version 0.9.9

- Fixed semantic language specific classes, e.g. Svelte classes

## Version 0.9.8

- Fixed editor action list focus background color.

## Version 0.9.7

- Improved accessibility (a11y) for UI and syntax colors:
  - Increased contrast for error and warning colors in the UI.
  - Made inactive tab, activity bar, and breadcrumb colors more readable.
  - Adjusted comment color to be slightly more muted for subtlety but still accessible.
  - Improved contrast for header, tag, and quote colors in base theme.
- Added and improved explicit support for Vue, Next.js, and SvelteKit in token and semantic highlighting.
- Ensured consistent and accessible color usage across all major web development frameworks and languages.

## Version 0.9.6

- Small fixes to UI
  
## Version 0.9.5

- Changed UI to be more neutral gray and also changed some yellow to white

## Version 0.9.4

- Fixed some low UI contrast issues (when keyboard navigating in menus)
  - List focus outline
  - List inactive background
- Increased word highlight contrast (time will tell if enough)
- Tweaked breadcrumb picker

## Version 0.9.3

- Fixed a couple of "bugs":
  - Svelte component color was not applied because of typo
  - Svelte flow control keyword blue instead of yellowish
  - Added color for Svelte conditional keyword
  
## Version 0.9.2

- Tweaked JSX/Svelte component color
- Tweaked import colors

## Version 0.9.1

- Changed color of TypeScript type operators to pale yellow
- Changed import colors in JS/TS (they were too similar to comments.)  
_Might tweak this further. Please provide feedback what you think._
- Changed color of Svelte control flow keywords to light blue
- Increased contrast between Svelte (and JSX) components and HTML elements
- CSS tweaks (more TBD).
  - Removed bold from units
  - Changed attribute names to lighter blue

## Version 0.9

In this release the direction of the theme somewhat changes with more subdued colors and a slightly more neutral and darker background. I also decided to drop semantic support because it causes more problems than it helps (IMHO). If you prefer the old look it is still available packaged as an alternative theme: "AGNIS Legacy"

### Noteworthy

- Improved support for TypeScript
- Improved support for Svelte

### Tweaks

- Type references a bit more subdued
- Operator expressions (e.g. "of" in a for-of loop) same word as other keywords
- Control flow keywords more yellowish
- Imports darker and more consistent
- Import strings (i.e. paths) same color as rest of imports
- Export keyword same color as other keywords
- New distinct color for TS type, enum and interface declarations
- New distinct color for TS type, enum and interface usages
- A separate color (gray) for primitive and built-in types
- Function invocations more subdued blue

## Version 0.8

### Noteworthy

- Added inlay hint colors

### Tweaks

- Slight change to keyword blue (used for functions, etc.)
- Removed underline of async functions

## Version 0.7

#### Noteworthy

- **Started on rules for _Svelte_ **
- Changed line highlight to a darker grey instead of lighter 🤯
- Changed color of try-catch block (to that of control flow)
- Changed colors of JS imports to gray (from orange/yellow)

#### Tweaks

- Improved contrast between some colors and UI elements
- Made default source color just a hint darker
- Made keyword color less saturated

## Version 0.6.3

- Sorry, but I realized just __how much__ I dislike bracket pair coloring, so toned it down even more. Again, see the readme and customize the values in your settings if you like it more than I do. Also, feedback or suggestions on improvements always welcome.

## Version 0.6

#### Noteworthy

- Included regular expression coloring from fatbrain's fork (gracias)
- Added bracket pair rules. (See comment in readme, too.)
- Added highlight to active editor tab
- TS easter egg

#### Minor Tweaks

- Changed editor group border
- Added rule for empty editor groups
- Fixed(?) some colors for modules/imports

## Version 0.5.1

#### Minor Tweaks

- Tweaked color for error squiggly
- Added semantic rule for `class`
- Other changes for TS
  - Support types darker gray
  - Made storage types darker orange
  - New color for entity name types
- Changed color of language constants --> purple (same as numbers)

## Version 0.5

__This version contains a major file structure overhaul and some bigger changes. The goal is to better handle updates to the extension API, over time better support various languages, and be more consistent in color choices.__

__The big refactoring might have caused unwanted changes or bugs. Let me know if you find something weird.__

#### Noteworthy

- Default libraries are autumn green (semantic rule)
- Keywords (most of them) are chanterelle yellow
- Flow keywords are autumn leaf orange (setting them apart from other keywords)
- Function and class related things are blue (same as before)
- Numbers are now purple <-- Big change 😮
- Strings are earth brown
- Operators are neon pink to stand out

#### Minor Tweaks

- Async method invocations underlined
- Tweaked color of HTML and JSX attributes
- Arrow function blue (instead of pink)

## Version 0.4

#### Noteworthy

- Added semantic highlighting for `namespace`
- Changed coloring of JS this/self keywords to gray
- Removed some meta definitions to fix method call beginning parantheses
- Made braces and punctuation stand out more (White)
- Changed classes from blue to light gray and bold

#### Minor Tweaks

- Keywords a bit more yellowish
- Slight adjustment to operator pink
- Variable parameters slightly lighter
- Removed italic on language variables
- Small adjustments to gray levels

## Version 0.3.10

#### Minor Tweaks

- Function and method declarations
- Async calls

## Version 0.3.9

#### Minor Tweaks

- Foreground and background for debugger inline values

## Version 0.3.8

- Had to slightly revert yellowness
- Made default "almost white" color ever so slightly less whtie

## Version 0.3.7

- Changed storage type accessors and class to blue
- Changed hue to more yellowish (vs orange) 
- Changed color of dot accessor and commas to default "almost white"
- Changed function, method and member to bold and changed to "almost white"

## Version 0.3.6

- Changed highlight color from gray to blue in menus and suggest widget
- Another tiny tweak to diff editor backgrounds
  
## Version 0.3.5

- Tweaked diff editor backgrounds to show better in gutter
- Tweaked scrollbar slider transparency
- Changed hue somewhat of async calls

## Version 0.3.4

- Made scrollbar slider stand out more
- Improved visibility of code lens foreground
- Changes to diff editor (feedback is welcome !!)
- Changed color of async function invocations to help remember await
- Changed color of template literals slightly
- Added secondary button theming for custom dialogs
  
## Version 0.3.3

- Another slight change to default foreground
- Made color of JSX attributes lighter and a just a little green
- Changed function keyword to blue (from orange)

## Version 0.3.2

- Switched back default foreground
- JS: Fixed constants in template strings

## Version 0.3.1

- Minor tweaks related to switching to semantic.
- Made current line a bit more visible vs editor background
- Changed find colors
- Made default foreground (source) a tad bit lighter

## Version 0.3

#### Noteworthy

- Semantic highlighting

#### Minor Tweaks

- Reverted or adjusted some changes from 0.2 because of conflicts with semantic highlighting

## Version 0.2

#### Noteworthy

- JSX: Initial support for Babel JavaScript and React/JSX
- Adjusted class and function definitions to stand out more
- ~~JavaScript: Made _this_ and _self_ italic and same color~~
- JavaScript: Made _module_ keyword more subtle
- ~~Made _console_ statements stand out more in a separate color~~

#### Minor Tweaks

- Eased up on the italic
- Adjusted codelens foreground color to be more visible
- Color and boldness of builtin classes
- Other minor changes and fixes

## First Release

- Initial release. Feedback welcome for use cases, context and scenarios not thought of.
