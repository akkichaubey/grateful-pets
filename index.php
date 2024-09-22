<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("include/head.php"); ?>
</head>

<body>
    <!-- header section start -->
    <?php include ("include/header.php"); ?>
    <!-- header section end -->

    <!-- hero banner start -->
    <div class="banner hero-banner">
        <div class="container">
            <div class="column-wrap">
                <div class="col-left">
                    <div class="banner-info text-md">
                        <h1 class="h1 banner-title" data-gsap="fadeUp">Is Your Pet A<br>Grateful Pet?</h1>
                        <div class="text-wrap" data-gsap="fadeUp" data-delay="0.2">
                            <p>Grateful Pets is conveniently located in Soulard, just minutes from Lafayette Square, and
                                Downtown St. Louis. We offer all-inclusive spa services for dogs and cats, as well as
                                professional dog training and day care services.</p>
                        </div>
                        <div class="btn-wrap" data-gsap="fadeUp" data-delay="0.3">
                            <a href="#" class="btn btn-secondary">Schedule Tour</a>
                            <a href="#" class="btn btn-outline-white">Book Now</a>
                        </div>
                    </div>
                    <div class="hero-bottom" data-gsap="fadeUp" data-delay="0.2">
                        <img src="./assets/images/banner-right.webp" alt="img" width="784" height="203">
                    </div>
                </div>
                <div class="col-right">
                    <div class="banner-img" data-gsap="fadeUp" data-delay="0.2">
                        <img src="./assets/images/photo-no-background.webp" alt="img" width="830" height="849">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero banner end -->

    <!-- home about end -->
    <div class="home-about pt-180 pb-150">
        <div class="container">
            <div class="row align-items-center row-gap-30">
                <div class="col-md-6">
                    <div class="video-wrap">
                        <div class="video-box" data-gsap="fadeUp">
                            <img src="./assets/images/video-thumb.webp" alt="image" width="721" height="440">
                            <div class="video-btn">
                                <a href="https://youtu.be/D0UnqGm_miA" data-fancybox>
                                    <svg class="icon" width="25" height="29">
                                        <use xlink:href="./assets/images/svgsprit.svg#play-icon"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-box text-sm">
                        <div class="title-wrap" data-gsap="fadeUp">
                            <h2 class="h2">About Us</h2>
                        </div>
                        <div class="text-wrap" data-gsap="fadeUp" data-delay="0.2">
                            <p>Welcome to Grateful Pets, where your pets are treated like family. Located in the heart
                                of
                                Soulard, just minutes from Lafayette Square and Downtown St. Louis, we offer daycare in
                                our
                                state-of-the-art facility, professional dog training, all-inclusive spa services, and
                                CPR
                                classes. Our experienced team is passionate about providing the best care for your furry
                                friends, ensuring they receive the attention and love they deserve.</p>
                        </div>
                        <div class="btn-wrap" data-gsap="fadeUp" data-delay="0.3">
                            <a href="#" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home about end -->

    <!-- why choose us start -->
    <div class="home-choose-us pb-240" style="background-image: url(./assets/images/why-choose-us-bg.webp);">
        <div class="container">
            <div class="row align-items-center row-gap-30">
                <div class="col-lg-7 pe-lg-0">
                    <div class="content-box">
                        <div class="title-wap text-sm" data-gsap="fadeUp">
                            <h2 class="h2">Why Choose Us</h2>
                            <p>At Grateful Pets, we understand that your pet is a valued member of your family. That’s
                                why
                                we offer:</p>
                        </div>
                    </div>
                    <div class="choose-us-list">
                        <ul>
                            <li>
                                <div class="choose-box text-xs" data-gsap="fadeUp">
                                    <h3 class="h3">Expert Care</h3>
                                    <p>Our team is trained and certified to provide top-notch grooming, training, and
                                        pet CPR.</p>
                                </div>
                            </li>
                            <li>
                                <div class="choose-box text-xs" data-gsap="fadeUp">
                                    <h3 class="h3">Convenient Location</h3>
                                    <p>We are conveniently located near major neighborhoods and attractions.</p>
                                </div>
                            </li>
                            <li>
                                <div class="choose-box text-xs" data-gsap="fadeUp">
                                    <h3 class="h3">Personalized Services</h3>
                                    <p>Every pet is unique, and we tailor our services to meet their specific needs.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-wrap" data-gsap="fadeUp" data-delay="0.2">
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-box text-md-end" data-gsap="fadeUp" data-delay="0.2">
                        <img src="./assets/images/why-choose-us.webp" alt="img" width="585" height="694">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us end -->

    <!-- home-service start -->
    <div class="home-service pt-115 pb-115">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h2" data-gsap="fadeUp">Our Services</h2>
                <div class="sub-text text-sm" data-gsap="fadeUp" data-delay="0.2">
                    <p>We offer a variety of services to keep your pet happy and healthy</p>
                </div>
            </div>
            <div class="service-list">
                <ul>
                    <li>
                        <div class="service-box" data-gsap="fadeUp">
                            <div class="img-cover">
                                <img src="./assets/images/service-1.webp" alt="service image" width="351" height="206">
                            </div>
                            <div class="info text-xs">
                                <h3 class="h3">Day Care</h3>
                                <div class="icon">
                                    <img src="./assets/images/service-icon-1.webp" alt="img">
                                </div>
                                <p>Let your dog enjoy a day of play in our climate-controlled playground.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="service-box" data-gsap="fadeUp">
                            <div class="img-cover">
                                <img src="./assets/images/service-2.webp" alt="service image" width="351" height="206">
                            </div>
                            <div class="info text-xs">
                                <h3 class="h3">Training</h3>
                                <div class="icon">
                                    <img src="./assets/images/service-icon-2.webp" alt="img">
                                </div>
                                <p>Professional training programs tailored to your dog’s needs.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="service-box" data-gsap="fadeUp">
                            <div class="img-cover">
                                <img src="./assets/images/service-3.webp" alt="service image" width="351" height="206">
                            </div>
                            <div class="info text-xs">
                                <h3 class="h3">Grooming</h3>
                                <div class="icon">
                                    <img src="./assets/images/service-icon-3.webp" alt="img">
                                </div>
                                <p>All-inclusive grooming services for both dogs
                                    and cats.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="service-box" data-gsap="fadeUp">
                            <div class="img-cover">
                                <img src="./assets/images/service-4.webp" alt="service image" width="351" height="206">
                            </div>
                            <div class="info text-xs">
                                <h3 class="h3">First Aid/CPR Classes</h3>
                                <div class="icon">
                                    <img src="./assets/images/service-icon-4.webp" alt="img">
                                </div>
                                <p>Learn pet CPR to ensure
                                    your pet's safety inan emergency.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn-wrap pt-90 d-flex flex-wrap justify-content-center" data-gsap="fadeUp">
                <a href="#" class="btn btn-white">View Rates</a>
                <a href="#" class="btn btn-secondary">Schedule Tour</a>
                <a href="#" class="btn btn-white">Book Now</a>
            </div>
        </div>
    </div>
    <!-- home-service end -->

    <!-- home-team start -->
    <div class="home-team pt-180 pb-180">
        <div class="container">
            <div class="team-list">
                <ul>
                    <li>
                        <div class="team-box" data-gsap="fadeUp">
                            <div class="title-box text-sm">
                                <h3 class="h2">Meet the Team</h3>
                                <p>Our dedicated team of pet care professionals is here to ensure your pet receives
                                    the
                                    best care possible. Each member of our staff brings their own unique expertise
                                    and
                                    love for animals, creating a welcoming and safe environment for your pets.</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-secondary">Join the Team</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="team-box" data-gsap="fadeUp">
                            <div class="img-cover">
                                <img src="./assets/images/team-1.webp" alt="" width="511" height="480">
                            </div>
                            <div class="team-info">
                                <div class="name">
                                    <h3 class="h3">Jessica Doe</h3>
                                    <div class="designation text-xs">Founder</div>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="18" height="19">
                                                <use xlink:href="assets/images/svgsprit.svg#facebook-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#x-twitter-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#instagram-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="team-box" data-gsap="fadeUp">
                            <div class="img-cover">
                                <img src="./assets/images/team-2.webp" alt="" width="511" height="480">
                            </div>
                            <div class="team-info">
                                <div class="name">
                                    <h3 class="h3">Jessica Doe</h3>
                                    <div class="designation text-xs">Founder</div>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="18" height="19">
                                                <use xlink:href="assets/images/svgsprit.svg#facebook-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#x-twitter-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#instagram-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="team-box" data-gsap="fadeUp">
                            <div class="img-cover">
                                <img src="./assets/images/team-3.webp" alt="" width="511" height="480">
                            </div>
                            <div class="team-info">
                                <div class="name">
                                    <h3 class="h3">Jessica Doe</h3>
                                    <div class="designation text-xs">Founder</div>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="18" height="19">
                                                <use xlink:href="assets/images/svgsprit.svg#facebook-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#x-twitter-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#instagram-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="team-box" data-gsap="fadeUp">
                            <div class="img-cover">
                                <img src="./assets/images/team-4.webp" alt="" width="511" height="480">
                            </div>
                            <div class="team-info">
                                <div class="name">
                                    <h3 class="h3">Jessica Doe</h3>
                                    <div class="designation text-xs">Founder</div>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="18" height="19">
                                                <use xlink:href="assets/images/svgsprit.svg#facebook-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#x-twitter-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#instagram-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="team-box" data-gsap="fadeUp">
                            <div class="img-cover">
                                <img src="./assets/images/team-5.webp" alt="" width="511" height="480">
                            </div>
                            <div class="team-info">
                                <div class="name">
                                    <h3 class="h3">Jessica Doe</h3>
                                    <div class="designation text-xs">Founder</div>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="18" height="19">
                                                <use xlink:href="assets/images/svgsprit.svg#facebook-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#x-twitter-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon" width="16" height="16">
                                                <use xlink:href="assets/images/svgsprit.svg#instagram-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- home-team end -->

    <!-- home-gallery start -->
    <div class="home-gallery pt-120 pb-120">
        <div class="container container-lg">
            <div class="title-wrap text-center text-sm">
                <h2 class="h2" data-gsap="fadeUp">Our Gallery</h2>
                <div class="sub-text" data-gsap="fadeUp" data-delay="0.2">
                    <p>Take a peek inside our facility and see the happy faces of our furry clients.
                        Our gallery showcases the spacious, clean, and fun environment we’ve created for your pets.</p>
                </div>
            </div>
            <div class="gallery">
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item">
                        <button data-fancybox data-gsap="fadeUp" data-src="#gallery-content" data-title="Lorem ipsum 1"
                            data-img="./assets/images/gallery-1.webp"
                            data-caption="Phasellus euismod, elit ac vehicula luctus, nibh velit malesuad">
                            <img src="./assets/images/gallery-1.webp" alt="img">
                        </button>
                    </div>
                    <div class="grid-item">
                        <button data-fancybox data-gsap="fadeUp" data-src="#gallery-content" data-title="Lorem ipsum 2"
                            data-img="./assets/images/gallery-2.webp"
                            data-caption="Phasellus euismod, elit ac vehicula luctus, nibh velit malesuad">
                            <img src="./assets/images/gallery-2.webp" alt="img">
                        </button>
                    </div>
                    <div class="grid-item">
                        <button data-fancybox data-gsap="fadeUp" data-src="#gallery-content" data-title="Lorem ipsum 3"
                            data-img="./assets/images/gallery-3.webp"
                            data-caption="Phasellus euismod, elit ac vehicula luctus, nibh velit malesuad">
                            <img src="./assets/images/gallery-3.webp" alt="img">
                        </button>
                    </div>
                    <div class="grid-item">
                        <button data-fancybox data-gsap="fadeUp" data-src="#gallery-content" data-title="Lorem ipsum 4"
                            data-img="./assets/images/gallery-3.webp"
                            data-caption="Phasellus euismod, elit ac vehicula luctus, nibh velit malesuad">
                            <img src="./assets/images/gallery-4.webp" alt="img">
                        </button>
                    </div>
                    <div class="grid-item">
                        <button data-fancybox data-gsap="fadeUp" data-src="#gallery-content" data-title="Lorem ipsum 5"
                            data-img="./assets/images/gallery-5.webp"
                            data-caption="Phasellus euismod, elit ac vehicula luctus, nibh velit malesuad">
                            <img src="./assets/images/gallery-5.webp" alt="img">
                        </button>
                    </div>
                    <div class="grid-item">
                        <button data-fancybox data-gsap="fadeUp" data-src="#gallery-content" data-title="Lorem ipsum 6"
                            data-img="./assets/images/gallery-6.webp"
                            data-caption="Phasellus euismod, elit ac vehicula luctus, nibh velit malesuad">
                            <img src="./assets/images/gallery-6.webp" alt="img">
                        </button>
                    </div>
                    <div class="grid-item">
                        <button data-fancybox data-gsap="fadeUp" data-src="#gallery-content" data-title="Lorem ipsum 7"
                            data-img="./assets/images/gallery-7.webp"
                            data-caption="Phasellus euismod, elit ac vehicula luctus, nibh velit malesuad">
                            <img src="./assets/images/gallery-7.webp" alt="img">
                        </button>
                    </div>
                    <div class="grid-item">
                        <button data-fancybox data-gsap="fadeUp" data-src="#gallery-content" data-title="Lorem ipsum 8"
                            data-img="./assets/images/gallery-8.webp"
                            data-caption="Phasellus euismod, elit ac vehicula luctus, nibh velit malesuad">
                            <img src="./assets/images/gallery-8.webp" alt="img">
                        </button>
                    </div>
                </div>
            </div>
            <div class="btn-wrap text-center" data-gsap="fadeUp">
                <a href="gallery.php" class="btn">View More</a>
            </div>
        </div>
    </div>

    <div id="gallery-content" class="gallery-popup" style="display:none;" data-lenis-prevent>
        <div class="content-box">
            <div class="img-box">
                <img src="./assets/images/gallery-1.webp" alt="img">
                <button class="prev">
                    <svg class="icon" width="9" height="15">
                        <use xlink:href="./assets/images/svgsprit.svg#chevron-left-icon"></use>
                    </svg>
                </button>
                <button class="next">
                    <svg class="icon" width="9" height="15">
                        <use xlink:href="./assets/images/svgsprit.svg#chevron-right-icon"></use>
                    </svg>
                </button>
            </div>
            <div class="bottom-box text-sm">
                <h2 class="title h2">Title goes here</h2>
                <p class="caption">Caption goes here</p>
            </div>
        </div>
    </div>
    <!-- home-gallery end -->

    <div class="bg-wrap" style="background-image: url(./assets/images/bg-wrap.webp);">
        <!-- home-faq start -->
        <div class="home-faq pt-200 pb-180">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="img-box" data-gsap="fadeUp">
                            <img src="./assets/images/faq.webp" alt="img" width="560" height="663">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-box">
                            <h2 class="h2" data-gsap="fadeUp">FAQs</h2>
                            <div class="accordion" id="accordionFaq">
                                <div class="accordion-item" data-gsap="fadeUp">
                                    <h2 class="accordion-header">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#faq-1">
                                            What are your hours of operation?
                                            <div class="icon-box">
                                                <svg class="icon" width="21" height="13">
                                                    <use xlink:href="./assets/images/svgsprit.svg#chevron-down-icon">
                                                    </use>
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="faq-1" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p>We are open Monday to Friday from 7 am to 6 pm and Saturday from 8 am to
                                                3
                                                pm.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-gsap="fadeUp">
                                    <h2 class="accordion-header">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-2">
                                            Do I need to make an appointment for day care?
                                            <div class="icon-box">
                                                <svg class="icon" width="21" height="13">
                                                    <use xlink:href="./assets/images/svgsprit.svg#chevron-down-icon">
                                                    </use>
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p>No appointment is necessary for day care; drop off your dog anytime
                                                during
                                                business hours.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-gsap="fadeUp">
                                    <h2 class="accordion-header">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-3">
                                            What vaccinations are required for my pet?
                                            <div class="icon-box">
                                                <svg class="icon" width="21" height="13">
                                                    <use xlink:href="./assets/images/svgsprit.svg#chevron-down-icon">
                                                    </use>
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p>We require up-to-date Rabies, Distemper, and Bordetella vaccinations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap" data-gsap="fadeUp">
                                <a href="faq.php" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home-faq end -->

        <!-- home-testimonial start -->
        <div class="home-testimonial pb-180">
            <div class="container">
                <div class="title-wrap text-center">
                    <h2 class="h2" data-gsap="fadeUp">testimonial</h2>
                </div>
                <div class="slider-wrap" data-gsap="fadeUp">
                    <div class="testimonial-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="box-top">
                                        <p>"Our dog loves coming to Grateful Pets! The staff is friendly, and I know my
                                            pet
                                            is
                                            in good hands. Highly recommend!"</p>
                                    </div>
                                    <div class="author">
                                        <div class="author-img">
                                            <img src="./assets/images/testimonial-1.webp" alt="testimonial" width="81"
                                                height="81">
                                        </div>
                                        <div class="author-name">Sarah M.</div>
                                        <svg class="icon" width="53" height="39">
                                            <use xlink:href="./assets/images/svgsprit.svg#quote-right-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="box-top">
                                        <p>"Our dog loves coming to Grateful Pets! The staff is friendly, and I know my
                                            pet
                                            is
                                            in good hands. Highly recommend!"</p>
                                    </div>
                                    <div class="author">
                                        <div class="author-img">
                                            <img src="./assets/images/testimonial-1.webp" alt="testimonial" width="81"
                                                height="81">
                                        </div>
                                        <div class="author-name">Sarah M.</div>
                                        <svg class="icon" width="53" height="39">
                                            <use xlink:href="./assets/images/svgsprit.svg#quote-right-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="box-top">
                                        <p>"Our dog loves coming to Grateful Pets! The staff is friendly, and I know my
                                            pet
                                            is
                                            in good hands. Highly recommend!"</p>
                                    </div>
                                    <div class="author">
                                        <div class="author-img">
                                            <img src="./assets/images/testimonial-1.webp" alt="testimonial" width="81"
                                                height="81">
                                        </div>
                                        <div class="author-name">Sarah M.</div>
                                        <svg class="icon" width="53" height="39">
                                            <use xlink:href="./assets/images/svgsprit.svg#quote-right-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="box-top">
                                        <p>"Our dog loves coming to Grateful Pets! The staff is friendly, and I know my
                                            pet
                                            is
                                            in good hands. Highly recommend!"</p>
                                    </div>
                                    <div class="author">
                                        <div class="author-img">
                                            <img src="./assets/images/testimonial-1.webp" alt="testimonial" width="81"
                                                height="81">
                                        </div>
                                        <div class="author-name">Sarah M.</div>
                                        <svg class="icon" width="53" height="39">
                                            <use xlink:href="./assets/images/svgsprit.svg#quote-right-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-arrow prev swiper-testimonial-prev">
                        <svg class="icon">
                            <use xlink:href="./assets/images/svgsprit.svg#chevron-left-icon"></use>
                        </svg>
                    </div>
                    <div class="swiper-arrow next swiper-testimonial-next">
                        <svg class="icon">
                            <use xlink:href="./assets/images/svgsprit.svg#chevron-right-icon"></use>
                        </svg>
                    </div>
                </div>
                <div class="btn-wrap text-center" data-gsap="fadeUp">
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
        <!-- home-testimonial end -->
    </div>

    <!-- home-blog start -->
    <div class="home-blog pb-180">
        <div class="container">
            <div class="row align-items-center row-gap-30">
                <div class="col-lg-4">
                    <div class="content-box text-sm" data-gsap="fadeUp">
                        <h2 class="h2">Our Blog</h2>
                        <p>Stay informed with tips, news, and insights on pet care from our experts. Whether you’re
                            looking for advice on training, grooming, or general pet wellness, our blog has something
                            for every pet owner.</p>
                        <div class="btn-wrap">
                            <a href="#" class="btn btn-secondary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-list">
                        <ul>
                            <li>
                                <div class="home-blog-box" data-gsap="fadeUp">
                                    <div class="blog-img">
                                        <img src="./assets/images/blog-1.webp" alt="img" width="498" height="507">
                                    </div>
                                    <div class="blog-info">
                                        <div class="category">Training</div>
                                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                do</a></h3>
                                        <div class="link-wrap">
                                            <a href="#" class="btn-link">Read Blog <svg class="icon" width="22"
                                                    height="22">
                                                    <use xlink:href="./assets/images/svgsprit.svg#arrow-right-icon">
                                                    </use>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="home-blog-box" data-gsap="fadeUp">
                                    <div class="blog-img">
                                        <img src="./assets/images/blog-2.webp" alt="img" width="498" height="507">
                                    </div>
                                    <div class="blog-info">
                                        <div class="category">Training</div>
                                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                do</a></h3>
                                        <div class="link-wrap">
                                            <a href="#" class="btn-link">Read Blog <svg class="icon" width="22"
                                                    height="22">
                                                    <use xlink:href="./assets/images/svgsprit.svg#arrow-right-icon">
                                                    </use>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home-blog end -->

    <!-- newsletter-wrap start -->
    <div class="newsletter-wrap pb-180">
        <div class="container">
            <div class="newsletter-box" style="background-image: url(./assets/images/newsletter-bg.webp);">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="img-box" data-gsap="fadeUp">
                            <img src="./assets/images/newsletter.webp" alt="img box">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-box text-sm" data-gsap="fadeUp">
                            <h2 class="h2">Email Subscription</h2>
                            <p>Stay connected with us! Subscribe to receive updates, promotions, and tips straight to
                                your inbox.</p>
                            <div class="newsletter">
                                <form>
                                    <div class="form-row">
                                        <div class="input-box">
                                            <input type="text" placeholder="Enter name" class="form-control">
                                        </div>
                                        <div class="input-box">
                                            <input type="text" placeholder="Enter email" class="form-control">
                                        </div>
                                        <div class="input-box btn-wrap">
                                            <input type="submit" value="Subscribe" class="btn btn-secondary">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter-wrap end -->

    <!-- banner-cta start -->
    <div class="banner-cta">
        <div class="container">
            <h2 class="h2" data-gsap="fadeUp">Ready to make your pet, a grateful pet?<br> Schedule a Free Tour!</h2>
            <div class="btn-wrap" data-gsap="fadeUp">
                <a href="#" class="btn btn-white">Pick a Good Time</a>
            </div>
        </div>
    </div>
    <!-- banner-cta end -->

    <!-- footer section start -->
    <?php include ("include/footer.php"); ?>
    <?php include ("include/script.php"); ?>
    <!-- footer section end -->
</body>

</html>