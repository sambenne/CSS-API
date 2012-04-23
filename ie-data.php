<?php
	/**
	*	IE5, IE5.5, IE6, IE7, IE8, IE9
	*	0 = NO
	*	1 = YES
	*	2 = Partial
	*	3 = Updated
	*/
	$ie = array(
		"at-rules" => array(
			"2.1" => array(
				"charset" => array(0, 1, 1, 1, 1, 1),
				"import" => array(1, 1, 1, 1, 1, 1),
				"media" => array(0, 1, 1, 1, 1, 3),
				"page" => array(2, 2, 2, 2, 1, 1)
			),
			"3" => array(
				"font-face" => array(0, 1, 1, 1, 1, 3),
				"namespace" => array(0, 0, 0, 0, 0, 1)
			)
		),
		"selectors" => array(
			"2.1" => array(
				"." => array(2, 2, 2, 1, 1, 1),
				"#" => array(1, 1, 1, 1, 1, 1),
				"E" => array(1, 1, 1, 1, 1, 1),
				"*" => array(0, 0, 0, 1, 1, 1)
			),
			"3" => array(
				"ns|e" => array(0, 0, 0, 0, 0, 1)
			)
		),
		"attribute_selectors" => array(
			"2.1" => array(
				"[att]" => array(0, 0, 0, 1, 1, 1),
				"[att=val]" => array(0, 0, 0, 1, 1, 1),
				"[att|=val]" => array(0, 0, 0, 1, 1, 1),
				"[att~=val]" => array(0, 0, 0, 1, 1, 1)
			),
			"3" => array(
					"[ns|att]" => array(0, 0, 0, 1, 1, 1),
					"[att^=val]" => array(0, 0, 0, 1, 1, 1),
					"[att*=val]" => array(0, 0, 0, 1, 1, 1),
					"[att$=val]" => array(0, 0, 0, 1, 1, 1)
			)
		),
		"combinators" => array(
			"2.1" => array(
				"E+F" => array(0, 0, 0, 1, 1, 1),
				"E>F" => array(0, 0, 0, 1, 1, 1),
				"E F" => array(1, 1, 1, 1, 1, 1)
			),
			"3" => array(
				"E~F" => array(0, 0, 0, 1, 1, 1)
			)
		),
		"pseudo_classes" => array(
			"2.1" => array(
				":active" => array(0, 0, 0, 2, 1, 1),
				":first-child" => array(0, 0, 0, 1, 1, 1),
				":focus" => array(0, 0, 0, 0, 1, 1),
				":hover" => array(2, 2, 2, 1, 1, 1),
				":lang" => array(0, 0, 0, 0, 1, 1),
				":link" => array(1, 1, 1, 1, 1, 1),
				":visited" => array(1, 1, 1, 1, 1, 1)
			),
			"3" => array(
				":root" => array(0,0,0,0,0,1),
				":nth-child" => array(0,0,0,0,0,1),
				":nth-last-child" => array(0,0,0,0,0,1),
				":nth-of-type" => array(0,0,0,0,0,1),
				":nth-last-of-type" => array(0,0,0,0,0,1),
				":last-child" => array(0,0,0,0,0,1),
				":first-of-type" => array(0,0,0,0,0,1),
				":last-of-type" => array(0,0,0,0,0,1),
				":only-child" => array(0,0,0,0,0,1),
				":only-of-type" => array(0,0,0,0,0,1),
				":empty" => array(0,0,0,0,0,1),
				":target" => array(0,0,0,0,0,1),
				":not" => array(0,0,0,0,0,1),
				":enabled" => array(0,0,0,0,0,1),
				":disabled" => array(0,0,0,0,0,1),
				":checked" => array(0,0,0,0,0,1),
				":indeterminate" => array(0,0,0,0,0,1),
				":default" => array(0,0,0,0,0,0),
				":valid" => array(0,0,0,0,0,0),
				":invalid" => array(0,0,0,0,0,0),
				":in-range" => array(0,0,0,0,0,0),
				":out-of-range" => array(0,0,0,0,0,0),
				":required" => array(0,0,0,0,0,0),
				":optional" => array(0,0,0,0,0,0),
				":read-only" => array(0,0,0,0,0,0),
				":read-write" => array(0,0,0,0,0,0)
			)
		),
		"pseudo_elements" => array(
			"2.1" => array(
				":after" => array(0,0,0,0,1,1),
				":before" => array(0,0,0,0,1,1),
				":first-letter" => array(0,1,1,1,1,1),
				":first-line" => array(0,1,1,1,1,1)
			),
			"3" => array(
				"::after" => array(0,0,0,0,0,0),
				"::before" => array(0,0,0,0,0,0),
				"::first-letter" => array(0,0,0,0,0,0),
				"::first-line" => array(0,0,0,0,0,0),
				"::selection" => array(0,0,0,0,0,1),
				"::value" => array(0,0,0,0,0,0),
				"::choices" => array(0,0,0,0,0,0),
				"::repeat-item" => array(0,0,0,0,0,0),
				"::repeat-index" => array(0,0,0,0,0,0)
			)
		),
		/* Properties */
		"2d-transforms" => array(
			"2.1" => array(),
			"3" => array(
				"transform" => array(0,0,0,0,0,1),
				"transform-origin" => array(0,0,0,0,0,1)
			)
		),
		"list" => array(
			"2.1" => array(
				"list-style" => array(1,1,1,1,1,1),
				"list-style-image" => array(1,1,1,1,1,1),
				"list-style-position" => array(1,1,1,1,1,1),
				"list-style-type" => array(0,0,0,2,1,1)
			),
			"3" => array()
		),
		"color-background" => array(
			"2.1" => array(
				"color" => array(1,1,1,1,1,1),
				"background" => array(1,1,1,1,1,3),
				"background-attachment" => array(2,2,2,1,1,3),
				"background-color" => array(1,1,1,1,1,3),
				"background-image" => array(1,1,1,1,1,3),
				"background-position" => array(2,2,2,2,1,3),
				"background-repeat" => array(1,1,1,1,1,3)
			),
			"3" => array(
				"color-profile" => array(0,0,0,0,0,0),
				"rendering-intent" => array(0,0,0,0,0,0),
				"background" => array(0,0,0,0,0,1),
				"background-clip" => array(0,0,0,0,0,1),
				"background-origin" => array(0,0,0,0,0,1),
				"background-break" => array(0,0,0,0,0,0),
				"background-size" => array(0,0,0,0,0,1)
			)
		),
		"font-text" => array(
			"2.1" => array(
				"direction" => array(1,1,1,1,1,1),
				"font" => array(1,1,1,1,1,1),
				"font-family" => array(1,1,1,1,1,1),
				"font-size" => array(1,1,1,1,1,1),
				"font-style" => array(1,1,1,1,1,1),
				"font-variant" => array(1,1,1,1,1,1),
				"font-weight" => array(2,2,2,2,1,1),
				"letter-spacing" => array(1,1,1,1,1,1),
				"line-height" => array(1,1,1,1,1,1),
				"text-align" => array(1,1,1,1,1,1),
				"text-decoration" => array(1,1,1,1,1,1),
				"text-indent" => array(1,1,1,1,1,1),
				"text-transform" => array(1,1,1,1,1,1),
				"unicode-bidi" => array(1,1,1,1,1,1),
				"vertical-align" => array(1,1,1,1,1,1),
				"white-space" => array(2,2,2,2,1,1),
				"word-spacing" => array(2,2,2,2,1,1)
			),
			"3" => array(
				"font-effect" => array(0,0,0,0,0,0),
				"font-emphasize" => array(0,0,0,0,0,0),
				"font-smooth" => array(0,0,0,0,0,0),
				"font-stretch" => array(0,0,0,0,0,1),
				"hanging-punctuation" => array(0,0,0,0,0,0),
				"punctuation-trim" => array(0,0,0,0,0,0),
				"ruby-align" => array(1,1,1,1,1,1),
				"ruby-overhang" => array(1,1,1,1,1,1),
				"ruby-position" => array(1,1,1,1,1,1),
				"ruby-span" => array(0,0,0,0,0,0),
				"text-align" => array(2,2,2,2,2,2),
				"text-emphasis" => array(0,0,0,0,0,0),
				"text-justify" => array(0,1,1,1,1,1),
				"text-outline" => array(0,0,0,0,0,0),
				"text-overflow" => array(0,2,2,2,2,2),
				"text-shadow" => array(0,0,0,0,0,0),
				"text-wrap" => array(0,0,0,0,0,0),
				"word-break" => array(2,2,2,2,2,2),
				"word-wrap" => array(1,1,1,1,1,1),
				"writing-mode" => array(1,1,1,1,1,1)
			)
		),
		"generated-content" => array(
			"2.1" => array(
				"content" => array(0,0,0,0,1,1),
				"counter-increment" => array(0,0,0,0,1,1),
				"counter-reset" => array(0,0,0,0,1,1),
				"quotes" => array(0,0,0,0,1,1)
			),
			"3" => array()
		),
		"border-layout" => array(
			"2.1" => array(
				"border" => array(1,1,1,1,1,1),
				"border-bottom" => array(0,1,1,1,1,1),
				"border-bottom-color" => array(1,1,1,1,1,1),
				"border-bottom-style" => array(0,1,1,1,1,1),
				"border-bottom-width" => array(0,1,1,1,1,1),
				"border-collapse" => array(2,2,2,2,1,1),
				"border-color" => array(1,1,1,1,1,1),
				"border-left" => array(0,1,1,1,1,1),
				"border-left-color" => array(1,1,1,1,1,1),
				"border-left-style" => array(0,1,1,1,1,1),
				"border-left-width" => array(0,1,1,1,1,1),
				"border-right" => array(0,1,1,1,1,1),
				"border-right-color" => array(1,1,1,1,1,1),
				"border-right-style" => array(0,1,1,1,1,1),
				"border-right-width" => array(0,1,1,1,1,1),
				"border-spacing" => array(0,0,0,0,1,1),
				"border-style" => array(0,2,2,2,1,1),
				"border-top" => array(0,1,1,1,1,1),
				"border-top-color" => array(1,1,1,1,1,1),
				"border-top-style" => array(0,1,1,1,1,1),
				"border-top-width" => array(0,1,1,1,1,1),
				"border-width" => array(1,1,1,1,1,1),
				"caption-side" => array(0,0,0,0,1,1),
				"clear" => array(1,1,1,1,1,1),
				"empty-cells" => array(0,0,0,2,1,1),
				"float" => array(1,1,1,1,1,1),
				"margin" => array(1,1,1,1,1,1),
				"margin-right" => array(1,1,1,1,1,1),
				"margin-left" => array(1,1,1,1,1,1),
				"margin-top" => array(1,1,1,1,1,1),
				"margin-bottom" => array(1,1,1,1,1,1),
				"padding" => array(1,1,1,1,1,1),
				"padding-right" => array(1,1,1,1,1,1),
				"padding-left" => array(1,1,1,1,1,1),
				"padding-top" => array(1,1,1,1,1,1),
				"padding-bottom" => array(1,1,1,1,1,1),
				"table-layout" => array(1,1,1,1,1,1)
			),
			"3" => array(
				"border-break" => array(0,0,0,0,0,0),
				"border-image" => array(0,0,0,0,0,0),
				"border-radius" => array(0,0,0,0,0,1),
				"box-shadow" => array(0,0,0,0,0,1)
			)
		),
		"positioning" => array(
			"2.1" => array(
				"bottom" => array(0,2,2,2,1,1),
				"clip" => array(0,1,1,1,1,1),
				"display" => array(2,2,2,2,1,1),
				"height" => array(1,1,1,1,1,1),
				"left" => array(0,2,2,2,1,1),
				"max-height" => array(0,0,0,1,1,1),
				"max-width" => array(0,0,0,1,1,1),
				"min-height" => array(0,0,0,1,1,1),
				"min-width" => array(0,0,0,1,1,1),
				"overflow" => array(2,2,2,1,1,1),
				"position" => array(2,2,2,1,1,1),
				"right" => array(0,2,2,2,1,1),
				"top" => array(0,2,2,2,1,1),
				"visibility" => array(1,1,1,1,1,1),
				"width" => array(1,1,1,1,1,1),
				"z-index" => array(2,2,2,2,1,1)
			),
			"3" => array(
				"overflow-x" => array(2,2,2,1,1,1),
				"overflow-y" => array(2,2,2,1,1,1)
			)
		),
		"printing" => array(
			"2.1" => array(
				"orphans" => array(0,0,0,0,1,1),
				"page-break-after" => array(1,1,1,1,1,1),
				"page-break-before" => array(1,1,1,1,1,1),
				"page-break-inside" => array(0,0,0,0,1,1),
				"widows" => array(0,0,0,0,1,1)
			),
			"3" => array(
				"fit" => array(0,0,0,0,0,0),
				"fit-position" => array(0,0,0,0,0,0),
				"image-orientation" => array(0,0,0,0,0,0),
				"page" => array(0,0,0,0,0,0),
				"size" => array(0,0,0,0,0,0)
			)
		),
		"user-interface" => array(
			"2.1" => array(
				"cursor" => array(0,1,1,1,1,1),
				"outline" => array(0,0,0,0,1,1),
				"outline-color" => array(0,0,0,0,1,1),
				"outline-style" => array(0,0,0,0,1,1),
				"outline-width" => array(0,0,0,0,1,1)
			),
			"3" => array(
				"appearance" => array(0,0,0,0,0,0),
				"box-sizing" => array(0,0,0,0,1,1),
				"icon" => array(0,0,0,0,0,0),
				"nav-down" => array(0,0,0,0,0,0),
				"nav-index" => array(0,0,0,0,0,0),
				"nav-left" => array(0,0,0,0,0,0),
				"nav-right" => array(0,0,0,0,0,0),
				"nav-up" => array(0,0,0,0,0,0),
				"outline-offset" => array(0,0,0,0,0,0),
				"outline-radius" => array(0,0,0,0,0,0),
				"resize" => array(0,0,0,0,0,0)
			)
		)
	);
?>