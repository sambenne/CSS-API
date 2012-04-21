<?php
	$rules = array(
		"at-rules" => array(
			"2.1" => array(
				"charset" => "/@charset ([^\{]+)\{((?!@charset)[\s\S])*(?=\}(?![^\{]*\}))}/mi",
				"import" => "/@import ([^\{]+)\{((?!@import)[\s\S])*(?=\}(?![^\{]*\}))}/mi",
				"media" => "/@media ([^\{]+)\{((?!@media)[\s\S])*(?=\}(?![^\{]*\}))}/mi",
				"page" => "/@page ([^\{]+)\{((?!@page)[\s\S])*(?=\}(?![^\{]*\}))}/mi"
			),
			"3" => array(
				"font-face" => "/@font-face ([^\{]+)\{((?!@font-face)[\s\S])*(?=\}(?![^\{]*\}))}/mi",
				"namespace" => "/@namespace ([^\{]+)\{((?!@namespace)[\s\S])*(?=\}(?![^\{]*\}))}/mi"
			)
		),
		"selectors" => array(
			"2.1" => array(
				"." => "/\.[a-zA-Z0-9-_]{1,100}/",
				"#" => "/\#[a-zA-Z0-9-_]{1,100}/",
				"E" => "/^[a-zA-Z0-9]+$/",
				"*" => "/^[\*]+$/"
			),
			"3" => array(
				// "ns|e" => "/(a-zA-Z0-9-_)|/"
			)
		),
		"attribute_selectors" => array(
			"2.1" => array(
				"[att]" => "/\[(a-zA-Z0-9^=){1}]/",
				"[att=val]" => "/\[(.*?)=(\"?)(.*?)(\"?)]/",
				"[att|=val]" => "/\[(.*?)\|=(\"?)(.*?)(\"?)]/",
				"[att~=val]" => "/\[(.*?)\~=(\"?)(.*?)(\"?)]/"
			),
			"3" => array(
					"[ns|att]" => 	"/\[(.*?)\|[(\"?)(.*?)(\"?)]/",
					"[att^=val]" => "/\[(.*?)\^=[(\"?)(.*?)(\"?)]/",
					"[att*=val]" => "/\[(.*?)\*=[(\"?)(.*?)(\"?)]/",
					"[att$=val]" => "/\[(.*?)\$=[(\"?)(.*?)(\"?)]/"
			)
		),
		"combinators" => array(
			"2.1" => array(
				"E+F" => "/[a-zA-Z0-9-_]{1,100} \+ [a-zA-Z0-9-_]{1,100}/",
				"E>F" => "/[a-zA-Z0-9-_]{1,100} \> [a-zA-Z0-9-_]{1,100}/",
				"E F" => "/[a-zA-Z0-9-_]{1,100}\s[a-zA-Z0-9-_]{1,100}/"
			),
			"3" => array(
				"E~F" => "/[a-zA-Z0-9-_^@]{1,100} \~ [a-zA-Z0-9-_]{1,100}/"
			)
		),
		"pseudo_classes" => array(
			"2.1" => array(
				":active" => "/:active/",
				":first-child" => "/:first-child/",
				":focus" => "/:focus/",
				":hover" => "/:hover/",
				":lang" => "/:lang\((\s?)\)/",
				":link" => "/:link/",
				":visited" => "/:visited/"
			),
			"3" => array(
				":root" => "/:root/",
				":nth-child" => "/:nth-child\((\d?)\)/",
				":nth-last-child" => "/:nth-last-child\((\d?)\)/",
				":nth-of-type" => "/:nth-of-type\((\d?)\)/",
				":nth-last-of-type" => "/:nth-last-of-type\((\d?)\)/",
				":last-child" => "/:last-child/",
				":first-of-type" => "/:first-of-type/",
				":last-of-type" => "/:last-of-type/",
				":only-child" => "/:only-child/",
				":only-of-type" => "/:only-of-type/",
				":empty" => "/:empty/",
				":target" => "/:target/",
				":not" => "/:not\((\s?)\)/",
				":enabled" => "/:enabled/",
				":disabled" => "/:disabled/",
				":checked" => "/:checked/",
				":indeterminate" => "/:indeterminate/",
				":default" => "/:default/",
				":valid" => "/:valid/",
				":invalid" => "/:invalid/",
				":in-range" => "/:in-range/",
				":out-of-range" => "/:out-of-range/",
				":required" => "/:required/",
				":optional" => "/:optional/",
				":read-only" => "/:read-only/",
				":read-write" => "/:read-write/"
			)
		),
		"pseudo_elements" => array(
			"2.1" => array(
				":after" => "/([a-zA-Z0-9-_]):after/",
				":before" => "/([a-zA-Z0-9-_]):before/",
				":first-letter" => "/([a-zA-Z0-9-_]):first-letter/",
				":first-line" => "/([a-zA-Z0-9-_]):first-line/"
			),
			"3" => array(
				"::after" => "/([a-zA-Z0-9-_])::after/",
				"::before" => "/([a-zA-Z0-9-_])::before/",
				"::first-letter" => "/([a-zA-Z0-9-_])::first-letter/",
				"::first-line" => "/([a-zA-Z0-9-_])::first-line/",
				"::selection" => "/([a-zA-Z0-9-_])::selection/",
				"::value" => "/([a-zA-Z0-9-_])::value/",
				"::choices" => "/([a-zA-Z0-9-_])::choices/",
				"::repeat-item" => "/([a-zA-Z0-9-_])::repeat-item/",
				"::repeat-index" => "/([a-zA-Z0-9-_])::repeat-index/"
			)
		),
		/* Properties */
		"2d-transforms" => array(
			"2.1" => array(),
			"3" => array(
				"transform" => "//",
				"transform-origin" => "//"
			)
		),
		"list" => array(
			"2.1" => array(
				"list-style" => "//",
				"list-style-image" => "//",
				"list-style-position" => "//",
				"list-style-type" => "//"
			),
			"3" => array()
		),
		"color-background" => array(
			"2.1" => array(
				"color" => "//",
				"background" => "//",
				"background-attachment" => "//",
				"background-color" => "//",
				"background-image" => "//",
				"background-position" => "//",
				"background-repeat" => "//"
			),
			"3" => array(
				"color-profile" => "//",
				"rendering-intent" => "//",
				"background" => "//",
				"background-clip" => "//",
				"background-origin" => "//",
				"background-break" => "//",
				"background-size" => "//"
			)
		),
		"font-text" => array(
			"2.1" => array(
				"direction" => "//",
				"font" => "//",
				"font-family" => "//",
				"font-size" => "//",
				"font-style" => "//",
				"font-variant" => "//",
				"font-weight" => "//",
				"letter-spacing" => "//",
				"line-height" => "//",
				"text-align" => "//",
				"text-decoration" => "//",
				"text-indent" => "//",
				"text-transform" => "//",
				"unicode-bidi" => "//",
				"vertical-align" => "//",
				"white-space" => "//",
				"word-spacing" => "//"
			),
			"3" => array(
				"font-effect" => "//",
				"font-emphasize" => "//",
				"font-size" => "//",
				"font-smooth" => "//",
				"font-stretch" => "//",
				"hanging-punctuation" => "//",
				"punctuation-trim" => "//",
				"ruby-align" => "//",
				"ruby-overhang" => "//",
				"ruby-position" => "//",
				"ruby-span" => "//",
				"text-align" => "//",
				"text-emphasis" => "//",
				"text-justify" => "//",
				"text-outline" => "//",
				"text-overflow" => "//",
				"text-shadow" => "//",
				"text-wrap" => "//",
				"word-break" => "//",
				"word-wrap" => "//",
				"writing-mode" => "//"
			)
		),
		"generated-content" => array(
			"2.1" => array(
				"content" => "//",
				"counter-increment" => "//",
				"counter-reset" => "//",
				"quotes" => "//"
			),
			"3" => array()
		),
		"border-layout" => array(
			"2.1" => array(
				"border" => "//",
				"border-bottom" => "//",
				"border-bottom-color" => "//",
				"border-bottom-style" => "//",
				"border-bottom-width" => "//",
				"border-collapse" => "//",
				"border-color" => "//",
				"border-left" => "//",
				"border-left-color" => "//",
				"border-left-style" => "//",
				"border-left-width" => "//",
				"border-right" => "//",
				"border-right-color" => "//",
				"border-right-style" => "//",
				"border-right-width" => "//",
				"border-spacing" => "//",
				"border-style" => "//",
				"border-top" => "//",
				"border-top-color" => "//",
				"border-top-style" => "//",
				"border-top-width" => "//",
				"border-width" => "//",
				"caption-side" => "//",
				"clear" => "//",
				"empty-cells" => "//",
				"float" => "//",
				"margin" => "/^[margin]+$/",
				"margin-right" => "/margin-right/",
				"margin-left" => "/margin-left/",
				"margin-top" => "/margin-top/",
				"margin-bottom" => "/margin-bottom/",
				"padding" => "/^[padding]+$/",
				"padding-right" => "/padding-right/",
				"padding-left" => "/padding-left/",
				"padding-top" => "/padding-top/",
				"padding-bottom" => "/padding-bottom/",
				"table-layout" => "//"
			),
			"3" => array(
				"border-break" => "//",
				"border-image" => "//",
				"border-radius" => "//",
				"box-shadow" => "//"
			)
		),
		"positioning" => array(
			"2.1" => array(
				"bottom" => "//",
				"clip" => "//",
				"display" => "//",
				"height" => "//",
				"left" => "//",
				"max-height" => "//",
				"max-width" => "//",
				"min-height" => "//",
				"min-width" => "//",
				"overflow" => "//",
				"position" => "//",
				"right" => "//",
				"top" => "//",
				"visibility" => "//",
				"width" => "//",
				"z-index" => "//"
			),
			"3" => array(
				"overflow-x" => "//",
				"overflow-y" => "//"
			)
		),
		"printing" => array(
			"2.1" => array(
				"orphans" => "//",
				"page-break-after" => "//",
				"page-break-before" => "//",
				"page-break-inside" => "//",
				"widows" => "//"
			),
			"3" => array(
				"fit" => "//",
				"fit-position" => "//",
				"image-orientation" => "//",
				"page" => "//",
				"size" => "//"
			)
		),
		"user-interface" => array(
			"2.1" => array(
				"cursor" => "//",
				"outline" => "//",
				"outline-color" => "//",
				"outline-style" => "//",
				"outline-width" => "//"
			),
			"3" => array(
				"appearance" => "//",
				"box-sizing" => "//",
				"icon" => "//",
				"nav-down" => "//",
				"nav-index" => "//",
				"nav-left" => "//",
				"nav-right" => "//",
				"nav-up" => "//",
				"outline-offset" => "//",
				"outline-radius" => "//",
				"resize" => "//"
			)
		)
	);
?>