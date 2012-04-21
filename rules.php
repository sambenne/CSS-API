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
		)
	);
	// echo "<h2>Rules:</h2>";
	// echo "<pre>" . print_r($rules, true) . "</pre>";
?>