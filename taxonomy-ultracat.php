<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page page-recurring"> 

<section id="products-sec" class="products-sec recurring">
	<div class="_container"> 
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			}
		?> 

		<h1><?php single_cat_title( '', true );?></h1>

		<div class="charect-sel d-flex">
			<div class="charect-sel__item d-flex">
				<p class="charect-sel__title">Выберите объем</p>
				<form action="#" class="charect-form">
					<div class="form__line">
						<select name="form[]" class="charect-form">
							<option value="1">100 мл</option>
							<option value="2">200 мл</option>
							<option value="3">300 мл</option>
							<option value="4" selected="selected">400 мл</option>
						</select>
					</div>
				</form>
			</div>
			<div class="charect-sel__item d-flex">
				<p class="charect-sel__title">Количество слоев</p>
				<form action="#" class="charect-form">
					<div class="form__line">
						<select name="form[]" class="charect-form">
							<option value="1" selected="selected">1 слой</option>
							<option value="2">2 слоя</option>
							<option value="3">3 слоя</option>
						</select>
					</div>
				</form>
			</div>
		</div>

		<div class="products-sec__row card__row d-flex">
			<?php
				while(have_posts()):
					the_post();
					get_template_part('template-parts/product-elem');  
				endwhile;
			?>
		</div>

		<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?> 

	</div>
</section>

<?php get_template_part('template-parts/terms-section');?>

<?php get_template_part('template-parts/payment-info');?>

</main>

<?php get_footer(); ?>  