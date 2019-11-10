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
    <div class="projects">
      <?php query_posts('posts_per_page=3&post_type=work'); ?>
        <?php while ( have_posts() ) : the_post();
          $image_1 = get_field("image_1");
          $work_description = get_field("work_description");
          $size = "medium";
        ?>
          <div class="individual-work">
            <div class="work-wrapper">
                    <figure>
                      <?php echo wp_get_attachment_image($image_1, $size); ?>
                    </figure>
                    <h3><?php the_title(); ?></h3>
                    <?Php echo $work_description ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
