<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mysalesblog
 */

 //wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/jquery.js', array ( ), '4.7.3');
// wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.min.js', array ( ), '4.7.3');

    wp_enqueue_script( 'myjquery', get_template_directory_uri() . '/assets/js/jquery.js', array ( ), '4.7.3');
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.min.js', array ( ), '4.7.3');


add_action( 'wp_enqueue_scripts', 'my_assets' );

?>

	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_template_part( 'components/footer/site', 'info' ); ?>
	</footer>
   
</div>
<?php wp_footer(); ?>

</body>
</html>
