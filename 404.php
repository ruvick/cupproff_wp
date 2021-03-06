
<?php get_header(); ?>

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

	<section class="recurring content">
		<div class="_container"> 
  		<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
				}
			?> 

			<h1 class = "h404">404</h1>
				Запрашиваемая страница не была найдена
		</div>
	</div>

	</main>

	<?php get_template_part('template-parts/offer-thickness');?>

	<?php get_template_part('template-parts/payment-info');?>

<?php get_footer(); ?>