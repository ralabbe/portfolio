<?php
	include('./inc/header.php'); // Header include
?>

<!-- Sticky Navbar -->
<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container uk-position-relative" uk-navbar style="z-index: 980;">
    	<!-- Left align nav container -->
		<div class="uk-navbar-left text-white" id="nav-logo">
			<!-- Logo -->
			<a href="index.php" class=" uk-padding-small"><img src="./img/logo_ws.png" alt="logo"></a>
		</div> <!-- End left align nav container -->


		<!-- Right align nav container -->
    	<div class="uk-navbar-right uk-padding-small">
			<form class="uk-search uk-search-default" method="GET" action="" id="search-form"> <!-- Search form -->
				<input class="uk-search-input uk-border-rounded uk-text-capitalize" name="dest" id="dest" type="search" placeholder="Let's explore"> <!-- Search input -->
				<a href="#" class="uk-search-icon-flip" id="search_btn" uk-search-icon></a> <!-- Magnifiying glass icon -->
			</form>
		</div> <!-- Ed right align nav container -->
    </nav>
</div> <!-- End sticky nav -->


<!-- Google Maps container -->
<div id="map-div"></div> 

<!-- Results container -->
<div class="results-div"> 
	<!-- Hotel Results -->
	<div class="uk-padding-large">
		<!-- Sorting Filters -->
		<h2>Hotels</h2>
		<div class="uk-margin">
			<div class="uk-display-inline" data-uk-form-select>
				<label>Price</label>
				<select id="price-select">
					<option value=""></option>
					<option value="asc">Low to High</option>
					<option value="desc">High to Low</option>
				</select>
			</div>

			<div class="uk-display-inline" data-uk-form-select>
				<label>Star Rating</label>
				<select id="star-select">
					<option value=""></option>
					<option value="5">5 Stars</option>
					<option value="4">4 Stars</option>
					<option value="3">3 Stars</option>
					<option value="2">2 Stars</option>
					<option value="1">1 Star</option>
				</select>
			</div>
		</div> <!-- End sorting dropdowns -->

		<!-- Hotwire Results -->
		<div class="uk-position-relative uk-visible-toggle" uk-slider="sets: true">
			<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-child-width-1-5@l uk-child-width-1-6@xl uk-grid" id="main-div">
			</ul>

			<!-- Side page buttons -->
			<a class="uk-position-center-left uk-position-small uk-hidden-hover slider-button" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			<a class="uk-position-center-right uk-position-small uk-hidden-hover slider-button" href="#" uk-slidenav-next uk-slider-item="next"></a>

			<!-- Pagination buttons -->
			<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
		</div>
	</div> <!-- End hotel results -->

	<!-- Events Results -->
	<div class="uk-padding-large">
		<div class="uk-position-relative uk-visible-toggle" uk-slider="sets: true">
			<h2>Nearby Events</h2>
			<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-child-width-1-5@l uk-child-width-1-6@xl uk-grid" id="event-div"></ul>

			<!-- Side page buttons -->
			<a class="uk-position-center-left uk-position-small uk-hidden-hover slider-button" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			<a class="uk-position-center-right uk-position-small uk-hidden-hover slider-button" href="#" uk-slidenav-next uk-slider-item="next"></a>

			<!-- Pagination buttons -->
			<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
		</div>
	</div> <!-- End event results -->
</div> <!-- End results container -->

<?php
	include('./inc/footer.php'); // Footer include
?>