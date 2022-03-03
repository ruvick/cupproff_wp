<?php

/*
Template Name: Шаблон записи
WP Post Template: Шаблон записи
Template Post Type: post
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