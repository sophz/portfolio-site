<?php
/*
Theme Name: My Portfolio
Theme URI: https://sophiezinda.com
Author: Sophie
Author URI: https://sophiezinda.com
Description: A basic theme using the Bootstrap framework.
Version: 1.0
Text Domain: bootstrapstarter
*/


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <section class="services-content">
        <div class="content-wrapper">

					<?php query_posts('posts&post_type=what-we-offer'); ?>
						<?php while ( have_posts() ) : the_post();
							$service_icon = get_field("service_icon");
              $service_description = get_field("service_description");
							$size = "medium";
						?>
							<div class="services">
          			<aside class="service-aside">
												<figure>
													<?php echo wp_get_attachment_image($service_icon, $size); ?>
												</figure>
								</aside>
								<div class="service-description">
									<h2><?php echo $service_description ?></h2>
								</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
            <div class="contact-me">
            <a href="<?php echo site_url('/contact/') ?>"><h2>contact me</h2>
          </a>
          </div>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
