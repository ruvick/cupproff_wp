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
						<?
						    $pict = carbon_get_the_post_meta('offer_picture');
						      if($pict) {
							  $pictIndex = 0;
							    foreach($pict as $item) {
							?>
								<div class="product__slide slider__slide">
									<img
										id = "pict-<? echo empty($item['gal_img_sku'])?$pictIndex:$item['gal_img_sku']; ?>" 
										alt = "<? echo $item['gal_img_alt']; ?>"
										title = "<? echo $item['gal_img_alt']; ?>"
										src = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>" /> 								
								</div>
							<?
								  $pictIndex++;
							    }
						    }
						  ?>
						</div>

						<div class="product__descp">
							<div class="product__charect">
								<? $offerPrice = carbon_get_post_meta(get_the_ID(),"offer_price");	
									if (!empty($offerPrice)) { ?>
										<p class="product__price">Цена: <? echo $offerPrice; ?> р. / 1000 шт.</p> 
								<? } ?>
								<p class="product__avail">Под заказ</p>
								<? $offerSku = carbon_get_post_meta(get_the_ID(),"offer_sku");	
									if (!empty($offerSku)) { ?>
										<p class="product__vendor">Артикул: <? echo $offerSku; ?></p>
								<? } ?>
								<? $offerValue = carbon_get_post_meta(get_the_ID(),"offer_value");	
									if (!empty($offerValue )) { ?>
										<p class="product__volume">Объем: <? echo $offerValue; ?> мл</p>
								<? } ?>
								<? $offerNumlayers = carbon_get_post_meta(get_the_ID(),"offer_num_layers");	
									if (!empty($offerNumlayers )) { ?>
										<p class="product__layers">Количество слоев: <? echo $offerNumlayers; ?></p>
								<? } ?>
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
					<?
								$args = array(
									'posts_per_page' => 4,
									'post_type' => 'ultra',
									'orderby' => 'rand',
									'tax_query' => array(
										array(
									'taxonomy' => 'ultracat', 
									'field' => 'id',
									'terms' => array(4)
											)
										)
									);
								$query = new WP_Query($args);

								foreach( $query->posts as $post ){
									$query->the_post();
										get_template_part('template-parts/product-elem');
									}  
								wp_reset_postdata();
							?>
					</div>
				</div>
			</section>

      <?php get_template_part('template-parts/offer-thickness');?>

      <?php get_template_part('template-parts/payment-info');?>

		</main>

<?php get_footer();