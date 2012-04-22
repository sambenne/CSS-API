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
				"direction" => "/direction/",
				"font" => "/^[font]+$/",
				"font-family" => "/font-family/",
				"font-size" => "/font-size/",
				"font-style" => "/font-style/",
				"font-variant" => "/font-variant/",
				"font-weight" => "/font-weight/",
				"letter-spacing" => "/letter-spacing/",
				"line-height" => "/line-height/",
				"text-align" => "/text-align/",
				"text-decoration" => "/text-decoration/",
				"text-indent" => "/text-indent/",
				"text-transform" => "/text-transform/",
				"unicode-bidi" => "/unicode-bidi/",
				"vertical-align" => "/vertical-align/",
				"white-space" => "/white-space/",
				"word-spacing" => "/word-spacing/"
			),
			"3" => array(
				"font-effect" => "/font-effect/",
				"font-emphasize" => "/font-emphasize/",
				"font-size" => "/font-size/",
				"font-smooth" => "/font-smooth/",
				"font-stretch" => "/font-stretch/",
				"hanging-punctuation" => "/hanging-punctuation/",
				"punctuation-trim" => "/punctuation-trim/",
				"ruby-align" => "/ruby-align/",
				"ruby-overhang" => "/ruby-overhang/",
				"ruby-position" => "/ruby-position/",
				"ruby-span" => "/ruby-span/",
				"text-align" => "/text-align/",
				"text-emphasis" => "/text-emphasis/",
				"text-justify" => "/text-justify/",
				"text-outline" => "/text-outline/",
				"text-overflow" => "/text-overflow/",
				"text-shadow" => "/text-shadow/",
				"text-wrap" => "/text-wrap/",
				"word-break" => "/word-break/",
				"word-wrap" => "/word-wrap/",
				"writing-mode" => "/writing-mode/"
			)
		),
		"generated-content" => array(
			"2.1" => array(
				"content" => "/^[content]+$/",
				"counter-increment" => "/counter-increment/",
				"counter-reset" => "/counter-reset/",
				"quotes" => "/^[quotes]+$/"
			),
			"3" => array()
		),
		"border-layout" => array(
			"2.1" => array(
				"border" => "/^[border]+$/",
				"border-bottom" => "/^[border-bottom]+$/",
				"border-bottom-color" => "/border-bottom-color/",
				"border-bottom-style" => "/border-bottom-style/",
				"border-bottom-width" => "/border-bottom-width/",
				"border-collapse" => "/border-collapse/",
				"border-color" => "/border-color/",
				"border-left" => "/^[border-left]+$/",
				"border-left-color" => "/border-left-color/",
				"border-left-style" => "/border-left-style/",
				"border-left-width" => "/border-left-width/",
				"border-right" => "/^[border-right]+$/",
				"border-right-color" => "/border-right-color/",
				"border-right-style" => "/border-right-style/",
				"border-right-width" => "/border-right-width/",
				"border-spacing" => "/border-spacing/",
				"border-style" => "/border-style/",
				"border-top" => "/^[border-top]+$/",
				"border-top-color" => "/border-top-color/",
				"border-top-style" => "/border-top-style/",
				"border-top-width" => "/border-top-width/",
				"border-width" => "/border-width/",
				"caption-side" => "/caption-side/",
				"clear" => "/clear/",
				"empty-cells" => "/empty-cells/",
				"float" => "/float/",
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
				"table-layout" => "/table-layout/"
			),
			"3" => array(
				"border-break" => "/border-break/",
				"border-image" => "/border-image/",
				"border-radius" => "/border-radius/",
				"box-shadow" => "/box-shadow/"
			)
		),
		"positioning" => array(
			"2.1" => array(
				"bottom" => "/bottom/",
				"clip" => "/clip/",
				"display" => "/display/",
				"height" => "/height/",
				"left" => "/left/",
				"max-height" => "/max-height/",
				"max-width" => "/max-width/",
				"min-height" => "/min-height/",
				"min-width" => "/min-width/",
				"overflow" => "/overflow/",
				"position" => "/position/",
				"right" => "/right/",
				"top" => "/top/",
				"visibility" => "/visibility/",
				"width" => "/width/",
				"z-index" => "/z-index/"
			),
			"3" => array(
				"overflow-x" => "/overflow-x/",
				"overflow-y" => "/overflow-y/"
			)
		),
		"printing" => array(
			"2.1" => array(
				"orphans" => "/orphans/",
				"page-break-after" => "/page-break-after/",
				"page-break-before" => "/page-break-before/",
				"page-break-inside" => "/page-break-inside/",
				"widows" => "/widows/"
			),
			"3" => array(
				"fit" => "/^[fit]+$/",
				"fit-position" => "/fit-position/",
				"image-orientation" => "/image-orientation/",
				"page" => "/page/",
				"size" => "/size/"
			)
		),
		"user-interface" => array(
			"2.1" => array(
				"cursor" => "/cursor/",
				"outline" => "/^[outline]+$/",
				"outline-color" => "/outline-color/",
				"outline-style" => "/outline-style/",
				"outline-width" => "/outline-width/"
			),
			"3" => array(
				"appearance" => "/appearance/",
				"box-sizing" => "/box-sizing/",
				"icon" => "/icon/",
				"nav-down" => "/nav-down/",
				"nav-index" => "/nav-index/",
				"nav-left" => "/nav-left/",
				"nav-right" => "/nav-right/",
				"nav-up" => "/nav-up/",
				"outline-offset" => "/outline-offset/",
				"outline-radius" => "/outline-radius/",
				"resize" => "/resize/"
			)
		)
	);
?>