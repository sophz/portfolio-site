<?php
/**
 * The template for displaying the Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="front-page">
      <div class="top-section">
      <div class="intro">
        <h2>I'm a web developer who loves the puzzle of coding functional sites that represent a brand</h2>
      </div>
    </div>
    <div class="bottom-section">
      <div class="preview-of-work">
        <ul class="homepage-featured-work">
        <?php query_posts('posts_per_page=3&post_type=work'); ?>
          <?php while ( have_posts() ) : the_post();
            $work_image = get_field("work-image");
            $size = "medium";
          ?>
            <li class="individual-featured-work">
              <a href="<?php the_permalink(); ?>">
                      <figure>
                        <?php echo wp_get_attachment_image($work_image, $size); ?>
                      </figure>
                      <h3><?php the_title(); ?></h3>
                    </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </ul>
      </div>
    </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
