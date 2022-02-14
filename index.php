<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

			<!-- <div class="bg-img bg-img-01">
	<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/01.png?_v=1644843902057" alt=""></picture>  
</div>
<div class="bg-img bg-img-02">
	<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/02.png?_v=1644843902057" alt=""></picture>  
</div>
<div class="bg-img bg-img-03">
	<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/03.png?_v=1644843902057" alt=""></picture>   
</div>
<div class="bg-img bg-img-04">
	<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/04.png?_v=1644843902057" alt=""></picture>  
</div>
<div class="bg-img bg-img-05">
	<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/05.png?_v=1644843902057" alt=""></picture>
</div>
<div class="bg-img bg-img-06">
	<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/06.png?_v=1644843902057" alt=""></picture>
</div> -->

<section id="about" class="about">
	<div class="about__container _container">

		<div class="about__row d-flex">

			<div class="about__slider-wrap slider__wrap">
				<div class="about__slider-substrate about__slider-substrate_yellow"></div>
				<div class="about__slider slider _swiper d-flex">
					<div class="about__slider-slide slider__slide">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/slider-index/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/slider-index/01.png?_v=1644843902057" alt=""></picture>
					</div>
					<div class="about__slider-slide slider__slide">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/thickness/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/thickness/01.png?_v=1644843902057" alt=""></picture>
					</div>
				</div>
				<!-- </div> -->
				<!-- Кнопки-стрлеки -->
				<div class="swiper-button swiper-button-next about__swiper-button-next"></div>
				<div class="swiper-button swiper-button-prev about__swiper-button-prev"></div>
			</div>

			<div class="about__descp">
				<h1 class="about__title">
					ПРОИЗВОДСТВО ОДНОРАЗОВЫХ <br>
					БУМАЖНЫХ СТАКАНЧИКОВ <br>
					<span>
						с индивидуальным <br>
						дизайном
					</span>
				</h1>
				<p class="about__subtitle">
					Закажите бумажные стаканчики с собственным <br>
					индивидуальным дизайномt
				</p>
				<div class="about__titming d-flex">
					<div class="about__titming-item">
						<p class="about__titming-subdescription">Тираж от:</p>
						<p class="about__titming-description">1000 шт.</p>
					</div>
					<div class="about__titming-item">
						<p class="about__titming-subdescription">Срок от:</p>
						<p class="about__titming-description">5 дней</p>
					</div>
					<div class="about__titming-item">
						<p class="about__titming-subdescription">Цена от:</p>
						<p class="about__titming-description">3 р./шт.</p>
					</div>
				</div>
				<a href="#callback" class="btn btn_size_l about__btn _popup-link">Рассчитать стоимость тиража</a>
			</div>

		</div>

	</div>
</section>

<section id="how-work" class="how-work">
	<div class="_container">
		<h2 class="title">Как мы работаем</h2>

		<div class="how-work__row d-flex">
			<div class="card-info how-work-info _shadow how-work-icon-01">
				<h3>
					Выбор типа и <br>
					размера <br>
					стаканчиков
				</h3>
			</div>

			<div class="card-info card-info_yellow how-work-info how-work-icon-02 _shadow">
				<h3>
					Определяем <br>
					размер <br>
					тиража
				</h3>
			</div>

			<div class="card-info how-work-info how-work-icon-03 _shadow">
				<h3>
					Разрабатываем <br>
					дизайн <br>
					стаканчиков
				</h3>
			</div>

			<div class="card-info how-work-info how-work-icon-04 _shadow">
				<h3>
					Запуск <br>
					тиража в <br>
					производство
				</h3>
			</div>

			<div class="card-info how-work-info how-work-icon-05 _shadow">
				<h3>
					Отгрузка <br>
					готовой <br>
					продукции
				</h3>
			</div>
		</div>

	</div>
</section>

<section id="advant" class="advant">
	<div class="advant__container _container">
		<div class="advant__row d-flex">
			<div class="advant__img">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/advant.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/advant.jpg?_v=1644843902057" alt=""></picture>
			</div>
			<div class="advant__card-block">
				<h2 class="title advant__title">
					Несколько причин выбрать
					наши стаканчики
				</h2>
				<div class="advant__card-row d-flex">
					<div class="card-info card-info_yellow advant-info advant-icon-01 _shadow">
						<h3>
							Новейшая <br>
							производственная <br>
							линия
						</h3>
					</div>

					<div class="card-info advant-info advant-icon-02">
						<h3>
							Экологически <br>
							чистое материалы <br>
							и сырье
						</h3>
					</div>

					<div class="card-info advant-info advant-icon-03">
						<h3>
							Высокая мощность <br>
							производственной <br>
							линии
						</h3>
					</div>

					<div class="card-info advant-info advant-icon-04">
						<h3>
							Квалифицированный <br>
							и ответственный <br>
							персонал
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="offer-sec" class="offer-sec">
	<div class="_container">
		<h2 class="title">
			Мы предлагаем бумажные стаканчики <br>
			различного объема
		</h2>
		<div class="design-glass__row d-flex">

<div class="design-glass__col">
<div class="design-glass__body d-flex">
<div class="design-glass__volume">
	<p class="design-glass__volume-descp">400 мл</p>
