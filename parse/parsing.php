<?
// /opt/php/7.1/bin/php www/cupproff.ru/wp-content/themes/cupproff/parse/parsing.php

set_include_path('/var/www/u1611744/data/www/cupproff.ru/');

require_once("wp-config.php");
            
require_once ABSPATH . 'wp-admin/includes/media.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/image.php';



    $dir = __DIR__."/photo";
    $cdir = scandir($dir);
    
     foreach ($cdir as $key => $value)
     {
        if (!in_array($value,array(".","..")))
        {
            $litrazg = [175, 180, 250, 350, 400, 480];
            $design = pathinfo($value)['filename'];
            for ($i = 1; $i<=4; $i++)
            {
                for ($j = 0; $j<count($litrazg); $j++){
                    echo $litrazg[$j]."-0".$i."-".$design . "\n\r";

                    $layers = $i;
                    $litr = $litrazg[$j];
                    $sku = $litrazg[$j]."-0".$i."-".$design;
                    
                    $text = ($layers == 1)?" слой": " слоя";

                    $title = "Бумажный стаканчик ". $litr . "мл ". $layers . $text ." (".$sku.")";
                    
                    

                    $to_post_meta  = [ 
                        '_offer_sku' => $sku, 
                        '_offer_quantity' => 1000, 
                        '_offer_price' => 3, 
                        '_offer_value' => $litr,
                        '_offer_num_layers' => $layers,
                        '_offer_smile_descr' => $title,
                    ];

                    $post_id = wp_insert_post(  wp_slash( array(
                        'post_type'     => 'ultra',
                        'post_author'    => 1,
                        'post_status'    => 'publish',
                        'post_title' => $title,
                        'post_excerpt'  => $title,
                        'post_content'  => $title,
                        'meta_input'     => $to_post_meta,
                        
                    ) ) );

                    $img1 = get_bloginfo("template_url").'/parse/photo/'. $value;
                    $ttl = $title;
                    $img_id = media_sideload_image( $img1, $post_id, $ttl, "id" );

                    add_post_meta( $post_id, '_offer_picture|gal_img|0|0|value', $img_id, true );
                    add_post_meta( $post_id, '_offer_picture|gal_img_sku|0|0|value',  1, true );
                    add_post_meta( $post_id, '_offer_picture|gal_img_alt|0|0|value', $ttl, true );

                    set_post_thumbnail($post_id, $img_id);

                }

            }
                
        }
    }
?>