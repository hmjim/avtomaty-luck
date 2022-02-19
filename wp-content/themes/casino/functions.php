<?php

/**
 * casino functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package casino
 */

if ( ! function_exists( 'casino_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function casino_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on casino, use a find and replace
	 * to change 'casino' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'casino', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    
    add_image_size( 'sk-small-img', 158, 118, true ); //Latest Posts_sk thumb
    add_image_size( 'sk-small-img2', 147, 68, true ); //Latest Posts_sk thumb
    add_image_size( 'sk-small-img3', 199, 134, true ); //Latest Posts_sk thumb
    add_image_size( 'sk-small-img4', 60, 60, true ); //Latest Posts_sk thumb
    add_image_size( 'sk-small-img5', 216, 216, true ); //Latest Posts_sk thumb
    add_image_size( 'sk-small-img6', 100, 50, true ); //Latest Posts_sk thumb

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		//'primary' => esc_html__( 'Primary', 'casino' ),
        'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	    'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
	) );


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'casino_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;


add_action( 'after_setup_theme', 'casino_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function casino_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'casino_content_width', 640 );
}
add_action( 'after_setup_theme', 'casino_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function casino_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'casino' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'casino' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'casino_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function casino_scripts() {
	wp_enqueue_style( 'casino-style', get_stylesheet_uri() );

	wp_enqueue_script( 'casino-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'casino-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'casino_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if(isset($_GET['page'])){
    $cur_pag = intval($_GET['page']);
  }else{
    $cur_pag = 0;
  }
  if ($cur_pag == 0){$current = 1;}else{$current = $cur_pag;}
  //$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['format'] = 'page/%#%/'; 
  $a['total'] = $max;
  $a['current'] = $current;
  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"
  
  
*/

function wp_corenavi() {
global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"
 
  if ($max > 1) echo '<div class="page_all">';
  if ($total == 1 && $max > 1) $pages = '<div class="page_name">Страницы:</div>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
  }
  
  
  


// Creating the widget 
class wpb_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
        // Base ID of your widget
        'wpb_widget', 
        
        // Widget name will appear in UI
        __('Блок для главной', 'wpb_widget_domain'), 
        
        // Widget description
        array( 'description' => __( 'Текст вверху и снизу', 'wpb_widget_domain' ), ) 
        );
    }

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $text = apply_filters( 'widget_text', $instance['text'] );
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
        
    if ( ! empty( $text ) )
        echo $args['before_text'] . $text . $args['after_text'];
    
    // This is where you run the code and display the output
    //echo __( 'Hello, World!', 'wpb_widget_domain' );
    echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
    }
    else {
        $title = __( 'Заголовок', 'wpb_widget_domain' );
    }
    
    if ( isset( $instance[ 'text' ] ) ) {
        $text = $instance[ 'text' ];
    }
    else {
        $text = __( 'Текст', 'wpb_widget_domain' );
    }

// Widget admin form
?>
    <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    
    <p>
        <label for="<?php echo $this->get_field_id( 'text' ); ?>">Текст:</label> 
        <textarea name="<?php echo $this->get_field_name( 'text' ); ?>" id="<?php echo $this->get_field_id( 'text' ); ?>" rows="16" cols="20" class="widefat"><?php echo esc_attr( $text ); ?></textarea>
    </p>

<?php 
}
	
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';
        return $instance;
    }
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );



    register_sidebar(array(
        'name' => __('На главной'),
        'id' => 'index-widget-top',
        'description' => __('Верхняя часть'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h1 class="br3">',
        'after_title' => '</h1>',
        'before_text' => '<div class="cat_desc">',
        'after_text' => '</div>',
    ));
    
    register_sidebar(array(
        'name' => __('На главной'),
        'id' => 'index-widget-bottom',
        'description' => __('Нижняя часть'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="br3">',
        'after_title' => '</h2>',
        'before_text' => '<div class="cat_desc">',
        'after_text' => '</div>',
    ));
    
    register_sidebar(array(
        'name' => __('На странице рейтинга казино'),
        'id' => 'casino-widget-bottom',
        'description' => __('Нижняя часть'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="br3">',
        'after_title' => '</h2>',
        'before_text' => '<div class="cat_desc">',
        'after_text' => '</div>',
    ));
    
    
    
    
//add_action('init', 'do_rewrite');
//function do_rewrite(){
	// Правило перезаписи
	//add_rewrite_rule( '^igrovue-avtomatu/?', '?post_type=igrovue-avtomatu', 'top' );



//}
    
    
function trim_title_chars($count, $after) {
  $title = get_the_title();
  if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
  else $after = '';
  echo $title . $after;
}

function trim_content_chars($count, $after) {
  $content = get_the_content();
  
  $search = array ("'<img[^>]*?>'si");                    // интерпретировать как php-код

$replace = array ("");

$content = preg_replace($search, $replace, $content);

  if (mb_strlen($content) > $count) $content = mb_substr($content,0,$count);
  else $after = '';
  echo $content . $after;
}
    
function show_avtomat($atts) {
        extract(shortcode_atts(array(
         "id" => '14',//,
         "float" => 'left'
         //"title" => 'Main View – блог о веб дизайне и веб разработке'
         ), $atts));
        $args = array (
        	'p'                      => $id,
        	'post_type'              => array( 'igrovue-avtomatu' ),
        	'post_status'            => array( 'publish' ),
        );
        
        // The Query
        $query = new WP_Query( $args );
        
        // The Loop
        if ( $query->have_posts() ) {
        	while ( $query->have_posts() ) {
        		$query->the_post();
                
                
          $data =    '<div class="on_avt" style="float: '.$float.'!important;">';
          $data .=    '<a href="'.get_post_permalink().'" title="'.get_the_title().'">';
          $data .=    '<div class="im"><img src="'.get_the_post_thumbnail_url( '', "sk-small-img1" ).'" alt="'.get_the_title().'"></div>';
          $data .=    '</a>';
          $data .=    '</div>';
         }
        }
        
        // Restore original Post Data
        wp_reset_postdata();
        
	return $data;
}
 
add_shortcode( 'show_avtomat', 'show_avtomat' );




function my_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', 'igrovue-avtomatu' );
    }
}
add_action( 'pre_get_posts', 'my_home_category' );




function create_meta_desc() {
    if($_SERVER['REQUEST_URI'] == '/kazino-top/' || $_SERVER['REQUEST_URI'] == '/igrovue-avtomatu/' || $_SERVER['REQUEST_URI'] == '/stati/' || $_SERVER['REQUEST_URI'] == '/novosti/'){
        $url = substr($_SERVER['REQUEST_URI'], 1, -1);
        $obj = get_post_type_object( $url );
        $title_desc = explode("#", $obj->description);
        if(strlen($title_desc['0']) > 1){
            echo "<title>".$title_desc['0']."</title>";
            remove_theme_support( 'title-tag' );
        }
        if(strlen($title_desc['1']) > 1){
        echo "<meta name='description' content='".$title_desc['1']."' />";
        }
        
    }
}

add_action('wp_head', 'create_meta_desc', 0);
//add_action('wp_head', function(){ remove_theme_support( 'title-tag' ); }, 0);
//remove_action('wp_head', 'title'); 
/*

function mayak_wp_title($title){
$title = trim(preg_replace('/&(.+?);/','',$title));
return $title.' |ll '.esc_attr(get_bloginfo('name'));
}
add_filter('wp_title', 'mayak_wp_title');*/