<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mysalesblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="card horizontal">       
        <?php if ( '' != get_the_post_thumbnail() ) : ?>
            <div class="post-thumbnail card-image">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'mysalesblog-featured-image' ); ?>
                </a>
            </div>
        <?php endif; ?>
          <div class="card-stacked">
            <div class="card-content">
            <header class="entry-header">
                <?php
                    if ( is_single() ) {
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    } else {
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    }

                if ( 'post' === get_post_type() ) : ?>
                <?php get_template_part( 'components/post/content', 'meta' ); ?>
                <?php
                endif; ?>
            </header>
            <div class="entry-content">
                <?php
                    the_content( sprintf(
                        /* translators: %s: Name of current post. */
                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mysalesblog' ), array( 'span' => array( 'class' => array() ) ) ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ) );

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mysalesblog' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div>
            <?php get_template_part( 'components/post/content', 'footer' ); ?>
               </div>
        </div>
        </div>
    </div>
</article><!-- #post-## -->