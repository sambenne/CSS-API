<?php
	require_once 'css-parser.php';

	$CP = cssParser::getInstance();
	$CSS = $CP->rawCSS();
	// echo "<h2>Raw CSS</h2><pre>$CSS</pre><br />";


	$CP->getAtRules();
	$CSS = $CP->atCSS();
	// echo "<h2>@ CSS</h2><pre>$CSS</pre><br />";

	// $CSS = "<pre>" . print_r($CP->used(), true) . "</pre>";
	// echo "<h2>USED</h2>$CSS<br />";

	$CP->preSelcCSS();
	$SEL = $CP->selCSS();
	// echo "<h2>Selector</h2><pre>$SEL</pre><br />";


	$CP->getProperties();
	$properties = $CP->properties();
	// echo "<h2>Properties</h2>";
	// echo "<pre>" . print_r($properties, true) . "</pre>";
	$values = $CP->values();
	// echo "<h2>Values</h2>";
	// echo "<pre>" . print_r($values, true) . "</pre>";
		
	$CP->addUsed();
	
	// $CSS = "<pre>" . print_r($CP->used(), true) . "</pre>";
	// echo "<h2>USED</h2>$CSS<br />";

	$CP->getSupported();
?>
<html>
<head>
	<title>CSS Compatability Test</title>
	<style type="text/css">
		body {font-family:"Lucida Sans Unicode", "Lucida Grande", Sans-Serif;}
		#table {font-size:12px;width:480px;text-align:left;border-collapse:collapse;margin:20px;}
		#table th{font-size:14px;font-weight:normal;color:#039;padding:12px 12px; text-align: center;}
		#table td{color:#669;border-top:1px solid #e8edff;padding:10px 15px; text-align: center;}
		.first{background:#d0dafd;border-right:10px solid transparent;border-left:10px solid transparent; text-align: left !important;}
		#table tr:hover td{color:#339;background:#eff2ff;}
		.sup-0 {background-color: #faa;}
		.sup-1 {background-color: #c9e3b4;}
		.sup-2 {background-color: #fffacf;}
		.sup-3 {background-color: #fffacf;}
		pre {
			display: block;
			padding: 8.5px;
			margin: 0 0 9px;
			font-size: 12.025px;
			line-height: 18px;
			background-color: whiteSmoke;
			border: 1px solid #CCC;
			border: 1px solid rgba(0, 0, 0, 0.15);
			border-radius: 4px;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			white-space: pre;
			white-space: pre-wrap;
			word-break: break-all;
			word-wrap: break-word;
			font-family: Consolas, Monaco, "Courier New", monospace;
			color: #333;
       }
	</style>
</head>
<body>
	<h2>Min supported version: <?php echo $CP->minSupport(); ?></h2>
	<table id="table">
		<thead>
			<tr>
				<th>Type</th>
				<th>IE 5</th>
				<th>IE 5.5</th>
				<th>IE 6</th>
				<th>IE 7</th>
				<th>IE 8</th>
				<th>IE 9</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$CP->report();
			?>
		</tbody>
	</table>
	<?php
		$CSS = $CP->rawCSS();
		echo "<h3>Raw CSS</h3><pre>$CSS</pre>";
	?>
</body>
</html>