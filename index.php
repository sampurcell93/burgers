<?php  require_once("./header.php") ;?>
		<div class="wrap main-page" id='home'>
			<h1>
				Gourmet Burgers, sandwiches, and sides. <br />But <span class="oleo s1-3">Mainely Burgers</span>.
			</h1>
		</div>

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
