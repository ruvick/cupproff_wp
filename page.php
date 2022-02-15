
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
 * @package light_market
 */

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page page-recurring">

	<div class="bg-img bg-img-01">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/01.png?_v=1644843902057" alt=""></picture>
	</div>
	<div class="bg-img bg-img-02">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/02.png?_v=1644843902057" alt=""></picture>
	</div>
	<div class="bg-img bg-img-03">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/03.png?_v=1644843902057" alt=""></picture>
	</div>
	<!-- 			<div class="bg-img bg-img-04">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/04.png?_v=1644843902057" alt=""></picture>
	</div> -->
	<div class="bg-img bg-img-05">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/05.png?_v=1644843902057" alt=""></picture>
	</div>
	<div class="bg-img bg-img-06">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/06.png?_v=1644843902057" alt=""></picture>
	</div>

	<section class="recurring">
		<div class="_container"> 
  		<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
				}
			?> 

			<h1><? the_title();?></h1>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
				<?php endwhile;?>
			<?php endif; ?> 

		</div>
	</section>

</main>

<?php get_footer();