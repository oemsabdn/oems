<html>
	<head>
		<title>On-demand Learning - Critical CSS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div style="max-width:768px;font-family:Helvetica,sans-serif;padding:20px;margin:auto;">
			<h1>Critical CSS and JS</h1>
			<p><a href="index.php">Go back</a>.</p>
			<p>These are current versions of all templates with inline critical CSS and JS.</p>
			<p>I won't be regenerating these every time I make a change to a template, so these should be used only for implementing page speed improvements. At the end of each sprint I will generate a final version of each template which can be used for implementation.</p>
			<h2>Done</h2>
			<p>Note that for product pages I have added a more realistic amount of content, removed blocks with intentionally broken images and not included any embeds. Lighthouse was complaining about the size of the DOM on the standard product templates because they contain every single variation of every block. The broken elements will also have a minor effect of speed too. YouTube embeds load an analytics script, which we can't do much about, so it seems unnecessary to include it in our testing.</p>
			<ul>
				<li><a href="./critical-css/critical-css-template-home-v2.php">Home page (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-programme-details.php">Programme details (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-course-details.php">Course details (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-article-list-v2.php">Article list (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-article-section.php">Article section (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-article-v2.php">Article (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-categories.php">Categories (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-category-single-v2.php">Single category (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-landing-page.php">Landing page (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-course-list.php">(NEW) Course list (critical CSS)</a></li>
				<li><a href="./critical-css/critical-css-template-programme-list.php">(NEW) Programme list (critical CSS)</a></li>
			</ul>
		</div>
	</body>
</html>