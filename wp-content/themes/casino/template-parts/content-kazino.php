    <div class="d_0 br3">
    <div class="d_1"><?php echo $d; ?></div>
    <div class="d_2"><img src="<?php the_post_thumbnail_url( "sk-small-img6" ); ?>" alt="<?php the_title(); ?>"/></div>
    <div class="d_3"><div><?php the_field('bonus'); ?></div></div>
    <div class="d_4"><?php the_field('k_avt'); ?></div>
    <div class="d_3"><div><?php the_field('p_kazino'); ?></div></div>
    <div class="d_6">
    <?php 
        if(get_field('klient') == 1){
            echo '<div class="ok"></div>';
        }else{
            echo '<div class="not"></div>';
        }
    ?>
    </div>
    <div class="d_5">
        <a href="<?php echo get_post_permalink(); ?>" class="but_c1" title="Обзор">Обзор</a> 
    </div>
    <div class="d_5">
        <a href="<?php the_field('link_go'); ?>" class="but_d1" target="_blank" title="Играть в <?php the_title(); ?>">Играть</a>
    </div>
    </div>