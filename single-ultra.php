<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
*/ 

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page page-recurring">

<!-- <div class="bg-img bg-img-01">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/01.png?_v=1644843902057" alt=""></picture>
			</div>
			<div class="bg-img bg-img-02">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/02.png?_v=1644843902057" alt=""></picture>
			</div>
			<div class="bg-img bg-img-03">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/03.png?_v=1644843902057" alt=""></picture> 
			</div> -->
<!-- <div class="bg-img bg-img-04">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/04.png?_v=1644843902057" alt=""></picture>
			</div> -->
			<div class="bg-img bg-img-05">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/05.png?_v=1644843902057" alt=""></picture>
			</div>
			<div class="bg-img bg-img-06">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/06.png?_v=1644843902057" alt=""></picture>
			</div>

			<section id="product-sec" class="product-sec recurring">
				<div class="_container"> 
          <?php
				    if ( function_exists('yoast_breadcrumb') ) {
					    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
				    }
			    ?> 

					<h1><?php the_title();?></h1>

					<div class="product__row d-flex">
						<div class="product__slider _swiper d-flex">
							<div class="product__slide slider__slide">
								<picture><source srcset="<?php echo get_template_directory_uri();?>/img/product/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/product/01.jpg?_v=1644843902057" alt=""></picture>
							</div>
							<div class="product__slide slider__slide">
								<picture><source srcset="<?php echo get_template_directory_uri();?>/img/product/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/product/01.jpg?_v=1644843902057" alt=""></picture>
							</div>
						</div>

						<div class="product__descp">
							<div class="product__charect">
								<p class="product__price">Цена: 2500 р. / 1000 шт.</p>
								<p class="product__avail">Под заказ</p>
								<p class="product__vendor">Артикул: 180B-01-011</p>
								<p class="product__volume">Объем: 400 мл</p>
								<p class="product__layers">Количество слоев: 2 слоя</p>
							</div>
							<form action="#" class="product__choice d-flex">
									<div class="product__quantity quantity">
										<div class="quantity__button quantity__button_minus"></div>
										<div class="quantity__input">
											<input autocomplete="off" type="number" name="form[]" value="1"> 
										</div>
										<div class="quantity__button quantity__button_plus"></div>
									</div>
								<button class="product__btn btn">В корзину</button>
							</form>
							<div class="product__text">
								<h3>Краткое описание</h3>
								<p>
									Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее 
									осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.
								</p>
							</div>
						</div>
					</div>

				</div>
			</section>

			<section id="similar-products" class="similar-products">
				<div class="_container"> 
					<h2 class="title">Похожие товары</h2>

					<div class="card__row d-flex">

						<div class="card__col">
							<div class="card__body d-flex">
								<div class="card__img-item">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/05.jpg?_v=1644843902057" alt=""></picture>
								</div>
								<div class="card__descp">
									<div class="card__text">
										<h3 class="card__title">Стаканчик "Good Day"</h3>
										<div class="card__charect d-flex">
											<p class="card__layer">Однослойные</p>
											<p class="card__volume">Объем: <span>400 мл</span></p>
										</div>
									</div>
									<div class="card__btn d-flex">
										<div class="card__price-block">
											<p class="card__price">2300 р.</p>
											<p class="card__number">от 1000 шт</p>
										</div>
										<button class="card__btn-link btn">В корзину</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card__col">
							<div class="card__body d-flex">
								<div class="card__img-item">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/06.jpg?_v=1644843902057" alt=""></picture>
								</div>
								<div class="card__descp">
									<div class="card__text">
										<h3 class="card__title">Стаканчик "Good Day"</h3>
										<div class="card__charect d-flex">
											<p class="card__layer">Однослойные</p>
											<p class="card__volume">Объем: <span>400 мл</span></p>
										</div>
									</div>
									<div class="card__btn d-flex">
										<div class="card__price-block">
											<p class="card__price">2300 р.</p>
											<p class="card__number">от 1000 шт</p>
										</div>
										<button class="card__btn-link btn">В корзину</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card__col">
							<div class="card__body d-flex">
								<div class="card__img-item">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/07.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/07.jpg?_v=1644843902057" alt=""></picture>
								</div>
								<div class="card__descp">
									<div class="card__text">
										<h3 class="card__title">Стаканчик "Good Day"</h3>
										<div class="card__charect d-flex">
											<p class="card__layer">Однослойные</p>
											<p class="card__volume">Объем: <span>400 мл</span></p>
										</div>
									</div>
									<div class="card__btn d-flex">
										<div class="card__price-block">
											<p class="card__price">2300 р.</p>
											<p class="card__number">от 1000 шт</p>
										</div>
										<button class="card__btn-link btn">В корзину</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card__col">
							<div class="card__body d-flex">
								<div class="card__img-item">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/08.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/08.jpg?_v=1644843902057" alt=""></picture>
								</div>
								<div class="card__descp">
									<div class="card__text">
										<h3 class="card__title">Стаканчик "Good Day"</h3>
										<div class="card__charect d-flex">
											<p class="card__layer">Однослойные</p>
											<p class="card__volume">Объем: <span>400 мл</span></p>
										</div>
									</div>
									<div class="card__btn d-flex">
										<div class="card__price-block">
											<p class="card__price">2300 р.</p>
											<p class="card__number">от 1000 шт</p>
										</div>
										<button class="card__btn-link btn">В корзину</button>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

      <?php get_template_part('template-parts/offer-thickness');?>

      <?php get_template_part('template-parts/payment-info');?>

		</main>

<?php get_footer();