# Change Log

All notable changes to the "agnis" extension will be documented in this file.

__*I mainly test on the languages I use myself: JS, CSS, JSX, Svelte, HTML. If you miss something or need a change in other languages let me know*__

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
