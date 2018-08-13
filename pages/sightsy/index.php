<?php
	include('./inc/header.php'); // Header include
?>

<div id="fullpage"> <!-- Fullpage -->
	<div id="one" class="section uk-light">
		<div class="uk-text-center uk-animation-fade uk-flex-center" uk-grid>
			<img src="./img/logo_w.png" alt="Sightsy Logo" class="uk-animation-slide-bottom-medium"> <!-- Logo -->
			<h3 class="uk-width-1-1@s uk-margin text-white">Make the most out of your adventure</h3> <!-- Tagline -->

			<!-- Search Bar-->
			<div class="uk-margin uk-width-1-4@s uk-child-width-1-1@s" uk-grid>
				<form class="uk-search uk-search-default" id="home-search" action="./results.php" method="GET"> <!-- Search form -->
					<a href="#" class="uk-search-icon-flip" id="search_btn_home" uk-search-icon></a> <!-- Magnifying glass icon -->
					<input class="uk-search-input uk-border-rounded text-white uk-padding-small" name="dest" id="dest" type="search" placeholder="Let's explore"> <!-- Search input -->
				</form>
			</div>
		</div>
	</div> <!-- End Section 1 -->



	<div id="two" class="section uk-padding-large">
    	<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
			<div class="uk-card-media-left uk-cover-container">
				<img uk-cover class="" src="img/hotel.jpg" alt="hotels">
			</div>
			<div class=" uk-card uk-card-body">
				<h3 class="uk-text-primary">FIND A HOTEL</h3>
				<p>
					Welcome to YourTrip! Where you can plan your vacation with just a couple searches. Begin by letting us find you hotels at the most affordable rates.
				</p>
			</div>
		</div>

		<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
			<div class="uk-card uk-card-body">
				<h3 class="uk-text-primary">EXPLORE THE AREA</h3>
				<p>
					Check out areas near your destination. Find theme parks, museums, sports stadiums, restaurants and more all with a quick click.
				</p>
			</div>
			<div class="uk-card-media-right uk-cover-container">
				<img uk-cover src="img/places.jpeg" alt="places">
			</div>
		</div>
	</div> <!-- End Section 2 -->



	<div id="three" class="section uk-text-center">
		<h2 class="text-white">FEATURED LOCATIONS</h2>
		<div class="uk-child-width-1-2@s uk-child-width-1-4@l uk-margin-large-left uk-margin-large-right" uk-grid>
			<div>
				<div class="uk-card uk-card-default">
					<div class="uk-card-media-top">
						<img src="img/miami.jpg" alt="">
					</div>
					<div class="uk-card-body">
						<h3 class="uk-card-title">Miami, FL</h3>
						<p>Cuban influence is reflected in the cafes and cigar shops that line Calle Ocho in Little Havana.</p>
					</div>
					<div class="uk-card-footer">
						<a href="results.php?dest=miami" class="uk-button uk-button-default">Explore</a>
					</div>
				</div>
			</div>
		<div>
			<div class="uk-card uk-card-default">
				<div class="uk-card-media-top">
					<img src="img/denver.jpg" alt="">
				</div>
				<div class="uk-card-body">
					<h3 class="uk-card-title">Denver, CO</h3>
					 <p>An American metropolis dating to the Old West era where Larimer Square features landmark 19th-century buildings.</p>
					</div>
					<div class="uk-card-footer">
						<a href="results.php?dest=denver" class="uk-button uk-button-default">Explore</a>
					</div>
				</div>
			</div>
			<div>
				<div class="uk-card uk-card-default">
					<div class="uk-card-media-top">
						<img src="img/austin.jpg" alt="">
					</div>
					<div class="uk-card-body">
						<h3 class="uk-card-title">Austin, TX</h3>
						<p>A city with parks and an energetic nightlife. Known for its eclectic live-music scene centered around country, blues and rock.</p>
					</div>
					<div class="uk-card-footer">
						<a href="results.php?dest=austin" class="uk-button uk-button-default">Explore</a>
					</div>
				</div>
			</div>
			<div>
				<div class="uk-card uk-card-default">
					<div class="uk-card-media-top">
						<img src="img/vegas.jpg" alt="">
					</div>
					<div class="uk-card-body">
						<h3 class="uk-card-title">Las Vegas, NV</h3>
						<p>Las Vegas is a resort city famed for its vibrant nightlife, centered around 24-hour casinos and other entertainment options</p>
					</div>
					<div class="uk-card-footer">
						<a href="results.php?dest=austin" class="uk-button uk-button-default">Explore</a>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- End Section 3 -->
</div> <!-- End Fullpage container -->

<?php
	include('./inc/footer.php'); // Footer include
?>
