$(document).ready(function() {
	// Set title
	function capitalize(string) {
	    return string.charAt(0).toUpperCase() + string.slice(1);
	}

	var title = window.location.pathname.split("/").pop().slice(0, -4);
	title = capitalize(title);

	$("title").html("Children's Neuroblastoma Cancer Foundation - " + title);

	// Set active tab
	var url = window.location.pathname;
	url = url.split("/").pop();
	$("a.nav-link[href='" + url + "']").addClass("active");


// Owl Carousel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 28,
        nav: true,
        pagination: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

// donate page
    var showOther = document.getElementById("amount-donation-other"); 
    var amountButtons = document.getElementById("amount");
    var otherWrapper = document.getElementById("amountOtherWrapper");  
    var backToAmounts = document.getElementById("other-back-to-amounts");
    
    showOther.addEventListener("click", hideAmounts); 
    backToAmounts.addEventListener("click", revealAmounts);

    function hideAmounts() {
        if (otherWrapper.className === "hide") {
                otherWrapper.className = "";
            } else {
                otherWrapper.className = "hide";
            }
        if (amountButtons.className === "") {
            amountButtons.className = "hide";
        }
    }

    function revealAmounts() {
        if (amountButtons.className === "hide") {
            amountButtons.className = "";
        } else {
            amountButtons.className = "hide";
        }

        if (otherWrapper.className === "") {
            otherWrapper.className = "hide";
        }
    }

    // change to active for btn
     $(".pay-meth-btn").on('click', function(){
    $(this).siblings().removeClass('active')
    $(this).addClass('active');
})

     $(".amt-btn").on('click', function(){
    $(this).siblings().removeClass('active')
    $(this).addClass('active');
});



var showPaypalMeth = document.getElementById('paypal');
showPaypalMeth.addEventListener('click', function () {
    //display hidden div 
    var paypal_div = document.getElementById('paypal-div');
    if (paypal_div.classList.contains('hidden-pay-method')) {
   
    paypal_div.classList.toggle('hidden-pay-method');
    }
    
    //hide other divs
    var credit = document.getElementById('credit_option');
    credit.className = "hidden-pay-method";

    var check = document.getElementById('check-option');
    check.className = "hidden-pay-method";
    
});


var showPaypalMeth = document.getElementById('credit');
showPaypalMeth.addEventListener('click', function () {
    //display hidden div 
    var credit_div = document.getElementById('credit_option');
    if (credit_div.classList.contains('hidden-pay-method')) {
   
    credit_div.classList.toggle('hidden-pay-method');
    }
    
    //hide other divs
    var paypal = document.getElementById('paypal-div');
    paypal.className = "hidden-pay-method";

    var check = document.getElementById('check-option');
    check.className = "hidden-pay-method";
    
});


var showPaypalMeth = document.getElementById('check');
showPaypalMeth.addEventListener('click', function () {
    //display hidden div 
    var check_div = document.getElementById('check-option');
    if (check_div.classList.contains('hidden-pay-method')) {
   
    check_div.classList.toggle('hidden-pay-method');
    }
    
    //hide other divs
    var paypal = document.getElementById('paypal-div');
    paypal.className = "hidden-pay-method";

    var credit = document.getElementById('credit_option');
    credit.className = "hidden-pay-method";
    
});








});


 


