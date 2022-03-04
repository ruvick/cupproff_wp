<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
*/ 

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page page-recurring">

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
							<? $offerPrice = carbon_get_post_meta(get_the_ID(),"offer_price");	
									if (!empty($offerPrice)) { ?>
										<p class="product__price">Цена: <? echo $offerPrice; ?> р. / 1000 шт.</p> 
								<? } ?>
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
								<button class="product__btn btn" id = "btn__to-card" onclick = "add_tocart(this, 0); return false;"
											data-price = "<?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?>"
  										data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
  										data-size = ""
  										data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>"
  										data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
  										data-name = "<? echo  get_the_title();?>"
  										data-count = "1"
  										data-picture = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'large')[0];?>"
  										data-picture = "<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>">
									В корзину</button>
							</form>
							<? $offerSmdescr = carbon_get_post_meta(get_the_ID(),"offer_smile_descr");	
								if (!empty($offerSmdescr)) { ?>
									<div class="product__text">
										<h3>Краткое описание</h3>
											<p><? echo $offerSmdescr; ?></p>
									</div>
							<? } ?>
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
								<a href="<?php echo get_permalink(26);?>" class="card__img-item">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/05.jpg?_v=1644843902057" alt=""></picture>
								</a>
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
										<button class="card__btn-link btn" id = "btn__to-card" onclick = "add_tocart(this, 0); return false;"
											data-price = "<?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?>"
  										data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
  										data-size = ""
  										data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>"
  										data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
  										data-name = "<? echo  get_the_title();?>"
  										data-count = "1"
  										data-picture = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'large')[0];?>"
  										data-picture = "<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>">
											В корзину</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card__col">
							<div class="card__body d-flex">
								<a href="<?php echo get_permalink(26);?>" class="card__img-item">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/06.jpg?_v=1644843902057" alt=""></picture>
								</a>
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
										<button class="card__btn-link btn" id = "btn__to-card" onclick = "add_tocart(this, 0); return false;"
											data-price = "<?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?>"
  										data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
  										data-size = ""
  										data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>"
  										data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
  										data-name = "<? echo  get_the_title();?>"
  										data-count = "1"
  										data-picture = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'large')[0];?>"
  										data-picture = "<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>">
											В корзину</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card__col">
							<div class="card__body d-flex">
								<a href="<?php echo get_permalink(26);?>" class="card__img-item">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/07.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/07.jpg?_v=1644843902057" alt=""></picture>
								</a>
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
										<button class="card__btn-link btn" id = "btn__to-card" onclick = "add_tocart(this, 0); return false;"
											data-price = "<?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?>"
  										data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
  										data-size = ""
  										data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>"
  										data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
  										data-name = "<? echo  get_the_title();?>"
  										data-count = "1"
  										data-picture = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'large')[0];?>"
  										data-picture = "<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>">
											В корзину</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card__col">
							<div class="card__body d-flex">
								<a href="<?php echo get_permalink(26);?>" class="card__img-item">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/08.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/08.jpg?_v=1644843902057" alt=""></picture>
								</a>
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
										<button class="card__btn-link btn" id = "btn__to-card" onclick = "add_tocart(this, 0); return false;"
											data-price = "<?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?>"
  										data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
  										data-size = ""
  										data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>"
  										data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
  										data-name = "<? echo  get_the_title();?>"
  										data-count = "1"
  										data-picture = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'large')[0];?>"
  										data-picture = "<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>">
											В корзину</button>
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