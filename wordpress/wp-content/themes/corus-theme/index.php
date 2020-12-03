<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role=“main” style="width:1500; margin: auto;">
    <?php
        $args = array(
            'post_type' => 'gallery',
            'posts_per_page' => -1
        );
        $query = new WP_Query($args);
        
        if ($query->have_posts() ) : 
            
            while ( $query->have_posts() ) : $query->the_post();?>
            <div class="sliderMain">
                
                <?php
                $slider_image_1 = get_field('slider_image_1');
                if( $slider_image_1 ):
                    $url = $slider_image_1['url'];
                ?>
                <div><img width="100%" height="550" src="<?php echo $url; ?>" /></div>
                <?php endif;

                $slider_image_2 = get_field('slider_image_2');
                if( $slider_image_2 ):
                    $url = $slider_image_2['url'];
                ?>
                <div><img width="100%" height="550" src="<?php echo $url; ?>" /></div>
                <?php endif;


                $slider_image_3 = get_field('slider_image_3');
                if( $slider_image_3 ):
                    $url = $slider_image_3['url'];
                ?>
                <div><img width="100%" height="550" src="<?php echo $url; ?>" /></div>
                <?php endif; ?>
            </div>
        <?php
        endwhile;
            
         wp_reset_postdata();
        endif;
    ?>
	</main>
</div>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/components/slick-slider/slick.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.sliderMain').slick({
        slidesToShow: 1,
        dots: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    });
  </script>

<?php get_footer(); ?>