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
				// "ns|e" => "namespaced"
			)
		),
		"attribute-selectors" => array(
			"2.1" => array(
				// "[att=val]" => "equality[=]",
				// "[att]" => "existence[]",
				// "[att|=val]" => "hyphen[|=]",
				// "[att~=val]" => "whitespace[~=]"
			),
			"3" => array(
				// "[ns|att]" => "namespaced",
				// "[att^=val]" => "prefix[^=]",
				// "[att*=val]" => "substring[*=]",
				// "[att$=val]" => "suffix[$=]"
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
				":first-child" => "/:first-child/"
			),
			"3" => array()
		)
	);
	// echo "<h2>Rules:</h2>";
	// echo "<pre>" . print_r($rules, true) . "</pre>";
?>