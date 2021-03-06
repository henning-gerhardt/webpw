<?php
require_once('lang/.init.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php __('WebPW'); ?> - <?php __('About'); ?></title>
	<?php require("head.php"); ?>
</head>
<body>

<?php $loginmenu = true; require_once("menu.php"); ?>

	<div id="contentcontainer">
		<h1>About WebPW v0.0.7</h1>
		<h2>web based PHP password safe</h2>
		<br>
		<hr>
		<br>
		<ul>
			<li>© 2017 Georg Sieber</li>
			<li>fork me on <a href="https://github.com/schorschii/webpw" target="_blank">GitHub</a>!</li>
			<li>uses the <a href="https://github.com/parsecsv/parsecsv-for-php" target="_blank">parseCSV</a> library © 2014 Jim Myhrberg
				<br>(licensed under the terms of the MIT license)</li>
			<li>uses a background image from <a href="https://qrohlf.com/trianglify-generator/" target="_blank">Qrohlf's Trianglify Generator</a></li>
			<li>WebPW is licensed under the terms of the GPLv2
				<br>(see below or LICENSE.txt)</li>
		</ul>
		<br>
		<hr/>
		<br>
		<div style="white-space:pre;font-family:monospace;">
<?php require('LICENSE.txt'); ?>
		</div>
	</div>

</body>
</html>
