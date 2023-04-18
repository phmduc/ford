<?php

/**
 * "Blogs" Block Template.
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
$className = 'w-blogs py-5';

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
   <div class="blogs">
        <div class="blogs-header">
            tin tức mới
        </div>

        <div class="blogs-list">
            <div class="list-item">
                <a href="">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt1.webp' ?>" alt="">
                    <span class="hover-div">
                        <span>xem tiếp</span>
                    </span>
                </a>
                <div class="title">
                    <h3>
                        <a href="">Bảng giá xe ô tô Ford</a>
                    </h3>
                    <p>Bảng giá xe Ford tháng 7/2022, bên cạnh các mẫu xe Explorer, Everest, Ranger và à</p>
                </div>
                <a class="btt-next" href="">xem tiếp</a>
            </div>
            <div class="list-item">
                <a href="">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt2.webp' ?>" alt="">
                    <span class="hover-div">
                        <span>xem tiếp</span>
                    </span>
                </a>
                <div class="title">
                    <h3>
                        <a href="">Bảng giá xe ô tô Ford</a>
                    </h3>
                    <p>Bảng giá xe Ford tháng 7/2022, bên cạnh các mẫu xe Explorer, Everest, Ranger và à</p>
                </div>
                <a class="btt-next" href="">xem tiếp</a>
            </div>
            <div class="list-item">
                <a href="">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt3.webp' ?>" alt="">
                    <span class="hover-div">
                        <span>xem tiếp</span>
                    </span>
                </a>
                <div class="title">
                    <h3>
                        <a href="">Bảng giá xe ô tô Ford</a>
                    </h3>
                    <p>Bảng giá xe Ford tháng 7/2022, bên cạnh các mẫu xe Explorer, Everest, Ranger và à</p>
                </div>
                <a class="btt-next" href="">xem tiếp</a>
            </div>
            <div class="list-item">
                <a href="">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt4.webp' ?>" alt="">
                    <span class="hover-div">
                        <span>xem tiếp</span>
                    </span>
                </a>
                <div class="title">
                    <h3>
                        <a href="">Bảng giá xe ô tô Ford</a>
                    </h3>
                    <p>Bảng giá xe Ford tháng 7/2022, bên cạnh các mẫu xe Explorer, Everest, Ranger và à</p>
                </div>
                <a class="btt-next" href="">xem tiếp</a>
            </div>
            <div class="list-item">
                <a href="">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt5.webp' ?>" alt="">
                    <span class="hover-div">
                        <span>xem tiếp</span>
                    </span>
                </a>
                <div class="title">
                    <h3>
                        <a href="">Bảng giá xe ô tô Ford</a>
                    </h3>
                    <p>Bảng giá xe Ford tháng 7/2022, bên cạnh các mẫu xe Explorer, Everest, Ranger và à</p>
                </div>
                <a class="btt-next" href="">xem tiếp</a>
            </div>
            <div class="list-item">
                <a href="">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt6.webp' ?>" alt="">
                    <span class="hover-div">
                        <span>xem tiếp</span>
                    </span>
                </a>
                <div class="title">
                    <h3>
                        <a href="">Bảng giá xe ô tô Ford</a>
                    </h3>
                    <p>Bảng giá xe Ford tháng 7/2022, bên cạnh các mẫu xe Explorer, Everest, Ranger và à</p>
                </div>
                <a class="btt-next" href="">xem tiếp</a>
            </div>
        </div>
   </div>
</section>
<?php 
add_action( 'wp_footer', 'blogs_setup', 99, 1 );
if (!function_exists('blogs_setup'))   {
    function blogs_setup() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}




