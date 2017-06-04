<?php
/**
 * The template for displaying the About page
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
<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-page-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-page -->

<section class="services">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post();
			$service_image = get_field('service_image');
			$service_image_2 = get_field('service_image_2');
			$service_image_3 = get_field('service_image_3');
			$service_image_4 = get_field('service_image_4');
			$size = "large";
		?>
		<div class="about-intro">
			<h3><?php echo get_field(our_services); ?></h3>
			<p><?php echo get_field(services_intro); ?>
			</br>
			<?php echo get_field(services_intro_2); ?></p>
		</div>
		<div class="service-group">
			<div class="about-img img-left">
				<?php echo wp_get_attachment_image($service_image, $size); ?>
			</div>
			<div class="about-text">
				<h2><?php echo get_field('service_type'); ?></h2>
				<p><?php echo get_field('service_description'); ?></p>
			</div>
		</div>
		<div class="service-group">
			<div class="about-text text-left">
				<h2><?php echo get_field('service_type_2'); ?></h2>
				<p><?php echo get_field('service_description_2'); ?></p>
			</div>
				<div class="about-img img-right">
					<?php echo wp_get_attachment_image($service_image_2, $size); ?>
				</div>
		</div>
		<div class="service-group">
			<div class="about-img img-left">
				<?php echo wp_get_attachment_image($service_image_3, $size); ?>
			</div>
			<div class="about-text text-right">
				<h2><?php echo get_field('service_type_3'); ?></h2>
				<p><?php echo get_field('service_description_3'); ?></p>
			</div>
		</div>
		<div class="service-group">
			<div class="about-text text-left">
				<h2><?php echo get_field('service_type_4'); ?></h2>
				<p><?php echo get_field('service_description_4'); ?></p>
			</div>
				<div class="about-img img-right">
					<?php echo wp_get_attachment_image($service_image_4, $size); ?>
				</div>
		</div>
	</div>
	<?php endwhile; // end of the loop. ?>
</section>

<section class="cta-contact">
	<div class="cta-group">
		<h2>Interested in working with us?</h2>
		<a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
	</div>
</section>

<?php get_footer(); ?>
