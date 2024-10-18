<!-- 
Template Name:Blog
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
                        <div class="search-box">
                            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                            <div class="input-box" data-gsap="fadeUp">
                                 <input type="text" name="s" id="s" class="form-control" placeholder="Enter Keyword ..."<?php if(is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="Enter keywords &hellip;" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"<?php } ?>>
                                <input type="submit" value="Call to action" class="btn btn-secondary">
                            </div>
                            </form>
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

 <!-- gallery-wrap start -->
    <div class="blog-wrap pt-120 pb-120">
        <div class="container">
            <div class="popular-blog">
                <h2 class="h2">Popular blog</h2>
                <div class="row row-gap-30">
                    <div class="col-md-7">
                         
      <?php  
        $args = array( 'post_type' => 'post', 'posts_per_page' => 1,"meta_key" => "post_views_count",
    "orderby" => "meta_value_num", "order" => "DESC" );
           $t = 0; $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
                    $post_date = get_the_date( 'F j, Y' );
           $t++;
        ?>
                        <div class="blog-box" data-gsap="fadeUp">
                            <a class="blog-img img-cover">
                                <?php the_post_thumbnail();?>
                            </a>
                            <div class="blog-info">
                                <div class="date"><?php echo $post_date;?></div>
                                <h3 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt('15'); ?></p>
                                <div class="link-wrap">
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                            </div>
                        </div>
                         <?php endwhile; ?>
                            <?php wp_reset_postdata();?>
                    </div>
                    
                    <div class="col-md-5">
                        <ul>
                            <?php  
        $args = array( 'post_type' => 'post', 'posts_per_page' => 3,"meta_key" => "post_views_count",
    "orderby" => "meta_value_num", "order" => "DESC" );
           $t = 0; $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
                    $post_date = get_the_date( 'F j, Y' );
           $t++;
        ?>
                            <li>
                                <div class="blog-box small" data-gsap="fadeUp">
                                    <a class="blog-img img-cover">
                                         <?php the_post_thumbnail();?>
                                    </a>
                                    <div class="blog-info">
                                        <div class="date"><?php echo $post_date;?></div>
                                        <h3 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><?php the_excerpt('10'); ?></p>
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
    <!-- gallery-wrap end -->
   

<!-- related-blog start -->
    <div class="related-blog pb-180">
        <div class="container">
            <div class="title-wrap">
                <h2 class="h2" data-gsap="fadeUp">Recent blog</h2>
            </div>
            <div class="blog-list">
                <ul>
                    <?php  
        $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
           $t = 0; $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
                    $post_date = get_the_date( 'F j, Y' );
           $t++;
        ?>
                    <li>
                        <div class="blog-box" data-gsap="fadeUp">
                            <a class="blog-img img-cover">
                               <?php the_post_thumbnail();?>
                            </a>
                            <div class="blog-info">
                                <div class="date"><?php echo $post_date;?></div>
                                <h3 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt('10'); ?></p>
                                <div class="link-wrap">
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                     <?php endwhile; ?>
                            <?php wp_reset_postdata();?>
                </ul>
                <div class="pagination">
               <?php wp_pagenavi( array( 'query' => $loop ) ); ?>
            </div>
            </div>
        </div>
    </div>
    <!-- related-blog end -->

 <?php get_template_part( 'template-parts/common', 'subscription' ); ?>

 <?php get_template_part( 'template-parts/common', 'schedulefreetour' ); ?>
   

<?php get_footer(); ?>