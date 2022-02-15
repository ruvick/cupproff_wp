<header id="header-index" class="header header-index">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo" aria-label="Логотип"></a> 

			<div class="header__navigation">

				<a href="<?php echo get_permalink(15);?>" class="bascket-icon" aria-label="Корзина"><span class="bascket-icon__number bascet_counter">1</span></a>

				<div class="header__menu-icon-block">
					<p class="header__menu-icon-text">Меню</p>
					<div class="icon-menu icon-menu_open" aria-label="Бургер меню">  
						<span></span>
						<span></span>
						<span></span> 
					</div>
				</div>
			</div>

		</div>
	</div>
</header>

<!-- Меню -->
<div class="menu header__mob-menu">
	<div class="menu__img">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/menu.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/menu.jpg?_v=1644843902057" alt=""></picture>
	</div>
	<div class="menu__wrap">
		<div class="menu__header">
			<a href="index.html" class="logo-icon header__logo" aria-label="Логотип"></a> 
			<a href="#" class="bascket-icon" aria-label="Корзина"><span class="bascket-icon__number bascet_counter">1</span></a>
			<div class="header__menu-icon-block menu-icon-block">
				<p class="header__menu-icon-text">Меню</p>
				<div class="icon-menu icon-menu_close active" aria-label="Бургер меню">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<div class="menu__body">
			<div class="menu__container">
				<div class="menu__list-wrap">
					<div class="menu__list">
						<h3>Наша продукция</h3>
						<ul class="menu__list-ul">
							<li class="menu__list-item"><a href="#" class="menu__list-link">Бумажные стаканчики 170 мл</a></li>
							<li class="menu__list-item"><a href="#" class="menu__list-link">Бумажные стаканчики 180 мл</a></li>
							<li class="menu__list-item"><a href="#" class="menu__list-link">Бумажные стаканчики 225 мл</a></li>
							<li class="menu__list-item"><a href="#" class="menu__list-link">Бумажные стаканчики 250 мл</a></li>
							<li class="menu__list-item"><a href="#" class="menu__list-link">Бумажные стаканчики 350 мл</a></li>
							<li class="menu__list-item"><a href="#" class="menu__list-link">Бумажные стаканчики 400 мл</a></li>
						</ul>
					</div>
					<div class="menu__list">
						<ul class="menu__list-ul">
							<li class="menu__list-item"><a href="#" class="menu__list-link">Однослойные бумажные стаканчики</a></li>
							<li class="menu__list-item"><a href="#" class="menu__list-link">Двухслойные бумажные стаканчики</a></li>
							<li class="menu__list-item"><a href="#" class="menu__list-link">Трехслойные бумажные стаканчики</a></li>
						</ul>
					</div>
					<div class="menu__list">
						<h3>Дополнительно</h3>
						<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list-ul',
							'container_class' => 'menu__list-ul','container' => false )); ?> 
						<!-- <a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->
					</div>
				</div>
			</div>
		</div>
		<div class="menu__footer">
			<div class="menu__container menu__container_flex">
				<div class="contacts menu__footer-contacts header__contacts d-flex">
					<? $tel = carbon_get_theme_option("as_phones_1"); 
						if (!empty($tel)){?>
						<p class="contacts__time-phone header__time-phone">Горячая линия</p>
						<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="contacts__phone header__phone"><? echo $tel; ?></a><?}?> 
					<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a> -->
				</div>
				<div class="menu__soc-block">
					<h4>Мы в социальных сетях </h4>
					<div class="soc-block-icon menu__soc-block-icon">
						<a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="soc-block-icon-link menu__soc-block-icon-link menu__soc-icon-1" aria-label="Иконка соцсети"></a>
						<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="soc-block-icon-link menu__soc-block-icon-link menu__soc-icon-2" aria-label="Иконка соцсети"></a>
						<a href="<?php echo carbon_get_theme_option('as_whatsapp'); ?>" class="soc-block-icon-link menu__soc-block-icon-link menu__soc-icon-3" aria-label="Иконка соцсети"></a>
						<a href="<?php echo carbon_get_theme_option('as_telegr'); ?>" class="soc-block-icon-link menu__soc-block-icon-link menu__soc-icon-4" aria-label="Иконка соцсети"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bg-index"></div>