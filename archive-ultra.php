<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page page-recurring"> 

<section id="catalog-sec" class="catalog-sec recurring">
	<div class="_container"> 
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			}
		?> 

		<h1>Каталог товаров</h1>

		<div class="design-glass__row d-flex">

			<div class="design-glass__col">
				<a href="<?php echo get_category_link(9);?>" class="design-glass__body d-flex">
					<div class="design-glass__volume">
						<p class="design-glass__volume-descp">400 мл</p>
					</div>
					<div class="design-glass__img design-glass__img_xxl">
						<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
						<p class="design-glass__volume-descp design-glass__img-volume-descp">400 мл</p>
					</div>
				</a>
			</div>

			<div class="design-glass__col">
				<a href="<?php echo get_category_link(8);?>" class="design-glass__body d-flex">
					<div class="design-glass__volume">
						<p class="design-glass__volume-descp">350 мл</p>
					</div>
					<div class="design-glass__img design-glass__img_xl">
						<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
						<p class="design-glass__volume-descp design-glass__img-volume-descp">350 мл</p>
					</div>
				</a>
			</div>

			<div class="design-glass__col">
				<a href="<?php echo get_category_link(7);?>"class="design-glass__body d-flex">
					<div class="design-glass__volume">
						<p class="design-glass__volume-descp">250 мл</p>
					</div>
					<div class="design-glass__img design-glass__img_l">
						<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
						<p class="design-glass__volume-descp design-glass__img-volume-descp">250 мл</p>
					</div>
				</a>
			</div>

			<div class="design-glass__col">
				<a href="<?php echo get_category_link(5);?>" class="design-glass__body d-flex">
					<div class="design-glass__volume">
						<p class="design-glass__volume-descp">180 мл</p>
					</div>
					<div class="design-glass__img design-glass__img_m">
						<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
						<p class="design-glass__volume-descp design-glass__img-volume-descp">180 мл</p>
					</div>
				</a>
			</div>

			<div class="design-glass__col">
				<a href="<?php echo get_category_link(11);?>" class="design-glass__body d-flex">
					<div class="design-glass__volume">
						<p class="design-glass__volume-descp">175 мл</p>
					</div>
					<div class="design-glass__img design-glass__img_s">
						<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
						<p class="design-glass__volume-descp design-glass__img-volume-descp">175 мл</p>
					</div>
				</a>
			</div>

			<div class="design-glass__col">
				<a href="<?php echo get_category_link(12);?>" class="design-glass__body d-flex">
					<div class="design-glass__volume">
						<p class="design-glass__volume-descp">110 мл</p>
					</div>
					<div class="design-glass__img design-glass__img_xs">
						<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
						<p class="design-glass__volume-descp design-glass__img-volume-descp">110 мл</p>
					</div>
				</a>
			</div>

		</div> 
	</div>
</section>

<?php get_template_part('template-parts/offer-thickness');?>

<?php get_template_part('template-parts/payment-info');?>

</main>

<?php get_footer(); ?>  