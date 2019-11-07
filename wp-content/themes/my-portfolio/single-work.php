<?php
/**
 * The template for displaying all pages
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
      <?php while ( have_posts() ) : the_post();
          $work_image = get_field('Work Image');
          $work_description = get_field('Work Description');
          $size = "medium";
           ?>

      <article class="work">
        <aside class="work-summary">
          <h2><?php the_title(); ?></h2>
          <h5><?php echo $work_description; ?></h5>
        </aside>
          <div class="work-image">
      			<?php if($work_image) {
      				echo wp_get_attachment_image( $image_1, $size );
      			} ?>
      		</div>
        </article>
    <?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
