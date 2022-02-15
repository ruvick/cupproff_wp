<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page page-recurring">

	<div class="bg-img bg-img-01">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/01.png?_v=1644843902057" alt=""></picture>
	</div>
	<div class="bg-img bg-img-02">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/02.png?_v=1644843902057" alt=""></picture>
	</div>
	<div class="bg-img bg-img-03">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/03.png?_v=1644843902057" alt=""></picture>
	</div>
	<!-- 			<div class="bg-img bg-img-04">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/04.png?_v=1644843902057" alt=""></picture>
	</div> -->
	<div class="bg-img bg-img-05">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/05.png?_v=1644843902057" alt=""></picture>
	</div>
	<div class="bg-img bg-img-06">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/bg-img/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/bg-img/06.png?_v=1644843902057" alt=""></picture>
	</div>

	<section class="recurring">
		<div class="_container"> 
  		<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
				}
			?> 

<?
				// $arg = $wp_query->query;

				//$arg['relation']  = 'OR';
				//$arg['title']  = "%Торфотаблетка%";
				
				


 				$metaquery = array(

					'relation' => 'AND',
					'searchFild' => array (
						'relation' => 'OR',
						'tqAll' => array(
							'key'     => '_offer_allsearch',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						),

						'tqSku' => array(
							'key'     => '_offer_sku',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						),

						'tqDescr' => array(
							'key'     => '_offer_smile_descr',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						),

						'tqDescr' => array(
							'key'     => '_offer_name',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						)
						
					),
						
					'pricenz' => array (
							'key'     => '_offer_price',
							'value' => 0,
							'compare' => '!=',
							'type'    => 'DECIMAL(9,2)',
						)

					
					
				); 

				$arg['post_type']  = 'agriproduct';
				$arg['posts_per_page'] = -1;
				$arg['meta_query'] = $metaquery;
				
			
				$queryM = new WP_Query($arg);
				// echo "<pre>";
				// print_r($queryM);
				// echo "</pre>";
			?>

			<h1>Результаты поиска</h1>

			<div class="prod-card d-flex">

				<?php
				while(have_posts()):
					the_post();
					get_template_part('template-parts/product-elem');  
				endwhile;
				?>

			</div>

			<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>

		</div>
	</section>
</main>

<?php get_template_part('template-parts/offer-thickness');?>

<?php get_template_part('template-parts/payment-info');?>

<?php get_footer();