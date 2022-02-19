<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casino
 */

get_header();
get_sidebar();
 ?>

	<div class="all_content">



		<?php
			if ( is_single() ) {
				the_title( '<h1 class="br3"> Игровой автомат ', ' на деньги </h1>' ); 
			}
		?>
<div class="osn_content">

		<?php
		while ( have_posts() ) : the_post();

			
?>

<div class="content_p mt0">

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'casino' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

	
    
		


 
            
            
            

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
        
        
        </div>
<div class="show-on-mobile">
<div align="center">
<a href="/gotoplay/faraon" class="button"/>Демо-игра</a>
</div>
</br>
</div>
<div class="hide-on-mobile">

        <?php if (get_field('flash-game')){?>
        <div class="content_flash">
        <iframe src="<?php the_field('flash-game'); ?>" width="525" height="398"></iframe>
        </div>
        <?php } ?>
        
        
        <?php
            // WP_Query arguments
            $args = array (
            	'post_type'              => array( 'igrovue-avtomatu' ),
            	'post_status'            => array( 'publish' ),
            	'posts_per_page'         => '10',
            );
            
            // The Query
            $query = new WP_Query( $args );
            
            // The Loop
            if ( $query->have_posts() ) {
  
        ?>
        
        
        
        <div class="r_game">
            <div class="custom-container vertical">
                <a href="#" class="prev"> </a>
                <div class="carousel">
                    <ul>
                    
                    
                    <?php
                		while ( $query->have_posts() ) {
                            		$query->the_post();
                    ?>
                    
                        <li>
                            <div>
                                <a href="<?php echo get_post_permalink(); ?>" class="sl_one" title="<?php the_title(); ?>">
                                <div class="im"><img src="<?php the_post_thumbnail_url( "sk-small-img4" ); ?>" alt="<?php the_title(); ?>"></div>
                                <div class="te"><div><?php trim_title_chars(25, '...'); ?></div></div>
                                </a>
                            </div>
                        </li>
                        
                        <?php

                            	}
                 
                        ?>
                     
                     
                    </ul>
</div>
                </div>
                <a href="#" class="next"> </a>
                <div class="clear"></div>
            </div>
        </div>    
        

       
        
        <?php
	          
              
            }
            
            // Restore original Post Data
            wp_reset_postdata();
        ?>

        <script>
        
        $(".vertical .carousel").jCarouselLite({
            visible: 5,
            btnNext: ".vertical .next",
            btnPrev: ".vertical .prev",
            vertical: true,
            auto: 3500,
            speed: 700,
            mouseWheel: true
        });
        
        </script>    
        

         <?php if (get_field('link_game_pay')){?>
            <a href="<?php the_field('link_game_pay'); ?>" class="go_p" target="_blank" title="Играть в автомат <?php the_title(); ?> на деньги"></a>
         <?php } ?>
        
        
        <?php
        
if(get_field('desc_game')){ ?>
<div class="cat_desc mt0"><?php the_field('desc_game'); ?></div>
<?php } ?>
</div>


	</div><!-- #primary -->

<?php


get_footer();