</div>
<div class="design-glass__img design-glass__img_xxl">
	<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
	<p class="design-glass__volume-descp design-glass__img-volume-descp">400 мл</p>
</div>
</div>
</div>

<div class="design-glass__col">
<div class="design-glass__body d-flex">
<div class="design-glass__volume">
	<p class="design-glass__volume-descp">350 мл</p>
</div>
<div class="design-glass__img design-glass__img_xl">
	<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
	<p class="design-glass__volume-descp design-glass__img-volume-descp">350 мл</p>
</div>
</div>
</div>

<div class="design-glass__col">
<div class="design-glass__body d-flex">
<div class="design-glass__volume">
	<p class="design-glass__volume-descp">250 мл</p>
</div>
<div class="design-glass__img design-glass__img_l">
	<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
	<p class="design-glass__volume-descp design-glass__img-volume-descp">250 мл</p>
</div>
</div>
</div>

<div class="design-glass__col">
<div class="design-glass__body d-flex">
<div class="design-glass__volume">
	<p class="design-glass__volume-descp">180 мл</p>
</div>
<div class="design-glass__img design-glass__img_m">
	<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
	<p class="design-glass__volume-descp design-glass__img-volume-descp">180 мл</p>
</div>
</div>
</div>

<div class="design-glass__col">
<div class="design-glass__body d-flex">
<div class="design-glass__volume">
	<p class="design-glass__volume-descp">175 мл</p>
</div>
<div class="design-glass__img design-glass__img_s">
	<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
	<p class="design-glass__volume-descp design-glass__img-volume-descp">175 мл</p>
</div>
</div>
</div>

<div class="design-glass__col">
<div class="design-glass__body d-flex">
<div class="design-glass__volume">
	<p class="design-glass__volume-descp">110 мл</p>
</div>
<div class="design-glass__img design-glass__img_xs">
	<p class="design-glass__img-descp">ВАШ <br> <span>ДИЗАЙН</span></p>
	<p class="design-glass__volume-descp design-glass__img-volume-descp">110 мл</p>
</div>
</div>
</div>

</div>
	</div>
</section>

<section id="offer-thickness" class="offer-thickness">
<div class="_container">

<div class="offer-thickness__yelow-block">
<h2>
	Мы предлагаем бумажные стаканчики <br>
	различного объема
</h2>

<div class="offer-thickness__row d-flex">

	<div class="thickness__body d-flex">
		<div class="thickness__img">
			<picture><source srcset="<?php echo get_template_directory_uri();?>/img/thickness/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/thickness/01.png?_v=1644843902057" alt=""></picture>
		</div>
		<div class="thickness__item-descp _shadow d-flex">
			<p class="thickness__descp">ОДНОСЛОЙНЫЕ</p>
		</div>
	</div>

	<div class="thickness__body d-flex">
		<div class="thickness__img">
			<picture><source srcset="<?php echo get_template_directory_uri();?>/img/thickness/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/thickness/02.png?_v=1644843902057" alt=""></picture>
		</div>
		<div class="thickness__item-descp _shadow d-flex">
			<p class="thickness__descp">ДВУХСЛОЙНЫЕ</p>
		</div>
	</div>

	<div class="thickness__body d-flex">
		<div class="thickness__img">
			<picture><source srcset="<?php echo get_template_directory_uri();?>/img/thickness/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/thickness/01.png?_v=1644843902057" alt=""></picture>
		</div>
		<div class="thickness__item-descp _shadow d-flex">
			<p class="thickness__descp">ТРЕХСЛОЙНЫЕ</p>
		</div>
	</div>

</div>

</div>

</div>
</section>

<section id="payment-info" class="payment-info">
<!-- 	<div class="form-applic__img-left">
<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/07.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/07.png?_v=1644843902057" alt=""></picture>
</div> -->
<div class="payment-info__container _container">

<div class="payment-info__row d-flex">
<div class="payment-info__descp">
	<h2 class="title payment-info__title">
		Рассчитайте 
		стоимость Ваших 
		стаканчиков
	</h2>
	<p>
		Для точной оценки стоимости 
		тиража нам необходимо немного
		дополнительной информации
		начать обсуждение можно при
		помощи этой формы
	</p>
</div>
<form action="#" class="payment-info__form form-applic">
	<div class="form__line d-flex">

		<div class="form-applic__column">
			<input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Имя"
			class="input _req">

			<input id="tel" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Телефон"
			class="input _digital _req">

			<input id="email" autocomplete="off" type="text" name="form[]" data-error="Заполните поля"
			data-value="Email" class="input _email _req">

			<input id="circulation" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Тираж"
			class="input _digital _req">
		</div>

		<div class="form-applic__column">
			<input id="design" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Дизайн"
			class="input _req">

			<textarea id="tel" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Комментарий"
			class="input _req"></textarea>

			<p class="form-applic__text">
				Заполняя и отправляя данную форму Вы соглашаетесь с 
				условиями политики конфиденциальности и обработки 
				персональных данных
			</p>
		</div>

	</div>
	<button class="btn btn_size_l form-applic__btn">Рассчитать тираж</button>
</form>
<!-- 			<div class="form-applic__img-right">
	<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/08.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/08.png?_v=1644843902057" alt=""></picture>
</div> -->
</div>

</div>
</section>

</main>

<?php get_footer(); ?> 