<?php
	require_once 'css-parser.php';

	$CP = cssParser::getInstance();
	$CSS = $CP->rawCSS();

	echo "<h2>Raw CSS</h2><pre>$CSS</pre><br />";

	$CP->getAtRules();
	$CSS = $CP->atCSS();
	// echo "<h2>@ CSS</h2><pre>$CSS</pre><br />";

	$CSS = "<pre>" . print_r($CP->used(), true) . "</pre>";
	// echo "<h2>USED</h2>$CSS<br />";

	$CP->preSelcCSS();
	$SEL = $CP->selCSS();
	echo "<h2>Selector</h2><pre>$SEL</pre><br />";


	$CP->getProperties();
	$properties = $CP->properties();
	echo "<h2>Properties</h2>";
	echo "<pre>" . print_r($properties, true) . "</pre>";
	$values = $CP->values();
	echo "<h2>Values</h2>";
	echo "<pre>" . print_r($values, true) . "</pre>";
		
	$CP->addUsed();
	
	$CSS = "<pre>" . print_r($CP->used(), true) . "</pre>";
	echo "<h2>USED</h2>$CSS<br />";
?>