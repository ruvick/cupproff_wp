<?php 

/*
Template Name: Страница Благодарности
Template Post Type: page
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

			<h1>Благодарим за обращение!</h1>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
				<?php endwhile;?>
			<?php endif; ?> 

		</div>
	</section>

</main>

<?php get_footer();