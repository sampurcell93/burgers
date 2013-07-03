<?php  require_once("./header.php"); ?>


		<div class="wrap" id='home'>
			<h1 class='center'>Mainely Burgers F<span class="o">o</span><span class="o">o</span>d Trucks</h1>
			<div class="fl w4">
				<h2 class='head p10 center'>A 2013 Entreverge winner</h2>
				<p class='p30'>One of 5 Maine businesses honored for exhibiting 'a scalable vision for the future and a long term commitment to the people, place and prosperity of Maine'</p>
				<h2 class='head p10 center'>Winner of Eater Maine's "Best Burger in Maine" 2013 for the Mainah burger!</h2>
			</div>
			<div class="fr w55">
				<a class="twitter-timeline" href="https://twitter.com/MainelyBurgers" data-widget-id="351531442884444160">Tweets by @MainelyBurgers</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div class="clear"></div>
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
