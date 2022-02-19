<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casino
 */

?>




        <div class="one_block_cont br3">
            <div class="one_block_title">
                <a href="<?php echo get_post_permalink(); ?>" title="<?php the_title(); ?>"><?php trim_title_chars(18, '...'); ?></a>
            </div>
            <div class="one_block_img">
                <a href="<?php echo get_post_permalink(); ?>" title="Игровой автомат <?php the_title(); ?> онлайн"><img src="<?php the_post_thumbnail_url( "sk-small-img3" ); ?>" alt="<?php the_title(); ?>"/></a>
            </div>
            <div class="one_block_bott">
                <a href="<?php echo get_post_permalink(); ?>" class="but_d" title="Бесплатная онлайн Демо-игра">Демо-игра</a>
                <a href="<?php the_field('link_game_pay'); ?>" title="Играть в автомат на реальные деньги" class="but_c">На деньги</a>
            </div>
        </div>
        
        
<!--
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php casino_posted_on(); ?>
		</div>
		<?php
		endif; ?>
	</header>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'casino' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'casino' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="entry-footer">
		<?php casino_entry_footer(); ?>
	</footer>
</article> -->
