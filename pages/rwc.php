<div id="rwc1"> <!-- Images -->
	<div class="uk-padding-large uk-width-1-1 uk-text-center">
		<h1 class="uk-text-bold">Poster Designs</h1>
	</div>
	<div class="owl-content">
		<div class="owl-carousel uk-width-1-1 poster-carousel" uk-lightbox></div> <!-- End Owl Carousel -->
	</div> <!-- End Owl Content -->
</div>


<div id="rwc2">
	<div class="uk-padding-large uk-width-1-1 uk-text-center">
		<h1 class="uk-text-bold">Other Designs</h1>
	</div>
	<div class="owl-content">
		<div class="owl-carousel uk-width-1-1 misc-carousel" uk-lightbox></div> <!-- End Owl Carousel -->
	</div> <!-- End Owl Content -->
</div>

<div id="rwc-info" uk-height-viewport>
	<div class="uk-padding-large uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
		<div> <!-- Detailed Information -->
			<h2><img src="./img/rwc/rwc_logo.png" alt="RWC silhouette icon" class="h-icon"> What is the RWC</h2>
			<hr class="uk-divider-small">
			<p>
				The <span class="uk-text-bold">UCF Recreation and Wellness Center</span> (RWC) is devoted to providing its patrons with an environment promoting physical and mental wellness. One of the many ways this is achieved is with over 200 events happening throughout the year ranging from a variety of sports, exercises, adventure trips, adaptive recreation and more. With a diverse group of student members, the marketing staff focused on showcasing diversity when designing marketing materials.
			</p>
			<hr>
			<p class="uk-text-center">
				<span class="uk-text-bold">My Responsibilities</span>
				<ul class="uk-list uk-list-bullet">
					<li>Design posters, shirts, booklets, signage, and more</li>
					<li>Maintain a strong social media presence</li>
					<li>Brainstorm creative marketing concepts</li>
					<li>Share knowledge of Adobe programs with marketing staff</li>
					<li>Photograph events and retouch photos</li>
					<li>Update 2017-2018 and 2018-2019 Guidebooks</li>
				</ul>
			</p>
			<hr>
			<p class="uk-text-meta">
				At the RWC I received the Employee of the Year award, completed the Student Enhancement Training (SET) program, and participated in the NIRSA 2018 Florida State Summit at UF.
			</p>
		</div>

		<div> <!-- DL/Links/Assets -->
			<div class="uk-card uk-card-default uk-card-body uk-text-center uk-padding uk-width-1-1s uk-width-3-5@xl uk-align-center">
				<h3 class="uk-card-title">Photography</h3>
				<hr>
				<p class="photo-links"></p>
			</div>
		</div>
	</div>
</div>


<script>
	var $owl = $('.owl-carousel');
	$owl.owlCarousel(); // Initializes Owl Carousel
	for (i in rwcDesigns) { // Cycles through rwc designs array (created using JSON file)
		var proj = rwcDesigns[i];
		if (proj.cat == "poster") {
			var carouselitem = "<div class='uk-text-center'><a href='./img/rwc/" + proj.image + "' data-alt='" + proj.name + "'><img src='./img/rwc/" + proj.thumb + "' alt='" + proj.name + "'></a><p class='uk-text-meta'>" + proj.facility + "<br><span class='uk-text-bold'>" + proj.name + "</span></p></div>";
			$(".poster-carousel").trigger('add.owl.carousel', [carouselitem, 1]);
		} else if (proj.cat == "misc"){
			var carouselitem = "<div class='uk-text-center'><a href='./img/rwc/misc/" + proj.image + "' data-alt='" + proj.name + "'><img src='./img/rwc/misc/" + proj.thumb + "' alt='" + proj.name + "'></a><p class='uk-text-meta'><span class='uk-text-bold'>" + proj.name + "</span></p></div>";
			$(".misc-carousel").trigger('add.owl.carousel', [carouselitem, 1]);
		}
	}
	$owl.trigger('destroy.owl.carousel'); // Removes Owl Carousel code
	$owl.html($owl.find('.owl-stage-outer').html()).removeClass('owl-loaded'); // Deletes owl-loaded class
	$owl.owlCarousel();


	var photography = [{ // Array with all photography links
			"url": "https://www.facebook.com/pg/ucfrwc/photos/?tab=album&album_id=10155906548816329",
			"name": "Racquetball Ladder"
		}, {
			"url": "https://www.facebook.com/90819931328/photos/?tab=album&album_id=10155900157436329",
			"name": "Tinikling Dance"
		}, {
			"url": "https://www.facebook.com/90819931328/photos/?tab=album&album_id=10155894190776329",
			"name": "Splashdown 2018"
		}, {
			"url": "https://www.facebook.com/90819931328/photos/?tab=album&album_id=10155787167491329",
			"name": "Kendo Training"
		}, {
			"url": "https://www.facebook.com/90819931328/photos/?tab=album&album_id=10155762130271329",
			"name": "Baseball vs Georgia Tech"
		}, {
			"url": "https://www.facebook.com/90819931328/photos/?tab=album&album_id=10155673903676329",
			"name": "Guided Meditation"
		}, {
			"url": "https://www.facebook.com/pg/ucfrwc/photos/?tab=album&album_id=10155495577866329",
			"name": "Belly Dancing"
		}, {
			"url": "https://www.facebook.com/pg/ucfrwc/photos/?tab=album&album_id=10155458098176329",
			"name": "Halloween Knight Climb"
		}, {
			"url": "https://www.facebook.com/pg/ucfrwc/photos/?tab=album&album_id=10155235318261329",
			"name": "Dodgeball"
		}, {
			"url": "https://www.facebook.com/90819931328/photos/?tab=album&album_id=10156139611171329",
			"name": "Rock Climbing League"
		}
	]

	for(i in photography){ // Conditional statement creating buttons for each photography link
		var info = photography[i];
		var link = "<a href='" + info.url + "' target='_blank' class='uk-link-text uk-button uk-width-1-1'>" + info.name + "</a>";
		$(".photo-links").append(link);
	}
</script>