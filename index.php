<?php
	// header("Content-type: text/css");
	$CSS = file_get_contents("css.css");
	// $pattern = '/([^{]+)\s*\{\s*([^}]+)\s*}/';

	// preg_match($pattern, $CSS, $matches, PREG_OFFSET_CAPTURE, 3);
	// echo "<pre>" . print_r($matches, true) . "</pre>";
	// $CSS = str_replace(" ", "\n", $CSS);
	$CSS = preg_replace('!/\*.*?\*/!s', '', $CSS);
	$CSS = preg_replace('/\n\s*\n/', "\n", $CSS);
	$CSS = preg_replace('/\\{(?>[^\\}]*)\\}/', '', $CSS);
	$CSS = preg_replace('/\t[a-zA-Z .-]*/', '', $CSS);
	$CSS = str_replace("}", "", $CSS);
	$CSS = str_replace("\n", "", $CSS);
	// $CSS = str_replace("\r", "", $CSS);
	$CSS = str_replace("\t", "", $CSS);
	// $CSS = preg_replace('/\{[^\}]+\}/', '', $CSS);
	$aCSS = explode("\r", trim($CSS));
	// echo $CSS;
	echo "<pre>" . print_r($aCSS, true) . "</pre>";
?>