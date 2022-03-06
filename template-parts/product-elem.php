<div class="card__col">
	<div class="card__body d-flex">
		<a href="<?echo get_the_permalink(get_the_ID());?>" class="card__img-item">
			<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
		</a>
		<div class="card__descp">
			<div class="card__text">
				<h3 class="card__title"><? the_title();?></h3>
				<div class="card__charect d-flex">
					<? $offerNumlayers = carbon_get_post_meta(get_the_ID(),"offer_num_layers");	
							if (!empty($offerNumlayers )) { ?>
								<p class="card__layer"><? echo $offerNumlayers; ?></p>
					<? } ?>
					<? $offerValue = carbon_get_post_meta(get_the_ID(),"offer_value");	
						if (!empty($offerValue )) { ?>
							<p class="card__volume">Объем: <span><? echo $offerValue; ?> мл</span></p>
					<? } ?>
				</div>
			</div> 
			<div class="card__btn d-flex">
				<div class="card__price-block">
					<? $offerPrice = carbon_get_post_meta(get_the_ID(),"offer_price");	
							if (!empty($offerPrice)) { ?>
						<p class="card__price"><? echo $offerPrice; ?> р.</p>
					<? } ?>
					<? $offQuantity = carbon_get_post_meta(get_the_ID(),"offer_quantity");	
							if (!empty($offQuantity)) { ?>
							<p class="card__number">от <? echo $offQuantity; ?> шт</p> 
					<? } ?>
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
