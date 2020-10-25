$(document).ready(function() {
	$("html").on("click", '.mobile',function(){$("header").toggleClass('opened'); $("body").toggleClass("noscroll")});

	    //Social Icons
	$("header ol li a img").mouseenter(function() {
	    $(this).addClass("animated bounceIn"), $(this).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
	        $(this).removeClass("animated bounceIn")
	    })
	});


	/********************************** CONTACT FORM **************************************************/
	if($("#contact").length) {
		$.validator.addMethod("valida_correo", function(a, b) {
		 	return/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9])+$/.test($('input[name="email"]').val())
		}, "invalid email.");

	    $("#contact  form").validate({
	    	rules: {
	    		name: {
	    			required: true
	    		},
	    		email: {
	    			required: true,
	    			valida_correo: true
	    		},
	    	},
	    	messages: {
	    		name: {
	    			required: "Campo requerido"
	    		},
	    		email: {
	    			required: "Campo requerido",
	    			valida_correo: "Email invalido"
	    		},
	    		phone: {
	    			number: "Solo se aceptan numeros"
	    		}
	    	},
	    	submitHandler: form => {
	    		$.ajax({
	    		    type:"POST", 
	    		    url:"http://tlsatmex.com/php/contact.php", 
	    		    data:$(form).serialize(),
	    		    dataType: "json", 
	    		    beforeSend:function() {
	    		        PoppyPopup.message('Please wait...', '<i class="fas fa-spinner fa-spin"></i> Sending...');
	    		    },
	    		    error: function(error) {
	    		    	PoppyPopup.accept(document.querySelector(".poppy-popup").id);
	    		    	PoppyPopup.alert("Unknown Error, please try again later", '<i class="fas fa-exclamation-circle"></i> Error');
	    		    	return false;
	    		    },
	    		    success:function(data) {
	    		        PoppyPopup.accept(document.querySelector(".poppy-popup").id);
	    		        if(typeof(data) != "object")
	    		        	return false;
	    		        if(data.error == 1) {
	    		        	PoppyPopup.alert(data.message, '<i class="fas fa-exclamation-circle"></i> Error')
	    		        	return false;
	    		        }
	    		        PoppyPopup.alert(data.message, '<i class="fas fa-check-circle"></i> Success')
	    		        form.reset();
	    		    }
	    		});//Ajax ends
	    	}
	    });
	}



	$(window).on('load', function() {
		function animations() {
				runAnimations($('#home > h1, #home > h3'), "animated fadeInUp");
				runAnimations($('#button-services'), "animated slideInLeft");
				runAnimations($('#button-contact'), "animated slideInRight");
				runAnimations($('#home-services-desktop > article'), "animated fadeInUp");
				runAnimations($('#home-services-desktop > button'), "animated slideInRight");
				// runAnimations($('#home-services-mobile > div.service-element'), "animated fadeIn");
				// runAnimations($('#services-mobile > article').not(':first'), "animated fadeIn");
				runAnimations($('#main > div > h1, #main > div > h3'), "animated fadeInUp");
				runAnimations($('#main > div > button'), "animated slideInRight");
				runAnimations($('#information > div'), "animated fadeIn");
				runAnimations($('#brochure > figure'), "animated slideInLeft");
				runAnimations($('#brochure > div > p, #brochure > div > h2'), "animated fadeInUp");
				runAnimations($('#brochure > div > button'), "animated slideInRight");
				runAnimations($('#principal > h1, #principal > h3'), "animated fadeInUp");
				runAnimations($('#principal > button'), "animated fadeIn");
				runAnimations($('.service-internet > div > img, .service-internet > div > h2, .service-internet > div > ol, .service-internet > div > span, .service-internet > div > p '), "animated fadeIn");
				runAnimations($('.service-internet > div > button'), "animated slideInRight");
				runAnimations($('#service-internet-bg'), "animated fadeInUp");
				runAnimations($('.service-tv-satelital > div > img, .service-tv-satelital > div > h2, .service-tv-satelital > div > p '), "animated fadeIn");
				runAnimations($('.service-tv-satelital > div > button'), "animated slideInLeft");
				runAnimations($('#service-tv-satelital-bg'), "animated fadeInUp");
				runAnimations($('.service-voz > div > img, .service-voz > div > h2, .service-voz > div > ul, .service-voz > div > span, .service-voz > div > p '), "animated fadeIn");
				runAnimations($('.service-voz > div > button'), "animated slideInRight");
				runAnimations($('#service-voz-bg'), "animated fadeInUp");
				runAnimations($('.service-cableado > div > img, .service-cableado > div > h2, .service-cableado > div > ul, .service-cableado > div > span, .service-cableado > div > p '), "animated fadeIn");
				runAnimations($('.service-cableado > div > button'), "animated slideInLeft");
				runAnimations($('#service-cableado-bg'), "animated fadeInUp");
				runAnimations($('.service-cctv > div > img, .service-cctv > div > h2, .service-cctv > div > h4, .service-cctv > div > span, .service-cctv > div > p '), "animated fadeIn");
				runAnimations($('.service-cctv > div > button'), "animated slideInRight");
				runAnimations($('#service-cctv-bg'), "animated fadeInUp");
				runAnimations($('#cobertura > a'), "animated slideInRight");
				runAnimations($('#catalog > article'), "animated slideInLeft");
				runAnimations($('#contact > article > div'), "animated slideInLeft");
				runAnimations($('#contact > article > form'), "animated slideInRight");
			};

			animations();

			$(window).scroll( function(){

					animations();
			});


			$("#home-services-mobile").addClass("loaded");
			$("#clients .owl-stage .owl-item").height($("#clients .owl-stage").height());
			//$("#clients .owl-stage .owl-item img").css({"position":"absolute", "left": "0", "right": "0", "bottom": "0", "top": "0"});
			
	});
		

		function runAnimations(element, className)
			{
				/* Check the location of each desired element */
				element.each( function(i){
				    
				    var bottom_of_object = $(this).offset().top + 80;
				    var bottom_of_window = $(window).scrollTop() + $(window).height();
				    
				    /* If the object is completely visible in the window, fade it it */
				    if( bottom_of_window > bottom_of_object ){
				        
				        //$(this).animate({'opacity':'1'},1000);
				        $(this).addClass(className);
				            
				    }
				    
				});
			}


if($(".owl-carousel").length ){
	$("#owl-services").owlCarousel({
		items: 1,
		dots: false,
		nav: true,
		onInitialized: function(){
			const width = $(window).width();
			if(width >= 1000)
			$("#home-services-mobile").hide();	
		}
	});

	$("#owl-clients").owlCarousel({
		autoplay: true,
		dots: true,
		loop: true,
		responsive: {
			0: {items: 3, autoplay: true, loop: true},
			1000: {items: 7, autoplay: false, loop: false}

		}
	});

}




});