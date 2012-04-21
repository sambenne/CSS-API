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

		<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
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
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
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
								<li class=""><a href="#lC" data-toggle="tab">New CSS</a></li>
								<li class=""><a href="#lD" data-toggle="tab">What we get!</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="lA">
									<h2>Current State</h2>
									<p>I have only been working on this a little and have made a bit of a progress. I have started on my Array of data on selectors, properties and values etc. I have started a CSS parser to get the Selectors. I think I am currently just going to get selectors working first and then add the others. I will be creating a class so that I can easily add in new features.</p>
									<p>Once I have it working out which features are used I will be able to work out if the browsers support them and be able to build a report on it. I will also make it so that you can easily add your CSS to the page by three ways file upload, URL and Direct Input.</p>
									<p>I am hoping that I will be able to create an API so that users can just send an URL and get the data with JavaScript.</p>
								</div>
								<div class="tab-pane" id="lB">
									<pre class="prettyprint linenums"><?php $CSS = $CP->rawCSS(); echo $CSS; ?></pre>
								</div>
								<div class="tab-pane" id="lC">
									<?php
										$CP->preSelcCSS();
										$CP->getSelectors();
										$temp = $CP->selCSS();
									?>
									<pre class="prettyprint linenums"><?php echo $temp; ?></pre>
								</div>
								<div class="tab-pane" id="lD">
									<?php
										$CSS = "<pre>" . print_r($CP->used(), true) . "</pre>";
										echo "<h2>What we have got!</h2>$CSS<br />";
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
