<?php
	$rules = array(
		"at-rules" => array(
			"2.1" => array(
				"charset" => "/@charset/",
				"import" => "/@import/",
				"media" => "/@media/",
				"page" => "/@page/"
			),
			"3" => array(
				"font-face" => "/@font-face/",
				"namespace" => "/@namespace/"
			)
		),
		"selectors" => array(
			"2.1" => array(
				"." => "/\.[a-zA-Z0-9-_^@]{1,100}/",
				"#" => "/\#[a-zA-Z0-9-_^@]{1,100}/",
				"E" => "/[a-zA-Z0-9-_^@]{1,100}^\s/",
				"*" => "/[a-zA-Z0-9-_^@]{1,100}^\s/"
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
		)
	);
	// echo "<h2>Rules:</h2>";
	// echo "<pre>" . print_r($rules, true) . "</pre>";
?>