<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casino
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>












 <div class="content" id="sk_sid">
    <div class="sitebar">
        <div class="sitebar_title" id="sk_if1">
            Рейтинг казино
        </div>
        <div class="sitebar_all_rate_casino" id="sk_if2">
        
        
<?php
	        $args = array (
            	'post_type'              => array( 'kazino-top' ),
            	'post_status'            => array( 'publish' ),
            	'posts_per_page'         => '10',
                'meta_key'               => 'sort',
                'orderby'                => 'meta_value_num',
                'order'                  => 'ASC',
            );
            
            // The Query
            $query = new WP_Query( $args );
            
            // The Loop
            if ( $query->have_posts() ) {
  
  $d=0;
        
                		while ( $query->have_posts() ) {
                            		$query->the_post();
                                    $d++;
?>
                                    
        
            <a href="<?php echo get_post_permalink(); ?>" class="sitebar_one_rate" title="<?php the_title(); ?>">
                <div class="sitebar_rate_num br3">
                    <?php echo $d; ?>
                </div>
                <div class="sitebar_rate_logo br3">
                    <img src="<?php the_post_thumbnail_url( "sk-small-img2" ); ?>" alt="<?php the_title(); ?>" class="br3"/>
                </div>
            </a>
            
            
            <?php
	               }
                  }
                 wp_reset_postdata();
            ?>
        </div>
        
        <div class="sitebar_title_article">
            Статьи
        </div>
        <div class="sitebar_all_article">
        
        
        <?php
            // WP_Query arguments
            $args = array (
            	'post_type'              => array( 'stati' ),
            	'post_status'            => array( 'publish' ),
            	'posts_per_page'         => '4',
            );
            
            // The Query
            $query = new WP_Query( $args );
            
            // The Loop
            if ( $query->have_posts() ) {
  
        
                		while ( $query->have_posts() ) {
                            		$query->the_post();
                    ?>
            <div class="sitebar_one_article">
                <div class="sitebar_art_title">
                    <a href="<?php echo get_post_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="sitebar_art_cont">
<?php            
            echo trim_content_chars(250, '...');
?>
                </div>
            </div>
            
            <?php

                            	}
                                }
                                wp_reset_postdata();
                 
                        ?>
     
     
        </div>
    </div>
 </div>
 

	<?php //dynamic_sidebar( 'sidebar-1' ); ?>

