// ===
// Create variables before document load
// ===
var projects = [], // Array for projects from JSON file
	projIndex = 0, // Array for project cycling
	rwcDesigns = []; // Array for RWC designs from JSON file

// ===
// Add projects to array via AJAX call from JSON file
// ===
$.getJSON("./json/projects.json", (data)=>{ // AJAX call to find all listed projects
	var listed = data.projects.listed;
	// Adds each project to an array for future use.
	for (i in listed) {
		var proj = listed[i];
		projects.push(proj);
	}
}).done(()=>{ // When projects array is complete, activate another AJAX call
	$.getJSON("./json/rwc.json", (data)=>{ // AJAX call to find all listed rwc projects
		var listed = data.projects.listed;
		
		for (i in listed) { // Adds each project to an array for future use.
			var proj = listed[i];
			rwcDesigns.push(proj);
		}
	}).done(()=>{ // When RWC AJAX call is complete
		$(function() { // When the document is ready
			//===
			// Initial home page load
			//===
			updatePage(projIndex);


			//===
			// Plugin settings
			//===
			var owlSettings = {
				loop: true,
				margin: 10,
				autoplay: true,
				autoplayTimeout:2200,
				autoplayHoverPause:true,
				smartSpeed: 1800,
				dots: false,
				center: true,
				responsive:{
					0: {
						items: 1.5,
					},
					640: { // Small
						items: 2,
					},
					960: { // Medium
						items: 2,
					},
					1200: { // Large
						items: 2.5,
					},
					1600: { // Extra Large
						items: 3,
					}
				},

			};


			// ===
			// Reinitialize Plugins
			// ===

			function owlcarouselReInit() {
				var $owl = $('.owl-carousel');
				$owl.trigger('destroy.owl.carousel'); // Removes Owl Carousel code
				$owl.html($owl.find('.owl-stage-outer').html()).removeClass('owl-loaded'); // Deletes owl-loaded class
				$owl.owlCarousel(owlSettings);
			}


			// ===
			// Project number cycling
			// ===
			// Left/right button clicks
			$("body").on("click", ".project-cycle", (e)=>{ // Click listener to update current project with project cycling.
				var x = e.target; // Grabs clicked element sent in as a parameter
				var num = $(x).data("cycle"); // Grabs cycle data (number attached to button)
				if (num == null) { // If UI Kit Icon is clicked, grab data from the closest div (prevents grabbing data from the icon's polyline)
					num = $(x).closest("div").data("cycle");
				}
				updateIndex(num); // Update project index with cycle data
			}); // End project cycling

			// Keyboard presses
			$("body").on("keydown", function(e) { // If left or right keys pressed
				if($(".uk-lightbox").css("display") !== "block"){ // Checks if a lightbox is active
					if(e.keyCode == 37) { // Left
						updateIndex(-1); // Update index with -1
					} else if(e.keyCode == 39) { // Right
						updateIndex(1); // Update index with 1
					}
				}
			});

			// Logo press resets cycle to 0
			$("body").on("click", ".logo", ()=>{
				projIndex = 0;
				window.scrollTo(0,0); // Scrolls to the top of the page
				updatePage(projIndex); // Update page
			});

			// Update index number function
			function updateIndex(num){
				projIndex += num; // Adds 1 or -1 based on element's cycle data
				projIndex = projCycleNum(projIndex); // Compares index with projects array length

				updatePage(projIndex); // Update page with new index
				window.scrollTo(0,0); // Scrolls to the top of the page
			}

			function projCycleNum(num) {
				if (num >= Object.keys(projects).length) { // If index is longer than project array length, set to 0
					num = 0;
				} else if (num < 0) { // If index is less than 0, set to end of array
					num = Object.keys(projects).length - 1;
				}
				return num;
			}

			
			// ===
			// Update page
			// ===
			function updatePage(num) { // Updates content page with page number provided
				$(".newpageload").show(); // Shows loading screen

				projActive = projects[num]; // Target project within array based on index

				var hero = $("#hero-section"); // Puts hero section into a variable
				$("#projContent").empty(); // Empties out projContent content
				$("#projContent").append(hero); // Loads hero section using variable from earlier

				$.get("./projects/" + projActive.content).done((data)=>{ // AJAX call to JSON file to grab project html content and update side bar with project info
					
					$("#projContent").append(data); // Loads page sections using data received from AJAX call
					$(".project-counter").html((projIndex + 1) + "/"+ Object.keys(projects).length) // Appends number of projects between next/back buttons

					$(".proj-name").html(projActive.name); // Appends name
					$(".proj-description").html(projActive.description); // Appends description
					$(".proj-categories").html("<span class='uk-label uk-background-muted uk-text-muted'>" + projActive.category + "</span> "); // Appends category

					for (i in projActive.subcategories) { // Loops through each item in the subcategories array
						$(".proj-categories").append("<span class='uk-label uk-background-muted uk-text-muted'>" + projActive.subcategories[i] + "</span> "); // Adds each subcategory to categories div
					}

					$("#hero-section").css("background-image", "url('./img/hero/" + projActive.image + "')");

				}).done(()=>{
					owlcarouselReInit() // Reinitializes owl carousel
					$(".newpageload").hide(); // Hide loading page
				}); // End AJAX call

			} // End updatePage function


			// ---
			// Window resize function
			// ---
			$(window).resize(()=>{
				owlcarouselReInit() // Reinitializes owl carousel
			});


			// ---
			// Contact Form
			// ---
			$("body").on("click", ".uk-modal-close", ()=>{
				var data = $("#contact-form").serializeArray(); // Grabs form data and puts it into an array
				var name = data[0].value,
					email = data[1].value,
					message = data[2].value;

				$.ajax({
					url: './inc/email_send.php',
					type: 'POST',
					data: {
						name: name,
						email: email,
						message: message
					}
				}); // End email send AJAX call
			});

		}); // End of document load function

	}); // End RWC project Array

}); // End projects array

