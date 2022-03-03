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

			<div class="card__col">
				<div class="card__body d-flex">
					<a href="<?php echo get_permalink(26);?>" class="card__img-item">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/01.jpg?_v=1644843902057" alt=""></picture>
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
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/02.jpg?_v=1644843902057" alt=""></picture>
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
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/03.jpg?_v=1644843902057" alt=""></picture>
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
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/04.jpg?_v=1644843902057" alt=""></picture>
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

		<div class="pagging">
			<a href="" class="pagging__arrow pagging__arrow_back"></a>
			<ul class="pagging__list">
				<li>
					<a href="" class="pagging__item _active">1</a>
				</li>
				<li>
					<a href="" class="pagging__item">2</a>
				</li>
				<li>
					<a href="" class="pagging__item">3</a>
				</li>
			</ul>
			<a href="" class="pagging__arrow pagging__arrow_next">Следующая страница</a>
		</div>

	</div>
</section>

<?php get_template_part('template-parts/offer-thickness');?>

<?php get_template_part('template-parts/payment-info');?>

</main>

<?php get_footer(); ?>  