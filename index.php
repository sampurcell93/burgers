<?php  require_once("./header.php"); ?>


		<div class="wrap" id='home'>
			<h1 class='center'>A Food Truck in Portland, ME</h1>
			<a href='https://twitter.com/mainelyburgers' title='Twitter Link'>Twitter</a>
			<a href="http://www.facebook.com/mainelyburgers" title='Facebook'>Facebook</a>
		</div>
		<div id="preloader"></div>

		<?php  require_once("./catering.php"); ?>
		<?php  require_once("./menu.php"); ?>
		<?php  require_once("./story.php"); ?>
		<?php  require_once("./press.php"); ?>
		<?php  require_once("./findus.php"); ?>
		<p id='footer' class="center">All Content Copyright Mainely Burgers 2013<?php 
			$date = date("y");
			if ($date != "13")
				echo " - 20"  . $date;
		?></p>
	</body>
</html>
