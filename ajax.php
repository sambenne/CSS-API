<?php
	require_once 'css-parser.php';
	$css = file_get_contents($_FILES['file']['tmp_name']);
	$CP = cssParser::getInstance($css);
	$CP->getAtRules();
	$CP->preSelcCSS();
	$CP->getProperties();
	$CP->addUsed();
	$CP->getSupported();
	$CP->report();
?>