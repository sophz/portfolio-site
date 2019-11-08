<?php get_header(); ?>

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
  <?php query_posts('posts_per_page=3&post_type=work'); ?>
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
    <h2>View More Projects</h2>
</div>

  </div>
</div>

<?php get_footer(); ?>
