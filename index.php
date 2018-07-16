<?php
include('./inc/header.php');
include('./inc/nav.php');
?>

<div class="newpageload uk-width-1-1@s uk-width-2-3@m uk-position-fixed uk-position-z-index" uk-height-viewport>
	<div class="uk-position-center"><img src="./img/logos/logo.png" alt="Rafael Labbe Logo"></div>
</div>

<div class="uk-visible@m">
	<!-- Logo -->
	<div class="logoContainer uk-position-z-index uk-position-fixed uk-width-1-1" uk-height-viewport>
		<div class="logo uk-position-z-index uk-position-center"></div>
		<div class="logo-bg uk-position-center uk-border-circle"></div>
	</div>

	<!-- Navbar -->
	<div class="uk-position-top">
		<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
			<div class="uk-navbar-left uk-position-z-index">
				<ul class="uk-navbar-nav project-nav uk-text-bold">
					<li><a href="#contact-page" uk-toggle>Contact</a></li>
				</ul>
			</div>
		</nav>
	</div> <!-- End Position Top -->
</div>


<!-- Containers -->
<div class="uk-width-1-3@m uk-padding-large uk-text-center project-side-container uk-visible@m" uk-height-viewport>

	<!-- Project Info -->
	<div class="uk-width-1-2@s uk-width-4-5@m uk-width-3-5@xl uk-position-center uk-padding">
		<h1 class="uk-text-bold proj-name"></h1> <!-- Project Name -->
		<hr>
		<p class="proj-description"></p> <!-- Project Description -->
		<div class="categories uk-margin-top proj-categories"></div> <!-- Categories list -->
	</div>

	<!-- Project Cycling -->
	<div class="uk-position-bottom uk-margin-large">
		<div class="uk-inline-block uk-padding-small uk-border-circle uk-margin-right project-cycle" data-cycle=-1><span uk-icon="arrow-left" data-cycle=-1></span></div>
		<div class="uk-margin-large uk-text-large uk-inline-block"><i class="project-counter">-/-</i></div>
		<div class="uk-inline-block uk-padding-small uk-border-circle uk-margin-left project-cycle" data-cycle=1><span uk-icon="arrow-right" data-cycle=1></span></div>
	</div>
</div>

<!-- Project Content -->

<div class="uk-width-2-3@m uk-width-1-1@s uk-float-right uk-padding-remove project-container">
	
	<div id="projContent">

		<div class="uk-background-cover uk-animation-slide-right uk-animation-fast" id="hero-section" uk-height-viewport>
			<!-- Project Info Mobile Version -->
				<div class="uk-width-1-1 uk-text-center mobile-hero uk-hidden@m" uk-height-viewport>
					<div class="mobile-container">
						<div class="uk-padding-small">
							<div class="logo uk-float-left"></div> <!-- Logo Container -->
							<ul class="uk-navbar-nav project-nav uk-text-bold">
								<li><a  href="#contact-page" uk-toggle>Contact</a></li>
							</ul>
							
							
							<div class="uk-position-center uk-padding-small mobile-container-info">
							<!-- Project Info -->
							
								<h1 class="uk-text-bold proj-name"></h1> <!-- Project Name -->
								<hr class="uk-divider-small">
								<p class="proj-description"></p> <!-- Project Description -->
								<div class="categories uk-margin-top proj-categories"></div> <!-- Categories list -->
								<div class="uk-width-1-1" style="height: 58px;">
								</div>
							
							</div>
							<!-- Project Cycling -->
							<div class="uk-margin-small uk-position-bottom project-cycle-mobile" style="">
								<div class="uk-inline-block uk-padding-small uk-border-circle uk-margin-right project-cycle" data-cycle=-1><span uk-icon="arrow-left" data-cycle=-1></span></div>
								<div class="uk-margin uk-text-large uk-inline-block"><i class="project-counter">-/-</i></div>
								<div class="uk-inline-block uk-padding-small uk-border-circle uk-margin-left project-cycle" data-cycle=1><span uk-icon="arrow-right" data-cycle=1></span></div>
								<br>
								<span class="uk-text-meta uk-margin-remove"><span uk-icon="icon: triangle-down"></span> Scroll down for more info <span uk-icon="icon: triangle-down"></span></span>
							</div>
						</div> <!-- End padding -->
					</div> <!-- End mobile-container -->
				</div> <!-- End mobile info container -->
			</div> <!-- End hero section -->
	</div> <!-- End projContent -->
<div class="uk-margin-large uk-text-center"> <a href="#" class="uk-button uk-button-default scroll-button" uk-scroll>Scroll to top</a></div>
</div> <!-- End project-container -->



<?php
include('./inc/contact.php'); // Contact form
include('./inc/footer.php');
?>