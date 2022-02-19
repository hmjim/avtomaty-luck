<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casino
 */

?>
<div id="mobile_sitebar" style="display: none;"></div>

 <div class="foter_all">
     <div class="foter">
        <div class="foter_link">
        
        
<?php
	   wp_nav_menu( array(
        	'menu_class'=>'menu',
            'theme_location'=>'bottom',
            'after'=>'<span>&bull;</span>'
        ) );
?>

        </div>
                <div class="foter_text">© 2020 avtomaty-lucky.com 
</div>
     </div>
 </div>



<script>
    var wight = window.innerWidth;
    
    if(wight < 1024){
        $('#menu-verhnee-menyu li a').click(function(){

            sub = $(this).parents('li').attr('class').split(' ');

            if(sub['0'] === 'ssub') {
                event.preventDefault();
            }
            
            
        });
    }
    
    //alert(window.innerWidth);
    
    $('ul.sub-menu').before('<div class="dj"></div>');

</script>

<?php wp_footer(); ?>



<script>
/* Переносим сайдбар */
function innermobile(){
if ($( document ).width() <= 1000) {
var innermobile = $(".sitebar").html();
$("#mobile_sitebar").html(innermobile);
}}
innermobile();
var resizeTimer;
$(window).on('resize', function(e) {
clearTimeout(resizeTimer);
resizeTimer = setTimeout(function() {innermobile();}, 250);
});
</script>


</body>
</html>
