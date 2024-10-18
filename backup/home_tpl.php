<!-- 
Template Name:Home
-->
<?php get_header(); ?> 

<!-- hero banner start -->
    <div class="banner hero-banner">
        <div class="container">
            <div class="column-wrap">
                <div class="col-left">
                    <div class="banner-info text-md">
                        <?php $bannerTitl = get_field('banner_title'); ?>
                        <?php $bannerText = get_field('banner_text'); ?>
                        <h1 class="h1 banner-title" data-gsap="fadeUp"><?php echo $bannerTitl; ?> </h1>
                        <div class="text-wrap" data-gsap="fadeUp" data-delay="0.2">
                            <p><?php echo $bannerText; ?></p>
                        </div>
                        <div class="btn-wrap" data-gsap="fadeUp" data-delay="0.3">
                            <?php $bannerBtn1 = get_field('banner_button_1'); ?>
                            <?php $bannerBtn2 = get_field('banner_button_2'); ?>
                            <?php echo $bannerBtn1; ?>
                           <?php echo $bannerBtn2; ?>
                        </div>
                    </div>
                    <div class="hero-bottom" data-gsap="fadeUp" data-delay="0.2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-right.webp" alt="img" width="784" height="203">
                    </div>
                </div>
                <div class="col-right">
                    <div class="banner-img" data-gsap="fadeUp" data-delay="0.2">
                        <?php $bannerImg = get_field('banner_image'); ?>
                        <img src="<?php echo $bannerImg['url'] ; ?>" alt="<?php echo $bannerImg['alt'] ; ?>" width="830" height="849">
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
                              <?php $aboutthumb = get_field('about_us_video_thumbnail_img'); ?>
                            <img src="<?php echo $aboutthumb['url']; ?>" alt="<?php echo $aboutthumb['alt']; ?>" width="721" height="440">
                            <div class="video-btn">
                                <?php $aboutVideoURL= get_field('about_us_section_url'); ?>
                                <a href="<?php echo $aboutVideoURL;?>" data-fancybox>
                                    <svg class="icon" width="25" height="29">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#play-icon"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-box text-sm">
                        <div class="title-wrap" data-gsap="fadeUp">
                            <?php $aboutTitl = get_field('about_us_section_title'); ?>
                            <h2 class="h2"><?php echo $aboutTitl;?></h2>
                        </div>
                        <div class="text-wrap" data-gsap="fadeUp" data-delay="0.2">
                            <?php $aboutTxt = get_field('about_us_section_text'); ?>
                            <p><?php echo $aboutTxt;?> </p>
                        </div>
                        <div class="btn-wrap" data-gsap="fadeUp" data-delay="0.3">
                            <?php $aboutBtn = get_field('about_us_section_button'); ?>
                            <?php echo $aboutBtn;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home about end -->

    <!-- why choose us start -->
    <div class="home-choose-us pb-240" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/why-choose-us-bg.webp);">
        <div class="container">
            <div class="row align-items-center row-gap-30">
                <div class="col-lg-7 pe-lg-0">
                    <div class="content-box">
                        <div class="title-wap text-sm" data-gsap="fadeUp">
                              <?php $WhyChooseUsTitl= get_field('why_choose_us_title'); ?>
                             <?php $WhyChooseUsText= get_field('why_choose_us_text'); ?>
                            <h2 class="h2"><?php echo $WhyChooseUsTitl;?></h2>
                            <p><?php echo $WhyChooseUsText;?></p>
                        </div>
                    </div>
                    <div class="choose-us-list">
                        <?php if(have_rows('why_choose_us_repeater')): ?>
                        <ul>
                             <?php while(have_rows('why_choose_us_repeater')): the_row();
                                 $WRepeaterTitle = get_sub_field('title');
                                $WRepeaterDesc = get_sub_field('description');?>
                            <li>
                                <div class="choose-box text-xs" data-gsap="fadeUp">
                                    <h3 class="h3"><?php echo $WRepeaterTitle;?></h3>
                                    <p><?php echo $WRepeaterDesc;?></p>
                                </div>
                            </li>
                            <?php endwhile;?>
                        </ul>
                        <?php endif;?>
                    </div>
                    <div class="btn-wrap" data-gsap="fadeUp" data-delay="0.2">
                         <?php $WhyChooseUsBtn= get_field('why_choose_us_button'); ?>
                        <?php echo $WhyChooseUsBtn;?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-box text-md-end" data-gsap="fadeUp" data-delay="0.2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-choose-us.webp" alt="img" width="585" height="694">
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
                <?php $OurServiceTitl= get_field('our_services_section_title'); ?>
                <?php $OurServiceText= get_field('our_services_section_text'); ?>
                <h2 class="h2" data-gsap="fadeUp"><?php echo $OurServiceTitl;?></h2>
                <div class="sub-text text-sm" data-gsap="fadeUp" data-delay="0.2">
                    <p><?php echo $OurServiceText;?> </p>
                </div>
            </div>
            <div class="service-list">
               
                <ul>
                     <?php  
        $args = array( 'post_type' => 'services', 'posts_per_page' => 4 );
           $t = 0; $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
           $t++;
        ?>
                    <li>
                        <div class="service-box" data-gsap="fadeUp">
                            <div class="img-cover">
                               <?php the_post_thumbnail();?>
                            </div>
                            <div class="info text-xs">
                                <h3 class="h3"><?php the_title(); ?></h3>
                                <div class="icon">
                                    <?php $ServiceIcon = get_field('service_icon') ;?>
                                    <img src="<?php echo $ServiceIcon['url'] ; ?>" alt="<?php echo $ServiceIcon['alt'] ; ?>">
                                </div>
                                <?php $ServiceHomeText = get_field('service_home_text') ;?>
                                <p><?php echo $ServiceHomeText;?></p>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                            <?php wp_reset_postdata();?>
                   
                </ul>
                
                 
                           
            </div>
            <div class="btn-wrap pt-90 d-flex flex-wrap justify-content-center" data-gsap="fadeUp">
                 <?php $OurServiceBtn1= get_field('our_services_section_button_1'); ?>
                <?php $OurServiceBtn2= get_field('our_services_section_button_2'); ?>
                <?php $OurServiceBtn3= get_field('our_services_section_button_3'); ?>
               <?php echo $OurServiceBtn1; ?>
                <?php echo $OurServiceBtn2; ?>
                <?php echo $OurServiceBtn3; ?>
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
                                <?php $MeetTeamTitl= get_field('meet_the_team_section_title'); ?>
                                <?php $MeetTeamDesc= get_field('meet_the_team_section_description'); ?>
                                <h3 class="h2"><?php echo $MeetTeamTitl;?></h3>
                                <p><?php echo $MeetTeamDesc;?></p>
                                <div class="btn-wrap">
                                     <?php $MeetTeamBtn= get_field('meet_the_team_section_button'); ?>
                                    <?php echo $MeetTeamBtn;?>
                                </div>
                            </div>
                        </div>
                    </li>
                                      <?php  
        $args = array( 'post_type' => 'team', 'posts_per_page' => 5 );
           $t = 0; $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
           $t++;
        ?>
                    <li>
                        <div class="team-box" data-gsap="fadeUp">
          
           
                            <div class="img-cover">
                                 <?php the_post_thumbnail();?>
                            </div>
                            <div class="team-info">
                                <div class="name">
                                    <h3 class="h3"><?php the_title();?></h3>
                                    <div class="designation text-xs"><?php echo word_count(get_the_excerpt(), '20'); ?>[…]</div>
                                </div>
                                <?php if(have_rows('team_social_media_accounts')): ?>
                                <ul class="social">
                                    <?php while(have_rows('team_social_media_accounts')): the_row();
                             $SocialAc = get_sub_field('social_media_account');
                             $SocialUrl = get_sub_field('social_media_url');?>
                                    <li>
                                        <a href="<?php echo $SocialUrl;?>">
                                            <svg class="icon" width="18" height="19">
                                                <use xlink:href="<?php echo get_template_directory_uri();?>/assets/images/svgsprit.svg#<?php echo $SocialAc;?>-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <?php endwhile;?>
                                </ul>
                                <?php endif;?>
                            </div>
                        </div>
                    </li>
                    
                     <?php endwhile; ?>
                            <?php wp_reset_postdata();?>
                    
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
                 <?php $images = get_field('our_gallery_section_gallery');
                     if( $images ): ?>
                <div class="grid">
                   
                    <div class="grid-sizer"></div>
                    <?php foreach( $images as $image ): ?>
                    <div class="grid-item">
                         
                        <button data-fancybox data-gsap="fadeUp" data-src="#gallery-content" data-title="<?php echo esc_attr($image['alt']); ?>"
                            data-img="<?php echo esc_url($image['url']); ?>"
                            data-caption="<?php echo esc_html($image['caption']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </button>
                        
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php endif; ?>
            </div>
            <div class="btn-wrap text-center" data-gsap="fadeUp">
                <a href="gallery.php" class="btn">View More</a>
            </div>
        </div>
    </div>

 <?php $imagess = get_field('our_gallery_section_gallery');
           
                     if( $imagess ):
