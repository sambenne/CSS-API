<?php
	require_once 'css-parser.php';
	$CP = cssParser::getInstance();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CSS Compatability API By Sam Bennett</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Sam Bennett">

		<link href="css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
			.sup-0 {background-color: #faa !important;}
			.sup-1 {background-color: #c9e3b4 !important;}
			.sup-2 {background-color: #fffacf !important;}
			.sup-3 {background-color: #fffacf !important;}
		</style>
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<!-- <link href="css/prettify.css" rel="stylesheet" /> -->

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand" href="#">CSS Compatability API</a>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="hero-unit">
						<h1>CSS Compatability API for Internet Explorer!</h1>
						<p>Want a quick easy way to find out if your CSS is supported in all IE Browsers? Well you can here. I am creating an app that will allow you to find out if the selectors, properties, values and units you have used are able to work.</p>
					</div>
					<div class="row-fluid">
						<div class="tabbable tabs-left">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#lA" data-toggle="tab">Current State</a></li>
								<li><a href="#lB" data-toggle="tab">The CSS</a></li>
								<li><a href="#lC" data-toggle="tab">New CSS</a></li>
								<li><a href="#at" data-toggle="tab">@types</a></li>
								<li><a href="#lD" data-toggle="tab">What we get!</a></li>
								<li><a href="#results" data-toggle="tab">The Results</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="lA">
									<h2>Current State</h2>
									<p>I have created a class that is dealing with the CSS. It currently cleans up the CSS and in seperate functions it does what it needs to get the 4 different parts that it needs to work out the selectors, properties etc.<br />So far it can get pretty much all the selectors bar one or two due to me not having done the regex yet, it then searches through the CSS building an array of what it finds. I have also started it getting the properties however, there is a lot of regex as there is a lot of properties. I will then get the values and units sorted afterwards.</p>
									<p>Once I have it working out which features are used I will be able to work out if the browsers support them and be able to build a report on it. I will also make it so that you can easily add your CSS to the page by three ways file upload, URL and Direct Input.</p>
									<p>I am hoping that I will be able to create an API so that users can just send an URL and get the data with JavaScript.</p>
									<p>Don't forget to check the code out on my <a href="https://github.com/sambenne/CSS-API">GitHub Page</a>.</p>
								</div>
								<div class="tab-pane" id="lB">
									<h2>The CSS</h2>
									<p>This is the CSS that I am using to test that the parser is working. I will be adding more to this as I go along to fit in with the tests. This CSS is what is currently being used and that is why it is different to the actual file because it has had the Comments removed.</p>
									<pre class="prettyprint linenums"><?php $CSS = $CP->rawCSS(); echo $CSS; ?></pre>
								</div>
								<div class="tab-pane" id="lC">
									<h2>The New CSS</h2>
									<p>To make things easier I do a clean up of the CSS. I remove unwanted whitespace, add in missing <code>;</code>(Only on the last line of each selector.). I then compress the CSS as well this is so that I can get what I need easier later on.</p>
									<?php
										$CP->preSelcCSS();
										$SEL = $CP->selCSS();
										$CP->getProperties();
										$properties = $CP->properties();
										$values = $CP->values();
										$CP->addUsed();
										$temp = $CP->cleanCSS();
									?>
									<pre><?php echo $temp; ?></pre>
								</div>
								<div class="tab-pane" id="at">
									<h2>The @Types</h2>
									<p>This is where I get all the CSS blocks that start with the @ symbol as these need some special care.</p>
									<?php
										$CP->getAtRules();
										$CSS = $CP->atCSS();
										$atTypes = $CP->used();
										echo "<pre>" . print_r($atTypes['at-types'], true) . "</pre>";
									?>
									<!-- <pre><?php echo $CSS; ?></pre> -->
								</div>
								<div class="tab-pane" id="lD">
									<h2>What we end up with in the end</h2>
									<p>This is what we have so far.</p>
									<?php
										echo "<h3>Selectors</h3><p>These are all the selectors that are in the CSS, however, not all will be needed as some will end up giving us duplicates. So they will get ignored.</p><pre>$SEL</pre><br />";
										echo "<h3>Properties</h3><p>These are all the properties that we found. currently this has gotten rid of all the duplicates. Some of you might notice that I have a property in there that isn't an actual property. What I am hoping to do is a bit of validation later on.</p>";
										echo "<pre>" . print_r($properties, true) . "</pre>";
										echo "<h3>Values</h3><p>These are all the unique values that we have found. I will be using these to determine the values and units.</p>";
										echo "<pre>" . print_r($values, true) . "</pre>";
										$CSS = "<pre>" . print_r($CP->used(), true) . "</pre>";
										echo "<h3>What we found</h3><p>So this is what I will be using to the comparison later on. I have put a little more information for testing in it but that will be removed.</p>$CSS";
									?>
								</div>
								<div class="tab-pane" id="results">
									<h2>The Results So Far</h2>
									<p>This is showing what is found when parsing the CSS. Currently it only does selectors and properties.</p>
									<div class="row-fluid">
										<table id="table" class="table table-striped table-bordered table-condensed span6">
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
													$CP->getSupported();
													$CP->report();
												?>
											</tbody>
										</table>
										<div class="span6">
											<h3>Min supported version: <?php echo $CP->minSupport(); ?></h3>
										</div>
									</div>
									<?php
										$CSS = $CP->rawCSS();
										echo "<h3>Raw CSS</h3><p>This is what it is checking.</p><pre>$CSS</pre>";
									?>
								</div>
							</div>
						</div>
					</div><!--/row-->
				</div><!--/span-->
			</div><!--/row-->

			<hr>

			<footer>
				<p>&copy; Sam Bennett 2012</p>
			</footer>

		</div><!--/.fluid-container-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-button.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-collapse.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-typeahead.js"></script>
		<script type="text/javascript" src="js/prettify.js"></script>

	</body>
</html>
