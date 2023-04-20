<?php

/**
 * "List Product" Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'w-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'w-listProduct';

if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$isFullWidth = false;
if( !empty($block['align']) ) {
    $isFullWidth = $block['align'] === 'full' ? true : false;
    $className .= ' align-' . $block['align'];
}

// Load values and assign defaults.

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="box-listproduct">
        <div class="box-header">
                <p class="box-title">Dòng xe bán tải - Ford Ranger</p>
        </div>
        <div class="box-content">
            <div class="row">
                
                
                <div class="col-6 col-md-3 my-3 col-listproduct">
                    <div class="product_item">
                        <div class="product-image">
                            <a href="">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/car.png' ?>" alt="">
                            </a>
                        </div>
                        <div class="caption">
                            <h3 class="caption_name">
                                <a href="">Ford Ranger XL 2.0L 4x4 MT 2023</a>
                            </h3>
                            <div class="content-price">
                                <span class="price">659,000,000 đ</span>
                            </div>
                            <button class="btn btn_addcart  btn-primary">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3 col-listproduct">
                    <div class="product_item">
                        <div class="product-image">
                            <a href="">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/car.png' ?>" alt="">
                            </a>
                        </div>
                        <div class="caption">
                            <h3 class="caption_name">
                                <a href="">Ford Ranger XL 2.0L 4x4 MT 2023</a>
                            </h3>
                            <div class="content-price">
                                <span class="price">659,000,000 đ</span>
                            </div>
                            <button class="btn btn_addcart  btn-primary">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3 col-listproduct">
                    <div class="product_item">
                        <div class="product-image">
                            <a href="">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/car.png' ?>" alt="">
                            </a>
                        </div>
                        <div class="caption">
                            <h3 class="caption_name">
                                <a href="">Ford Ranger XL 2.0L 4x4 MT 2023</a>
                            </h3>
                            <div class="content-price">
                                <span class="price">659,000,000 đ</span>
                            </div>
                            <button class="btn btn_addcart  btn-primary">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3 col-listproduct">
                    <div class="product_item">
                        <div class="product-image">
                            <a href="">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/car.png' ?>" alt="">
                            </a>
                        </div>
                        <div class="caption">
                            <h3 class="caption_name">
                                <a href="">Ford Ranger XL 2.0L 4x4 MT 2023</a>
                            </h3>
                            <div class="content-price">
                                <span class="price">659,000,000 đ</span>
                            </div>
                            <button class="btn btn_addcart  btn-primary">Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
add_action( 'wp_footer', 'listProduct_setup', 99, 1 );
if (!function_exists('listProduct_setup'))   {
    function listProduct_setup() { ?>
        <script async>
            ( function ( $ ) {
              
            }( jQuery ) );
        </script>
    <?php }
}


