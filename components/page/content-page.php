<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mysalesblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">    
    <div class="row">
        <div class="col s12 m12">
          <div class="card">
               <div class="card-content">
                        <?php the_title( '<h1 class="card-title">', '</h1>' ); ?> 
                        <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mysalesblog' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    <div class="right-align ">
                        <i class="material-icons">mode_edit </i>
                        <?php
                            edit_post_link(
                                sprintf(
                                    /* translators: %s: Name of current post */
                                    esc_html__( ' Edit %s', 'mysalesblog' ),
                                    the_title( '<span class="screen-reader-text ">', '</span>', false )
                                ),
                                '<span class="edit-link">',
                                '</span>'
                            );
                        ?>
                    </div>
              </div>
            </div>
        </div>
    </div>
    </div>    
</article><!-- #post-## -->