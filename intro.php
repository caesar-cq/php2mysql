<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>MTree, A web-based Phylogenetic Tree Generator using Mitochondrial genome</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="assets/css/reveal.css">
		<link rel="stylesheet" href="assets/css/theme/beige.css" id="theme">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="assets/lib/css/zenburn.css">

		<!-- icons from font awesome-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'assets/css/print/pdf.css' : 'assets/css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<div class="slides">

<?php include("content.php") ?>
			
			</div>

		</div>

		<script src="assets/lib/js/head.min.js"></script>
		<script src="assets/js/reveal.js"></script>

		<script>

			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,
				slideNumber: true,

				transition: 'slide', // none/fade/slide/convex/concave/zoom

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
					{ src: 'assets/lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'assets/plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'assets/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'assets/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'assets/plugin/zoom-js/zoom.js', async: true },
					{ src: 'assets/plugin/notes/notes.js', async: true },
					{ src: 'assets/plugin/reveal.js-menu/menu.js' }
				],

				menu: {
					// Specifies which side of the presentation the menu will 
					// be shown. Use 'left' or 'right'.
					side: 'left',

					// Add slide numbers to the titles in the slide list.
					// Use 'true' or format string (same as reveal.js slide numbers)
					numbers: false,

					// Specifies which slide elements will be used for generating
					// the slide titles in the menu. The default selects the first
					// heading element found in the slide, but you can specify any
					// valid css selector and the text from the first matching
					// element will be used.
					// Note: that a section data-menu-title attribute or an element
					// with a menu-title class will take precedence over this option
					titleSelector: 'h1, h2, h3, h4, h5, h6',

					// Hide slides from the menu that do not have a title.
					// Set to 'true' to only list slides with titles.
					hideMissingTitles: false,

					// Add markers to the slide titles to indicate the 
					// progress through the presentation
					markers: false,

					// Specify custom panels to be included in the menu, by
					// providing an array of objects with 'title', 'icon'
					// properties, and either a 'src' or 'content' property.
					custom: false,

					// Specifies the themes that will be available in the themes
					// menu panel. Set to 'false' to hide themes panel.
					themes: [
						{ name: 'Black', theme: 'assets/css/theme/black.css' },
						{ name: 'White', theme: 'assets/css/theme/white.css' },
						{ name: 'League', theme: 'assets/css/theme/league.css' },
						{ name: 'Sky', theme: 'assets/css/theme/sky.css' },
						{ name: 'Beige', theme: 'assets/css/theme/beige.css' },
						{ name: 'Simple', theme: 'assets/css/theme/simple.css' },
						{ name: 'Serif', theme: 'assets/css/theme/serif.css' },
						{ name: 'Blood', theme: 'assets/css/theme/blood.css' },
						{ name: 'Night', theme: 'assets/css/theme/night.css' },
						{ name: 'Moon', theme: 'assets/css/theme/moon.css' },
						{ name: 'Solarized', theme: 'assets/css/theme/solarized.css' }
					],

					// Specifies if the transitions menu panel will be shown.
					transitions: true,

					// Adds a menu button to the slides to open the menu panel.
					// Set to 'false' to hide the button.
					openButton: true,

					// If 'true' allows the slide number in the presentation to
					// open the menu panel. The reveal.js slideNumber option must 
					// be displayed for this to take effect
					openSlideNumber: false,

					// If true allows the user to open and navigate the menu using
					// the keyboard. Standard keyboard interaction with reveal
					// will be disabled while the menu is open.
					keyboard: true
				}
			});

		</script>

	</body>
</html>