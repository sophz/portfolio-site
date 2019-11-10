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
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

      <div class="front-page">
        <div class="content-wrapper">
          <div class="top-section">
          <div class="intro">
            <div class="background-color">
              <h2><i class="fas fa-code"></i> Hello i'm Sophie I build websites.</h2>
            </div>
          </div>
        </div>
        
      <div class="preview-of-work">

        <ul class="homepage-featured-work">
        <?php query_posts('posts_per_page=3&post_type=projects'); ?>
          <?php while ( have_posts() ) : the_post();
            $image_1 = get_field("image_1");
            $size = "medium";
          ?>
            <li class="individual-featured-work">
              <a href="<?php the_permalink(); ?>">
                      <figure>
                        <?php echo wp_get_attachment_image($image_1, $size); ?>
                      </figure>
                      <h3><?php the_title(); ?></h3>
                    </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </ul>
          <h2><a class="button" href="<?php echo site_url('/projects/') ?>">View More Projects</a></h2>
      </div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
