<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */

get_header(); ?>
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

          <section class="hero">
            <div class="vide" style="height: 100vh;" data-vide-bg="wp-content/themes/awps-master/assets/video/bg">

                  <div class="hero-logo">
                    <h1>L'OR<br><span>FEO</span></h1>
                    <h2 class="untertitel">Szenische Aufführung</h2>
                    <h2 class="datum">23./24.09.2017</h2>
                  </div>

                  <a class="button-down clearfix" href="#kacheln">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                  </a>


            </div> <!-- .vide -->
          </section> <!-- .hero -->

					<section class="featured">
						<div class="container">
							<div class="row">
								<div class="col-lg-2">

								</div>
								<div class="col-lg-8">
									<iframe width="100%" height="350" src="https://www.youtube.com/embed/tHjdFuHvVtg?start=44&end=55" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</section>


          <section class="kacheln" id="kacheln">
            <div class="container">
              <div class="grid">

								<?php
								// WP_Query arguments
								$args = array(
									'post_type'              => array( 'book' ),
									'post_status'            => array( 'publish' ),
								);

								// The Query
								$query = new WP_Query( $args );

								// The Loop
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post();
										// do something ?>
										<a href="<?php echo the_permalink(); ?>" class="grid-item" style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>);">
											<div class="overlay"></div>
											<div class="grid-item-content">
												<h2><?php the_field( 'rolle' ); ?></h2>
												<?php the_title( '<span>', '</span>' ); ?>
												<?php// $excerpt = wp_trim_words( get_field('bezeichnung' ), $num_words = 10, $more = ' ...' ); ?>
												<p><?php // echo $excerpt ?></p>
											</div>
										</a>

								<?php	}
								} else {
									// no posts found
								}

								// Restore original Post Data
								wp_reset_postdata(); ?>


              </div>
            </div>
          </section>

					<section class="fragmente">
						<div class="container">
							<div class="row fragment-row">
								<div class="col-lg-6 video-wrapper">
									<div class="fb-video" data-href="https://www.facebook.com/resonancefreiburg/videos/1942291532708888/" data-width="600" data-show-text="false"><blockquote cite="https://www.facebook.com/resonancefreiburg/videos/1942291532708888/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/resonancefreiburg/videos/1942291532708888/">Resonanz der Hoffnung | l&#039;Orfeo 2017</a><p>Resonanz der Hoffnung</p>Posted by <a href="https://www.facebook.com/resonancefreiburg/">Resonance</a> on Sonntag, 30. Juli 2017</blockquote></div>
								</div>
								<div class="col-lg-6">
									<p class="shout-out">Musik<br> macht ihn<br> zum Übermenschen.</p>
								</div>
							</div>
							<div class="row fragment-row">
								<div class="col-lg-6">
									<p class="shout-out">Ihr seid<br> Orpheus'<br>Waffe!</p>
								</div>
								<div class="col-lg-6 video-wrapper">
									<div class="fb-video" data-href="https://www.facebook.com/resonancefreiburg/videos/1959457167658991/" data-width="600" data-show-text="false"><blockquote cite="https://www.facebook.com/resonancefreiburg/videos/1959457167658991/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/resonancefreiburg/videos/1959457167658991/">Orpheus&#039; Waffe | l&#039;Orfeo 2017</a><p>Schon mal in einem Konzert eingeschlafen?</p>Posted by <a href="https://www.facebook.com/resonancefreiburg/">Resonance</a> on Donnerstag, 7. September 2017</blockquote></div>
								</div>

							</div>
							<div class="row fragment-row">
								<div class="col-lg-6 video-wrapper">
									<div class="fb-video" data-href="https://www.facebook.com/resonancefreiburg/videos/1955057844765590/" data-width="600" data-show-text="false"><blockquote cite="https://www.facebook.com/resonancefreiburg/videos/1955057844765590/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/resonancefreiburg/videos/1955057844765590/">GRENZGANG | l&#039;Orfeo 2017</a><p>Orpheus überschreitet Grenzen zum Tod, zwischen Menschen, mithilfe seiner Musik. Er wird geliebt.
Eine Allegorie auf die Macht der Musik?

23./24.09. Christuskirche Freiburg | l&#039;Orfeo - Monteverdi (Szenische Darstellung)</p>Posted by <a href="https://www.facebook.com/resonancefreiburg/">Resonance</a> on Sonntag, 27. August 2017</blockquote></div>
								</div>
								<div class="col-lg-6">
									<p class="shout-out">Es gibt<br> keine Grenzen<br> mehr.</p>
								</div>
							</div>
						</div>
					</section>


			</main><!-- #main -->
		</div><!-- #primary -->

		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
get_footer();
