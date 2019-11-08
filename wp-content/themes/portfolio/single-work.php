<?php

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <?php while ( have_posts() ) : the_post();
          $image_1 = get_field('image_1');
          $work_description = get_field('work_description');
          $size = "medium";
           ?>

      <article class="work">
        <aside class="work-summary">
          <h2><?php the_title(); ?></h2>
          <h5><?php echo $work_description; ?></h5>
        </aside>
          <div class="work-image">
      			<?php if($image_1) {
      				echo wp_get_attachment_image( $image_1, $size );
      			} ?>
      		</div>
        </article>
    <?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
