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
          <section class="kacheln" id="kacheln">
            <div class="container">

              <div class="grid">
                <a class="grid-item">
                  
                </a>
                <a class="grid-item">

                </a>
                <a class="grid-item">

                </a>


              </div>
            </div>
          </section>


			</main><!-- #main -->
		</div><!-- #primary -->
<?php
get_footer();
