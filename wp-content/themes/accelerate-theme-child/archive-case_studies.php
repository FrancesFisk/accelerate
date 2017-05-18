<?php
/**
 * The template for displaying the case studies archive page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
      
      <?php while ( have_posts() ) : the_post();
          $services = get_field('services');
          $client = get_field('client');
          $link = get_field('site_link');
          $image_1 = get_field('image_1');
          $size = "full";
      ?>

      <article class="case-study">

        <aside class="case-study-sidebar">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="temp-tag"><?php echo $services; ?></p>
          <p class="description"> <?php the_excerpt(); ?></p>
          <p class="bold"><a href="<?php the_permalink(); ?>">View Project ></a></p>
        </aside>

        <div class="case-study-images archive-img">
          <a href="<?php the_permalink(); ?>">
            <?php if($image_1) { ?>
              <?php echo wp_get_attachment_image($image_1, $size); ?>
            <?php } ?>
          </a>
        </div>

      </article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
