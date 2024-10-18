<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Info -->
<meta charset="UTF-8" />
<!-- Theme Color -->
<meta name="theme-color" content="#182841" />
<!-- Title -->
<title>Grateful Pets</title>
<!-- Site favicon -->
     <?php $Favicon =  get_field('favicon','option');?>
<link rel="icon" type="image/png" href="<?php echo $Favicon['url']; ?>" />
<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
<!-- Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.0/dist/fancybox.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- CSS File -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" />
</head>

<body>
    <!-- header section start -->
    <!-- header start -->
<div class="header-wrap">
    <header>
        <div class="head-top">
            <div class="container">
                <div class="contact-info">
                    <ul>
                          <?php
                         
                          $Email =  get_field('email','option');
                          $Phone =  get_field('phone_number','option');
                          $Address =  get_field('address','option');
                          
   
                      ?>
                        <li>
                            <a href="#">
                                <div class="icon-box">
                                    <svg class="icon" width="14" height="19">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#location-icon"></use>
                                    </svg>
                                </div> <span><?php echo $Address; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:3144058420">
                                <div class="icon-box">
                                    <svg class="icon" width="18" height="19">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#phone-icon"></use>
                                    </svg>
                                </div> <span><?php echo $Phone; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@GratefulPetsSTL.com">
                                <div class="icon-box">
                                    <svg class="icon" width="18" height="14">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#mail-icon"></use>
                                    </svg>
                                </div> <span><?php echo $Email; ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
                 <?php if(have_rows('social_media_repeater','option')): ?>
                <ul class="social">
                    
                     <?php while(have_rows('social_media_repeater','option')): the_row();
                             $SocialAc = get_sub_field('social_media_account','option');
                             $SocialUrl = get_sub_field('social_media_url','option');?>
                    <li>
                        <a href="<?php echo $SocialUrl; ?>">
                            <svg class="icon" width="18" height="19">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#<?php echo $SocialAc; ?>-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <?php endwhile;?>
                </ul>
                <?php endif;?>
            </div>
        </div>
        <div class="head-bottom">
            <div class="mobile-overlay"></div>
            <div class="container">
                <div class="logo">
                    <?php
                          $HeaderLogo =  get_field('header_logo','option');?>
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo $HeaderLogo['url']; ?>" alt="<?php echo $HeaderLogo['alt']; ?>" width="256" height="64">
                    </a>
                </div>
                <div class="menu-toggle">
                    <button type="button">
                        <svg class="icon" width="28" height="28">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#menu-bars-icon"></use>
                        </svg>
                    </button>
                </div>
                <div class="header-menu">
                    <div class="menu-toggle">
                        <button type="button">
                            <svg class="icon" width="18" height="18">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#close-icon"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="menu" data-lenis-prevent>
                         <?php     
                          wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'header-menu',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                          ) );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php wp_head(); ?>
    </header>
</div>
<!-- header end -->
    <!-- header section end -->