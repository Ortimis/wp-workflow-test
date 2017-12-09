<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header single-header" style="background-image: linear-gradient( transparent, #000), url(<?php echo the_post_thumbnail_url(); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">

				</div>

				<div class="col-sm-6 ">
							<a class="backlink btn" href="<?php echo home_url(); ?>">ZURÜCK</a>
					<?php
							if ( is_single() ) :
									the_title( '<h1 class="entry-title absolute">', '</h1>' );
							else :
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif;

							if ( 'post' === get_post_type() ) : ?>
								<div class="entry-meta">
									<?php awps\core\tags::posted_on(); ?>
								</div><!-- .entry-meta -->
					<?php
							endif; ?>
								<span class="rolle absolute"><?php the_field( 'rolle' ); ?></span>
				</div>
			</div>
	</header><!-- .entry-header -->

	<div class="entry-content container">
		<div class="row">
			<div class="col-sm-3">

			</div>

			<div class="col-sm-6">


			<?php
				the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'awps' ), array(
							'span' => array(
								'class' => array(),
							),
						) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false ) ) );
	      //
				// wp_link_pages( array(
				// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'awps' ),
				// 	'after' => '</div>',
				// ) );
			?>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // awps\core\tags::entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
