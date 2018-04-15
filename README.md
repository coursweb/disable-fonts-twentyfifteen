# Disable Fonts: TwentyFifteen

Description: Disables default fonts of the TwentyFifteen theme.

## Default fonts of TwentyFifteen

The TwentyFifteen loads the following fonts:

```<link rel='stylesheet' id='twentyfifteen-fonts-css'  href='https://fonts.googleapis.com/css?family=Noto+Sans%3A400italic%2C700italic%2C400%2C700%7CNoto+Serif%3A400italic%2C700italic%2C400%2C700%7CInconsolata%3A400%2C700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
```

In human readable language:

- **Noto Sans:** Regular, Bold, Italic, Bold Italic 
- **Noto Serif:** Regular, Bold, Italic, Bold Italic 
- **Inconsolata:** Regular, Bold

In total, the theme loads 10 font assets.

## Methods of override:

The font CSS url is declared in the function function `twentyfifteen_fonts_url()`.

This function can be overridden by a child theme, as TwentyFifteen calls it with:

```
if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
```

***

