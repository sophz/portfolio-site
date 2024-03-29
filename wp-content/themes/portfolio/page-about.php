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

      <section class="about-content">
        <div class="content-wrapper">

					<?php query_posts('posts_per_page=1&post_type=introductions'); ?>
						<?php while ( have_posts() ) : the_post();
							$my_photo = get_field("my_photo");
							$size = "medium";
						?>
							<div class="introductions">
          			<div class="photo-of-me">
												<figure>
													<?php echo wp_get_attachment_image($my_photo, $size); ?>
												</figure>
								</div>
								<div class="summary-of-me">
									<p><?php the_content(); ?></p>
								</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
