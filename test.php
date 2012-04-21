<?php
	require_once 'css-parser.php';

	$CP = cssParser::getInstance();
	$CSS = $CP->rawCSS();

	echo "<h2>Raw CSS</h2><pre>$CSS</pre><br />";

	$CP->getAtRules();
	$CSS = $CP->atCSS();
	echo "<h2>@ CSS</h2><pre>$CSS</pre><br />";

	$CSS = "<pre>" . print_r($CP->used(), true) . "</pre>";
	echo "<h2>USED</h2>$CSS<br />";

	$CP->preSelcCSS();
	$CP->getSelectors();
	$SEL = $CP->selCSS();
	echo "<h2>Selector CSS</h2><pre>$SEL</pre><br />";

	$CSS = "<pre>" . print_r($CP->used(), true) . "</pre>";
	echo "<h2>USED</h2>$CSS<br />";
?>