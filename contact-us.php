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
            <h1 class="h1 banner-title" data-gsap="fadeUp">Contact us</h1>
            <div class="text-wrap" data-gsap="fadeUp" data-delay="0.2">
              <p>Netus eleifend consequat fermentum dapibus tempor. Placerat class varius nam risus
                finibus. Ex penatibus condimentum nullam nostra phasellus nisi pulvinar.</p>
            </div>
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

  <!-- gallery-wrap start -->
  <div class="contact-wrap pt-120 pb-120">
    <div class="container">
      <div class="row row-gap-30 align-items-center">
        <div class="col-md-6">
          <div class="content-box text-sm">
            <h2 class="h2">Get in Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua.</p>
            <div class="contact-info">
              <ul>
                <li>
                  <a href="tel:3144058420">
                    <div class="icon-box">
                      <svg class="icon" width="18" height="19">
                        <use xlink:href="assets/images/svgsprit.svg#phone-icon"></use>
                      </svg>
                    </div> <span>(314) 405-8420</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="icon-box">
                      <svg class="icon" width="14" height="19">
                        <use xlink:href="assets/images/svgsprit.svg#location-icon"></use>
                      </svg>
                    </div> <span>1716 South Broadway, St. Louis, MO 63104</span>
                  </a>
                </li>
                <li>
                  <a href="mailto:info@GratefulPetsSTL.com">
                    <div class="icon-box">
                      <svg class="icon" width="18" height="14">
                        <use xlink:href="assets/images/svgsprit.svg#mail-icon"></use>
                      </svg>
                    </div> <span>info@GratefulPetsSTL.com</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-form">
            <h2 class="title-md">Send a Message</h2>
            <form>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-12">
                  <label>How can we help you?</label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- gallery-wrap end -->

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