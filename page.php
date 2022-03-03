
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