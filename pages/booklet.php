<div id="booklets_container"></div>

<script>

	// Booklets array
	var booklets = [{
		"key": "45employee",
		"title": "45th Annual Employee Awards Program",
		"pdf": "45th_employee_awards_program",
		"info": "The <span class='uk-text-bold'>UCF Employee Awards</span> is an annual event devoted to celebrating employees for their years of service. The RWC marketing lead and myself were tasked to create the 2018 program. <span class='uk-text-bold'>InDesign and Photoshop</span> were our tools of choice when designing this program. Following the <span class='uk-text-bold'>UCF brand</span> we incorporated a celebratory aesthetic depicting fireworks on the cover and other photography used to honor the ceremony and UCF."
	}, {
		"key": "matter",
		"title": "Herbert Matter Booklet",
		"pdf": "herbert_matter",
		"info": "Herbert Master (1907-1984) was a designer of many talents. He incorporated his modern aesthetic into many mediums including poster design, photography, cinema, and more. This booklet is a guide to his achievements with each page focusing on a different aspect of his design contributions. QR codes were incorporated for interested users to gather more information on select works."
	}, {
		"key": "lep",
		"title": "The Arts & Science of Diversity",
		"pdf": "lep",
		"info": "In 2018, the <span class='uk-text-bold'>UCF Leadership Empowerment Program</span> put together a seminar highlighting diversity in the arts and sciences. I volunteered to design a flyer promoting the event as well as a program detailing its schedule. I created a design with a surrealistic space themed illustration while incorporating the UCF brand guidelines throughout.<p><div uk-lightbox><a class='uk-button uk-button-secondary uk-width-1-1@s uk-width-1-2@m uk-width-1-3@xl' data-poster='image.jpg' href='./img/rwc/misc/diversity.jpg' data-alt='The Arts and Science of Diversity Flyer'>View Flyer</a></div></p>"
	}];

	for(i in booklets){ // Loop through booklets array and append sections to container
		var book = booklets[i];
		var booklet_section = "<hr><div class='uk-padding-large uk-child-width-1-1@s uk-child-width-1-2@m' id='booklet-" + book.key + "' uk-grid><div><img src='./img/booklet/" + book.key + ".png' alt='"+ book.title + "'></div><div class='uk-align-center'><h2>" + book.title + "</h2><hr class='uk-divider-small'><p>" + book.info + "</p><p><a href='./files/" + book.pdf + ".pdf' target='_blank' class='uk-button uk-button-secondary uk-width-1-1@s uk-width-1-2@m uk-width-1-3@xl'>View Booklet</a></p> </div></div>";
		$("#booklets_container").append(booklet_section);
	}
</script>

