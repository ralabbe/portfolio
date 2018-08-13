<div id="adventure1" class="uk-background-cover"> <!-- Images -->
	<div uk-lightbox class="uk-padding-large uk-child-width-1-1@s uk-child-width-1-2@xl regularlb" uk-grid>
		<div><a href='./img/adventure/mockup_shirt.jpg'><img src="./img/adventure/mockup_shirt_thumb.jpg" alt="Staff"></a></div>
		<div><a href='./img/adventure/mockup_shirt2.jpg'><img src="./img/adventure/mockup_shirt2_thumb.jpg" alt="Adventure Race shirt"></a></div>
		<div><a href='./img/adventure/mockup_team.jpg'><img src="./img/adventure/mockup_team_thumb.jpg" alt="Staff group photo"></a></div>
		<div><a href='./img/adventure/mockup_rules.jpg'><img src="./img/adventure/mockup_rules_thumb.jpg" alt="Staff with rules"></a></div>
		<div><a href='./img/adventure/mockup_tyler.jpg'><img src="./img/adventure/mockup_tyler_thumb.jpg" alt="Staff eating pizza"></a></div>
		<div><a href='./img/adventure/mockup_riddle.jpg'><img src="./img/adventure/mockup_riddle_thumb.jpg" alt="Riddle sheet marked"></a></div>
	</div>
</div>

<div id="adventure-info" uk-height-viewport> 
	<div class="uk-padding-large uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
		<div> <!-- Detailed Information -->
			<h2><img src="./img/adventure/adventure_icon.png" class="h-icon"> A Prehistoric Adventure</h2>
			<hr class="uk-divider-small">
			<p>
				The <span class="uk-text-bold">Adventure Race</span> is an annual event hosted by the <span class="uk-text-bold">Outdoor Adventure</span> team at the UCF Recreation and Wellness Center. Participants traverse across the UCF campus solving riddles, completing games, and winning prizes. The 2018 Adventure Race had a dinosaur motif leading me to focus on vegitation and a rocky/earthy terrain complimented by dinosaur themed elements. Alongside the usual assets, my marketing team decided on creating a trivia game for players to participate in to encourage social media engagement.
			</p>
			<hr>
			<p class="uk-text-center">
				<span class="uk-text-bold">Project Scope</span>
				<ul class="uk-list uk-list-bullet">
					<li>Design a poster, TV ad, social media assets, and signage</li>
					<li>Create a tag and riddle sheet for participating teams</li>
					<li>Make a shirt design that includes sponsors</li>
					<li>Develop rules posters with detailed game instructions</li>
					<li>Adapt design into a trivia game format for social media engagement</li>
				</ul>
			</p>
		</div>
		<div> <!-- DL/Links/Assets -->
			<div class="uk-card uk-card-default uk-card-body uk-text-center uk-padding uk-width-1-1s uk-width-3-5@xl uk-align-center">
				<h3 class="uk-card-title">Check it out</h3>
				<hr>
				<p><a href="https://www.facebook.com/pg/ucfrwc/photos/?tab=album&album_id=10155742875686329" target="_blank" class="uk-link-text uk-button uk-width-1-1">Event Photography</a></p>
				<div uk-lightbox>
					<a class="uk-button uk-button-secondary uk-width-1-1@s uk-width-4-5@m" data-poster="image.jpg" href="./img/rwc/ar2018.jpg" data-alt="Adventure Race Poster">View Assets</a>
					<a data-poster="image.png" href="./img/adventure/shirt_front.png" data-alt="Adventure Race shirt front"></a>
					<a data-poster="image.png" href="./img/adventure/shirt_back.png" data-alt="Adventure Race shirt back"></a>
					<a data-poster="image.jpg" href="./img/adventure/riddle_front.jpg" data-alt="Riddle sheet front"></a>
					<a data-poster="image.jpg" href="./img/adventure/riddle_back.jpg" data-alt="Riddle sheet back"></a>
					<a data-poster="image.png" href="./img/adventure/tags.png" data-alt="Tags"></a>
					<a data-poster="image.png" href="./img/adventure/rules1.jpg" data-alt="Rules of the race on frame"></a>
					<a data-poster="image.png" href="./img/adventure/rules2.jpg" data-alt="Game rules"></a>
					<a data-poster="image.png" href="./img/adventure/trivia.png" data-alt="Phone trivia game main menu"></a>
					<a data-poster="image.png" href="./img/adventure/screens.png" data-alt="Phone trivia game screenshots"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var $owl = $('.owl-carousel');
	$owl.trigger('destroy.owl.carousel'); // Removes Owl Carousel code
	$owl.html($owl.find('.owl-stage-outer').html()).removeClass('owl-loaded'); // Deletes owl-loaded class
	$owl.owlCarousel();
</script>

