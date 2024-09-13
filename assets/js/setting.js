jQuery(document).ready(function() {

    AOS.init();
    var headerwrap = jQuery(".header-wrap.sticky-header");
    jQuery(window).on("load scroll", function() {
        if (jQuery(this).scrollTop() > 200) {
            headerwrap.addClass("sticky");
        } else {
            headerwrap.removeClass("sticky");
        }
    });

    jQuery('.menu-btn').click(function(){
		jQuery(this).toggleClass('open');
        jQuery('.menu-wrap').toggleClass('open');
	});

    jQuery('.search-btn').click(function(){
        jQuery('.search-box').toggleClass('open');
	});

    jQuery('.header-menu > ul > li.dropdown').each(function( index, element ) {
		var currentlimobile=jQuery(this).find('.sub-menu').length;
		if(jQuery(currentlimobile).length == 1)
		{
			jQuery('<div class="toggle-submenu"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="5" viewBox="0 0 9 5" fill="none"><path d="M5.70024 4.02081L8.56899 1.15206C8.68539 1.03496 8.75073 0.876552 8.75073 0.711436C8.75073 0.54632 8.68539 0.387913 8.56899 0.270811C8.51089 0.212231 8.44176 0.165735 8.3656 0.134004C8.28944 0.102274 8.20774 0.0859375 8.12524 0.0859375C8.04273 0.0859375 7.96104 0.102274 7.88488 0.134004C7.80871 0.165735 7.73959 0.212231 7.68149 0.270811L4.81899 3.14581C4.76089 3.20439 4.69176 3.25089 4.6156 3.28262C4.53944 3.31435 4.45774 3.33069 4.37524 3.33069C4.29273 3.33069 4.21104 3.31435 4.13488 3.28262C4.05871 3.25089 3.98959 3.20439 3.93149 3.14581L1.06899 0.270811C0.952126 0.153121 0.7933 0.0866746 0.627447 0.0860885C0.461595 0.0855025 0.302302 0.150826 0.184612 0.267687C0.0669222 0.384548 0.00047491 0.543374 -0.000110653 0.709226C-0.00069717 0.875079 0.0646267 1.03437 0.181488 1.15206L3.05024 4.02081C3.4018 4.37194 3.87836 4.56916 4.37524 4.56916C4.87211 4.56916 5.34867 4.37194 5.70024 4.02081Z" fill="#0F1A3F"/>        </svg></div>').insertBefore(jQuery(this).find('.sub-menu'))
		};
	});

    var wWidth = jQuery(window).width();
    if(wWidth <= 1240){
          jQuery('.header-menu ul li.dropdown').click(function() {
            // Toggle the visibility of the clicked .sub-menu
            jQuery(this).find('.sub-menu').slideToggle();
    
            // Hide other open .sub-menu elements
            jQuery('.header-menu ul li.dropdown').not(this).find('.sub-menu').slideUp();
          });
    }

    
  

    // SVG Create
    jQuery(function () {
        jQuery("img.svg").each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr("id");
        var imgClass = $img.attr("class");
        var imgURL = $img.attr("src");
        jQuery.get(
            imgURL,
            function (data) {
            var $svg = jQuery(data).find("svg");
            if (typeof imgID !== "undefined") {
                $svg = $svg.attr("id", imgID);
            }
            if (typeof imgClass !== "undefined") {
                $svg = $svg.attr("class", imgClass + " replaced-svg");
            }
            $svg = $svg.removeAttr("xmlns:a");
            if (
                !$svg.attr("viewBox") &&
                $svg.attr("height") &&
                $svg.attr("width")
            ) {
                $svg.attr(
                "viewBox",
                "0 0 " + $svg.attr("height") + " " + $svg.attr("width")
                );
            }
            $img.replaceWith($svg);
            },
            "xml"
        );
        });
    });

    jQuery('.partners-logo-slider').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 8000,
        pauseOnHover: false,
        cssEase: 'linear',
        arrows:false,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              }
            },
          ]
    });
    jQuery('.testimonial-slider').slick({
        autoplay: true,
        cssEase: 'linear',
        arrows:false,
        dots: true,
    });
    Fancybox.bind("[data-fancybox]", {
        
    });
    jQuery('.product-media-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        adaptiveHeight: true,
        asNavFor: '.product-media-thumbnail-slider'
    });
    jQuery('.product-media-thumbnail-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.product-media-slider',
        dots: false,
        variableWidth: true,
        focusOnSelect: true,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                variableWidth: true,
                centerMode: true,
              }
            },
          ]
    });
    jQuery('.food-application-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        adaptiveHeight: true,
        asNavFor: '.food-application-thumbnail-slider'
    });
    jQuery('.food-application-thumbnail-slider').slick({
        slidesToShow: 10,
        slidesToScroll: 1,
        asNavFor: '.food-application-slider',
        dots: false,
        variableWidth: true,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                variableWidth: true,
                centerMode: true,
              }
            },
          ]
    });
    jQuery('.resume-upload label').on('click', function(event) {
		event.preventDefault();
		jQuery(this).parents('.resume-upload').find('.form-control-file').trigger('click');
	});
	jQuery('.resume-upload .form-control-file').on('change', function(event) {
		event.preventDefault();
		var fileName = event.target.files[0].name;
		jQuery('.resume-upload label').text(fileName);
	});
    jQuery('.cover-letter label').on('click', function(event) {
		event.preventDefault();
		jQuery(this).parents('.cover-letter').find('.form-control-file').trigger('click');
	});
	jQuery('.cover-letter .form-control-file').on('change', function(event) {
		event.preventDefault();
		var fileName = event.target.files[0].name;
		jQuery('.cover-letter label').text(fileName);
	});

  var rev = $('.our-industries-slider');
  rev.on('init', function(event, slick, currentSlide) {
      var
          cur = $(slick.$slides[slick.currentSlide]),
          next = cur.next(),
          next2 = cur.next().next(),
          prev = cur.prev(),
          prev2 = cur.prev().prev();
      prev.addClass('slick-sprev');
      next.addClass('slick-snext');
      prev2.addClass('slick-sprev2');
      next2.addClass('slick-snext2');
      cur.removeClass('slick-snext').removeClass('slick-sprev').removeClass('slick-snext2').removeClass('slick-sprev2');
      slick.$prev = prev;
      slick.$next = next;
  }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
      console.log('beforeChange');
      var
          cur = $(slick.$slides[nextSlide]);
      console.log(slick.$prev, slick.$next);
      slick.$prev.removeClass('slick-sprev');
      slick.$next.removeClass('slick-snext');
      slick.$prev.prev().removeClass('slick-sprev2');
      slick.$next.next().removeClass('slick-snext2');
      next = cur.next(),
      prev = cur.prev();
      prev.addClass('slick-sprev');
      next.addClass('slick-snext');
      prev.prev().addClass('slick-sprev2');
      next.next().addClass('slick-snext2');
      slick.$prev = prev;
      slick.$next = next;
      cur.removeClass('slick-next').removeClass('slick-sprev').removeClass('slick-next2').removeClass('slick-sprev2');
  });

  rev.slick({
      speed: 1000,
      arrows: true,
      dots: false,
      focusOnSelect: true,
      infinite: true,
      centerMode: true,
      slidesPerRow: 1,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerPadding: '0',
      swipe: true,
      customPaging: function(slider, i) {
          return '';
      },
      /*infinite: false,*/
  });
});