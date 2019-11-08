<?php /*
Theme Name: My Portfolio
Theme URI: https://sophiezinda.com
Author: Sophie
Author URI: https://sophiezinda.com
Description: A basic theme using the Bootstrap framework.
Version: 1.0
Text Domain: bootstrapstarter
*/
 get_header(); ?>

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

  </div>
</div>

<?php get_footer(); ?>
