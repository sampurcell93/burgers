<?php  require_once("./header.php"); 
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo "hello";
	}
?>

		<div class="wrap main-page" id='home'>
			<h1>
				Gourmet Burgers, sandwiches, and sides... But
			</h1>
		</div>
		<div id="preloader"></div>

		<?php  require_once("./catering.php"); ?>
		<?php  require_once("./menu.php"); ?>
		<?php  require_once("./story.php"); ?>
		<?php  require_once("./press.php"); ?>
		<p id='footer' class="center">All Content Copyright Mainely Burgers 2013<?php 
			$date = date("y");
			if ($date != "13")
				echo " - 20"  . $date;
		?></p>
		<div id="findus" class="fixed">
			<h2 class='center'>Find Us</h2>
				<address class='center p10'>Mainely Burgers <br />
				108 St. John St. <br />
				Portland, ME 04102 <br />
				mainelyburgers@gmail.com <br />
				Tel: (207) 650-6217<br />
				Tel: (207) 272-2921</address>
				<h3 class='p10'>Scarborough Beach</h3>
				<p class='p0'>Serving food at Scarborough Beach on Blackpoint Rd in Scarborough, ME.</p>
				<p class='p0'>Daily 10am - 6pm, Memorial Day through Labor Day</p>

				<h3 class='p10'>On the streets of Portland</h3>
				<p class='p0'>Find us in parking lots and at different events around the city. Keep an eye on our twitter and facebook for updates. To book the truck for an event, use the catering tab above.</p>

			</dl>
		</div>
	</body>
</html>
