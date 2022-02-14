<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<div class="footer__column">
				<ul class="footer__menu footer__menu_first">
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Наш каталог</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Контакты</a></li>  
				</ul>
				<div class="contacts footer__contacts d-flex">
					<p class="contacts__time-phone footer__time-phone">Горячая линия</p>
					<a href="tel:88004882222" class="contacts__phone footer__phone">8 800 488 22 22</a>
					<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a> -->
				</div>
			</div>

			<div class="footer__column">
				<ul class="footer__menu">
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">О нас</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Доставка</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Разработка дизайна</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Этапы производства</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Ассортимент</a></li> 
				</ul>
			</div>

			<div class="footer__column">
				<div class="footer__mail">
					<p class="footer__mail-text">По вопросам оптовых поставок</p>
					<a href="mailto:opt@cupprof.ru" class="footer__mail-link">opt@cupprof.ru</a>
				</div>
				<div class="footer__mail">
					<p class="footer__mail-text">По вопросам сотрудничества</p>
					<a href="mailto:info@cupprof.ru" class="footer__mail-link">info@cupprof.ru</a>
				</div>
			</div>

			<div class="footer__column">
				<div class="footer__policy">
					<a href="#" class="footer__policy-link">
						Политика в области защиты <br>
						персональных данных
					</a>	
					<a href="#callback" class="btn btn_size_l footer__callback _popup-link">Задать вопрос</a>
				</div>
			</div>

		</div>

		<div class="footer__line"></div>

		<div class="footer__row footer__row_bottom d-flex">
			<div class="soc-block-icon footer__soc-block-icon">
				<a href="#" class="soc-block-icon-link footer__soc-block-icon-link soc-icon-1" aria-label="Иконка соцсети"></a>
				<a href="#" class="soc-block-icon-link footer__soc-block-icon-link soc-icon-2" aria-label="Иконка соцсети"></a>
				<a href="#" class="soc-block-icon-link footer__soc-block-icon-link soc-icon-3" aria-label="Иконка соцсети"></a>
				<a href="#" class="soc-block-icon-link footer__soc-block-icon-link soc-icon-4" aria-label="Иконка соцсети"></a>
			</div>
			<p class="footer__copyright">CupProff 2021 ©</p>
		</div>

	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>