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



<!-- <div class="prod-card__body d-flex">
	<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__link">
		<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
	</a>

	<div class="prod-card__text d-flex">
		<h4><? the_title();?></h4>
		<p class="prod-card__price"><?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?> руб.</p>
	</div>
	<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__btn btn">Подробнее</a>
</div> -->