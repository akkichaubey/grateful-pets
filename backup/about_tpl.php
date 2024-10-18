<!-- 
Template Name:About
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
            <h1 class="h1 banner-title" data-gsap="fadeUp"><?php echo $bannerTitl; ?></h1>
            <div class="text-wrap" data-gsap="fadeUp" data-delay="0.2">
              <p><?php echo $bannerText; ?></p>
            </div>
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
        <div class="inner-section">
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
        <div class="inner-section">
            <div class="container">
                <div class="row align-items-center row-gap-30">
                    <div class="col-md-6">
                        <div class="video-wrap">
                            <div class="video-box" data-gsap="fadeUp">
                                <?php $OurMissionImg = get_field('our_misiion_image'); ?>
                                <img src="<?php echo $OurMissionImg['url'];?>" alt="<?php echo $OurMissionImg['alt'];?>" width="721" height="440">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-box text-sm">
                            <div class="title-wrap" data-gsap="fadeUp">
                                <?php $OurMissionTitl = get_field('our_mission_title'); ?>
                                <h2 class="h2"><?php echo $OurMissionTitl;?></h2>
                            </div>
                            <div class="text-wrap" data-gsap="fadeUp" data-delay="0.2">
                                <?php $OurMissionText = get_field('our_mission_text'); ?>
                                <p><?php echo $OurMissionText;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home about end -->

    <!-- about our value start -->
    <div class="about-value pb-120">
        <div class="container">
             <?php if(have_rows('our_values_section_repeater')): ?>
            <div class="row">
               
                <div class="col-md-3">
                    <div class="value-box title-box" data-gsap="fadeUp">
                        <?php $OurValuesTitl = get_field('our_values_section_title'); ?>
                        <h2 class="h2"><?php echo $OurValuesTitl;?></h2>
                    </div>
                </div>
                <?php while(have_rows('our_values_section_repeater')): the_row();
                                 $OurValuesTitle = get_sub_field('title');
                                $OurValuesDesc = get_sub_field('description');?>
                <div class="col-md-3">
                      
                    <div class="value-box text-sm" data-gsap="fadeUp">
                        <h3 class="h4"><?php echo $OurValuesTitle;?></h3>
                        <p><?php echo $OurValuesDesc;?></p>
                    </div>
                     
                </div>
                <?php endwhile;?>
                
            
            </div>
            <?php endif;?>
        </div>
    </div>
    <!-- about our value end -->
    <!-- why choose us start -->
    <div class="about-choose pb-150">
        <div class="container">
            <div class="title-wrap text-center">
                <?php $WhyChooseTitl = get_field('why_choose_us_section_title'); ?>
                <h2 class="h2" data-gsap="fadeUp"><?php echo $WhyChooseTitl;?></h2>
                <div class="sub-text text-sm" data-gsap="fadeUp">
                    <?php $WhyChooseText = get_field('why_choose_us_section_text'); ?>
                    <p><?php echo $WhyChooseText;?></p>
                </div>
            </div>
            <div class="choose-list">
                <?php if(have_rows('why_choose_us_section_repeater')): ?>
                <ul>
                    <?php while(have_rows('why_choose_us_section_repeater')): the_row();
                                 $WhyChooseLoopTitl = get_sub_field('title');
                                $WhyChooseLoopDesc = get_sub_field('description');?>
                    <li>
                        <div class="about-choose-box text-sm" data-gsap="fadeUp">
                            <div class="icon-box"></div>
                            <h3 class="h4"><?php echo $WhyChooseLoopTitl;?></h3>
                            <p><?php echo $WhyChooseLoopDesc;?></p>
                        </div>
                    </li>
                    <?php endwhile;?>
                </ul>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!-- why choose us end -->



 <?php get_template_part( 'template-parts/common', 'schedulefreetour' ); ?>
   

<?php get_footer(); ?>