$title = $imagess['title'];?>
    <div id="gallery-content" class="gallery-popup" style="display:none;" data-lenis-prevent>
    
        <div class="content-box">
            
            <div class="img-box">
               
                <img src="<?php echo esc_url($imagess['sizes']['large']); ?>" alt="<?php echo esc_url($imagess['alt']); ?>">
                <button class="prev">
                    <svg class="icon" width="9" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#chevron-left-icon"></use>
                    </svg>
                </button>
                <button class="next">
                    <svg class="icon" width="9" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#chevron-right-icon"></use>
                    </svg>
                </button>
            </div>
            <div class="bottom-box text-sm">
                <h2 class="title h2"> <?php echo $imagess['title']; ?></h2>
                <p class="caption"><?php echo $imagess['caption']; ?></p>
            </div>
           
        </div>
       
    </div>
 <?php endif; ?>
    <!-- home-gallery end -->

    <div class="bg-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-wrap.webp);">
        <!-- home-faq start -->
        <div class="home-faq pt-200 pb-180">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="img-box" data-gsap="fadeUp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq.webp" alt="img" width="560" height="663">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-box">
                            <?php $FaqTitl= get_field('faq_title'); ?>
                               
                            <h2 class="h2" data-gsap="fadeUp"><?php echo $FaqTitl;?></h2>
                             <?php if(have_rows('faq_repeater')): ?>
                            <div class="accordion" id="accordionFaq">
                                <?php $t = 0; while(have_rows('faq_repeater')): the_row();
                                      $t++;
                             $FaqQue = get_sub_field('question');
                             $FaqAns = get_sub_field('answer');?>
                                <div class="accordion-item" data-gsap="fadeUp">
                                    <h2 class="accordion-header">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#faq-<?php echo $t;?>">
                                           <?php echo $FaqQue;?>
                                            <div class="icon-box">
                                                <svg class="icon" width="21" height="13">
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#chevron-down-icon">
                                                    </use>
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="faq-<?php echo $t;?>" class="accordion-collapse collapse<?php if($t == 1) { ?> show<?php } ?>"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p> <?php echo $FaqAns;?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                                
                            </div>
                             <?php endif;?>
                            <div class="btn-wrap" data-gsap="fadeUp">
                               <?php $FaqBtn= get_field('faq_button'); ?>
                                <?php echo $FaqBtn; ?>
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
                     <?php $TestMonialTitl= get_field('testimonial_section_title'); ?>
                    <h2 class="h2" data-gsap="fadeUp"><?php echo $TestMonialTitl;?></h2>
                </div>
                <div class="slider-wrap" data-gsap="fadeUp">
                    <div class="testimonial-slider swiper">
                        <div class="swiper-wrapper">
                             <?php  
        $args = array( 'post_type' => 'testimonial', 'posts_per_page' => 4 );
           $t = 0; $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
           $t++;
        ?>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="box-top">
                                        <?php the_content();?>
                                    </div>
                                    <div class="author">
                                        <div class="author-name"><?php the_title(); ?></div>
                                        <svg class="icon" width="53" height="39">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#quote-right-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            
                           <?php endwhile; ?>
                            <?php wp_reset_postdata();?> 
                            
                        </div>

                    </div>
                    <div class="swiper-arrow prev swiper-testimonial-prev">
                        <svg class="icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#chevron-left-icon"></use>
                        </svg>
                    </div>
                    <div class="swiper-arrow next swiper-testimonial-next">
                        <svg class="icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#chevron-right-icon"></use>
                        </svg>
                    </div>
                </div>
                <div class="btn-wrap text-center" data-gsap="fadeUp">
                    <?php $TestMonialBtn= get_field('testimonial_section_button'); ?>
                    <?php echo $TestMonialBtn;?>
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
                         <?php $OurBlogTitl= get_field('our_blog_section_title'); ?>
                         <?php $OurBlogText= get_field('our_blog_section_text'); ?>
                        <h2 class="h2"><?php echo $OurBlogTitl;?></h2>
                        <p><?php echo $OurBlogText;?></p>
                        <div class="btn-wrap">
                            <?php $OurBlogBtn= get_field('our_blog_section_button'); ?>
                            <?php echo $OurBlogBtn;?>
                        </div>
                    </div>
                </div>
                 
              
                <div class="col-lg-8">
                   
                    <div class="blog-list">
                                 <ul>
                                      <?php  
        $args = array( 'post_type' => 'post',  'order' => 'ASC', 'posts_per_page' => 2 );
           $t = 0; $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
           $t++;
        ?>
                            <li>
                                <div class="home-blog-box" data-gsap="fadeUp">
                                    <div class="blog-img">
                                       <?php the_post_thumbnail();?>
                                    </div>
                                    <div class="blog-info">
                                     <div class="category"><?php
  foreach (get_categories() as $category){
    echo $category->name;
  } ?></div>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="link-wrap">
                                            <a href="<?php the_permalink(); ?>" class="btn-link">Read Blog <svg class="icon" width="22"
                                                    height="22">
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgsprit.svg#arrow-right-icon">
                                                    </use>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata();?>
                        </ul>
                        
                    </div>
                   
                </div>
                 
            </div>
        </div>
    </div>
    <!-- home-blog end -->

   <?php get_template_part( 'template-parts/common', 'subscription' ); ?>

 <?php get_template_part( 'template-parts/common', 'schedulefreetour' ); ?>
   

<?php get_footer(); ?>