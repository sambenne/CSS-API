<?php
	// header("Content-type: text/css");
	require_once 'rules.php';
	$CSS = file_get_contents("css.css");
	echo "<h2>Raw CSS</h2><pre>" . $CSS . "</pre><br />";
	$CSS = preg_replace('!/\*.*?\*/!s', '', $CSS);
	$CSS = preg_replace('/\n\s*\n/', "\n", $CSS);
	$CSS = preg_replace('/\{[^\}]+\}/', '', $CSS);
	$CSS = preg_replace('/\t[a-zA-Z .-]*/', '', $CSS);
	$CSS = str_replace("}", "", $CSS);
	$CSS = str_replace("\n", "", $CSS);
	// $CSS = str_replace("\r", "", $CSS);
	$CSS = str_replace("\t", "", $CSS);
	$temp = $CSS;
	$aCSS = explode("\r", trim($CSS));
	foreach ($aCSS as $k => $v) $aCSS[$k] = trim($v);
	// echo $CSS;
	// echo "<pre>" . print_r($aCSS, true) . "</pre>";
	echo "<h2>New CSS</h2><pre>" . $temp . "</pre>";
	$lol = preg_match("/[a-zA-Z0-9-_]{1,100}\s[a-zA-Z0-9-_]{1,100}/", $temp, $matches);
	// $lol = preg_match("/[a-z]{1,1000}\s[a-z]{1,1000}/", $temp, $matches);
	$used = array();
	echo "<h2>Test Search</h2>";
	foreach ($aCSS as $k => $v) {
		foreach ($rules as $l => $rule) {
			foreach($rule as $lvl => $patterns) {
				foreach ($patterns as $type => $pattern) {
					// echo "<pre>" . print_r($pattern, true) . "</pre>";
					$lol = @preg_match($pattern, $v, $matches);
					if(!empty($matches) && !in_array($type, $used)) {
						echo "Type: $type This: $v<pre>" . print_r($matches, true) . "</pre>";
						// $used[] = $type;
					}
				}
			}
		}
	}
	echo "<p>I have removed the check to see if the type has been used so that I can fix the @types.</p>";
?>