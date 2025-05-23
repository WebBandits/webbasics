<?php
/**
 * Template part for displaying the front page/home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebBandits
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <?php webbandits_post_thumbnail(); ?>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="page-title">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <h2 class="gradient">Wij <span class="typed-text"></span><span class="cursor">&nbsp;</span></h2>
                        <?php if ( get_field('titel_2') ) : ?>
                            <h2><?php echo get_field('titel_2'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="entry-content">
                        <?php the_content();?>
                    </div>
                </div>
                <div class="col-3">
                    <div id="globe">
            
                    </div>
                </div>
            </div>
        </div>
	</header><!-- .entry-header -->
    <section class="cards">
        <div class="container">
            <div class="cards-inner">
                <div id="card" class="card">
                    <div class="card-inner">
                        <div class="icon">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <h2>Webdevelopment</h2>
                        <div class="content">
                            <p>Suspendisse potenti. Vivamus non arcu tincidunt, congue massa at, porttitor velit. Curabitur lacinia nisl ut turpis convallis, at dictum urna aliquet. Nullam non urna eget felis interdum feugiat. Morbi vel neque elit. Nullam a luctus leo. Integer maximus sapien in bibendum scelerisque.</p>
                        </div>
                        <div class="link">
                            <a href="#">Lees meer</a>
                        </div>
                    </div>
                </div>
                 <div id="card" class="card">
                    <div class="card-inner">
                        <div class="icon">
                            <i class="fa-solid fa-square-poll-vertical"></i>
                        </div>
                        <h2>Online marketing</h2>
                        <div class="content">
                            <p>Suspendisse potenti. Vivamus non arcu tincidunt, congue massa at, porttitor velit. Curabitur lacinia nisl ut turpis convallis, at dictum urna aliquet. Nullam non urna eget felis interdum feugiat. Morbi vel neque elit. Nullam a luctus leo. Integer maximus sapien in bibendum scelerisque.</p>
                        </div>
                        <div class="link">
                            <a href="#">Lees meer</a>
                        </div>
                    </div>
                </div>
                 <div id="card" class="card">
                    <div class="card-inner">
                        <div class="icon">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <h2>Onderhoud service</h2>
                        <div class="content">
                            <p>Suspendisse potenti. Vivamus non arcu tincidunt, congue massa at, porttitor velit. Curabitur lacinia nisl ut turpis convallis, at dictum urna aliquet. Nullam non urna eget felis interdum feugiat. Morbi vel neque elit. Nullam a luctus leo. Integer maximus sapien in bibendum scelerisque.</p>
                        </div>
                        <div class="link">
                            <a href="#">Lees meer</a>
                        </div>
                    </div>
                </div>
                <script>
                    document.querySelectorAll('.card').forEach(card => {
                    card.addEventListener('mouseenter', () => card.classList.add('hovered'));
                    card.addEventListener('mouseleave', () => card.classList.remove('hovered'));
                    });
                </script>
            </div>
        </div>
    </section>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
            <div class="container">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Edit this page <span class="screen-reader-text">%s</span>', 'webbandits' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            </div>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
