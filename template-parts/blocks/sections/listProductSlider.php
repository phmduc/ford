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
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'w-listProductSlider';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$isFullWidth = false;
if (!empty($block['align'])) {
    $isFullWidth = $block['align'] === 'full' ? true : false;
    $className .= ' align-' . $block['align'];
}

// Load values and assign defaults.

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="slider-container">
            <h2 class="slider-title">
                DÒNG XE DU LỊCH FORD
            </h2>
            <div class="row slider-wrapper mt-1">
                <div class="col-lg-4 col">
                    <a href="#" class="product-item">
                        <div class="product-image">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ford-everest-sport.png' ?>"
                                alt="">
                        </div>
                        <h3>
                            Ford Everest Titanium 2.0L AT 4x2 2023
                        </h3>
                        <p class="product-price">830,000,000 đ</p>
                        <button class="btn-buy">
                            Mua ngay
                        </button>
                    </a>
                </div>
                <div class="col-lg-4 col">
                    <a href="#" class="product-item">
                        <div class="product-image">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ford-everest-titanium.png' ?>"
                                alt="">
                        </div>

                        <h3>
                            Ford Everest Titanium 2.0L AT 4x2 2023
                        </h3>
                        <p class="product-price">830,000,000 đ</p>
                        <button class="btn-buy">
                            Mua ngay
                        </button>
                    </a>
                </div>
                <div class="col-lg-4 col">
                    <a href="#" class="product-item">
                        <div class="product-image">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ford-everest-sport.png' ?>"
                                alt="">
                        </div>
                        <h3>
                            Ford Everest Titanium 2.0L AT 4x2 2023
                        </h3>
                        <p class="product-price">830,000,000 đ</p>
                        <button class="btn-buy">
                            Mua ngay
                        </button>
                    </a>
                </div>
                <div class="col-lg-4 col">
                    <a href="#" class="product-item">
                        <div class="product-image">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ford-everest-sport.png' ?>"
                                alt="">
                        </div>
                        <h3>
                            Ford Everest Titanium 2.0L AT 4x2 2023
                        </h3>
                        <p class="product-price">830,000,000 đ</p>
                        <button class="btn-buy">
                            Mua ngay
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
add_action('wp_footer', 'listSlider_setup', 99, 1);
if (!function_exists('listSlider_setup')) {
    function listSlider_setup()
    { ?>
<script async>
(function($) {
    $(document).ready(function() {
        $(".slider-wrapper").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            draggable: true,
            autoplay: true,
            autoplaySpeed: 1500,
            prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class="bi bi-chevron-left"></i></button>`,
            nextArrow: `<button type='button' class='slick-next slick-arrow'><i class="bi bi-chevron-right"></i></button>`,
            responsive: [{
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        infinite: false,
                    },
                },
            ],
            // autoplay: true,
            // autoplaySpeed: 1000,
        });
    });
}(jQuery));
</script>
<?php }
}