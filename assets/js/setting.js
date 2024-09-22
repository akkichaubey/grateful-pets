jQuery(document).ready(function () {
  var headerwrap = jQuery(".header-wrap.sticky-header");
  jQuery(window).on("load scroll", function () {
    if (jQuery(this).scrollTop() > 200) {
      headerwrap.addClass("sticky");
    } else {
      headerwrap.removeClass("sticky");
    }
  });

  jQuery(".menu-toggle button, .mobile-overlay").click(function () {
    const $this = jQuery(this);
    if ($this.hasClass("active")) {
      jQuery(".menu-toggle button, .mobile-overlay").removeClass("active");
      jQuery(".header-menu").removeClass("active");
      jQuery("body").removeClass("pause");
    } else {
      jQuery(".menu-toggle button").addClass("active");
      jQuery(".mobile-overlay").addClass("active");
      jQuery(".header-menu").addClass("active");
      jQuery("body").addClass("pause");
    }
  });

  // SVG Create
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

const lenis = new Lenis({
  duration: 1.5,
  direction: "vertical",
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
});
lenis.on("scroll", (e) => {
  // console.log(e);
});
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// Ensure GSAP and ScrollTrigger are properly registered
gsap.registerPlugin(ScrollTrigger);
// Select all elements with the data-gsap attribute
const fadeUpElements = document.querySelectorAll('[data-gsap="fadeUp"]');
const fadeInElements = document.querySelectorAll('[data-gsap="fadeIn"]');

fadeUpElements.forEach((element) => {
  const delay = element.getAttribute("data-delay") || 0;
  gsap.fromTo(
    element,
    { autoAlpha: 0, y: 100 },
    {
      autoAlpha: 1,
      y: 0,
      duration: 0.9,
      ease: "ease",
      delay: parseFloat(delay),
      scrollTrigger: {
        trigger: element,
        start: "top 100%",
        toggleActions: "play none none none",
        once: true,
      },
    }
  );
});

fadeInElements.forEach((element) => {
  const delay = element.getAttribute("data-delay") || 0;
  gsap.fromTo(
    element,
    { autoAlpha: 0 },
    {
      autoAlpha: 1,
      duration: 0.9,
      ease: "ease",
      delay: parseFloat(delay),
      scrollTrigger: {
        trigger: element,
        start: "top 100%",
        toggleActions: "play none none none",
        once: true,
      },
    }
  );
});

jQuery(".grid").isotope({
  itemSelector: ".grid-item",
  percentPosition: true,
  masonry: {
    columnWidth: ".grid-sizer",
    // gutter: 26,
  },
});

Fancybox.bind("[data-fancybox]", {});
document.addEventListener("DOMContentLoaded", function () {
  const galleryItems = document.querySelectorAll(".grid-item button");
  const popupImg = document.querySelector("#gallery-content .img-box img");
  const popupTitle = document.querySelector(
    "#gallery-content .content-box .title"
  );
  const popupCaption = document.querySelector(
    "#gallery-content .content-box .caption"
  );
  const prevButton = document.querySelector("#gallery-content .prev");
  const nextButton = document.querySelector("#gallery-content .next");
  let currentIndex = 0;

  // Function to update the popup content
  function updatePopup(index) {
    const selectedItem = galleryItems[index];
    const imgSrc = selectedItem.getAttribute("data-img");
    const title = selectedItem.getAttribute("data-title");
    const caption = selectedItem.getAttribute("data-caption");

    popupImg.src = imgSrc;
    popupImg.alt = title;
    popupTitle.textContent = title;
    popupCaption.textContent = caption;

    // Store the current index
    currentIndex = index;
  }

  // Show popup when a gallery item is clicked
  galleryItems.forEach((item, index) => {
    item.addEventListener("click", function () {
      updatePopup(index);
      // Show the popup (you can add your fancybox or modal show logic here)
      document.querySelector("#gallery-content").style.display = "block";
    });
  });

  // Handle next button click
  nextButton.addEventListener("click", function () {
    let nextIndex = (currentIndex + 1) % galleryItems.length;
    updatePopup(nextIndex);
  });

  // Handle previous button click
  prevButton.addEventListener("click", function () {
    let prevIndex =
      (currentIndex - 1 + galleryItems.length) % galleryItems.length;
    updatePopup(prevIndex);
  });

  // Handle keyboard navigation (left and right arrow keys)
  document.addEventListener("keydown", function (e) {
    if (document.querySelector("#gallery-content").style.display === "block") {
      if (e.key === "ArrowRight") {
        // Right arrow key: Go to the next image
        let nextIndex = (currentIndex + 1) % galleryItems.length;
        updatePopup(nextIndex);
      } else if (e.key === "ArrowLeft") {
        // Left arrow key: Go to the previous image
        let prevIndex =
          (currentIndex - 1 + galleryItems.length) % galleryItems.length;
        updatePopup(prevIndex);
      }
    }
  });
});

// testimonialSlider
var testimonialSlider = new Swiper(".testimonial-slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-testimonial-next",
    prevEl: ".swiper-testimonial-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 38,
    },
  },
});
