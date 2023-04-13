<?php
/**
 * The template for displaying content in the index.php template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-lg-4 col-sm-6' ); ?>>
	<?php
			$date = get_the_date();
			$formatted_date = date( 'j M, Y', strtotime( $date ) );
	?>
	<div class="blog_box">
		<div class="blog_item_img">
			<img src="https://rin.webmau.net/wp-content/uploads/2023/03/4-1.webp" class="img-fluid" alt="">
			<!-- <label>
			<i class="bi bi-lightning-fill"></i>
				popular
				
			</label> -->
		</div>
		<div class="blog_box_title">
			<div class="blog-label justify-content-between align-items-center d-flex">
				<span class="time">
					<i class="bi bi-clock"></i>
					<span><?= $formatted_date ?></span>
				</span>
				<span class="super">
				<i class="bi bi-person"></i>
				<span><?= get_the_author() ?></span>
				</span>
			</div>
			<a href="<?= the_permalink() ?>">
			<h3><?= get_the_title() ?></h3>
			</a>
			<a href="<?= the_permalink() ?>" class="blog-button">
			Read More
			<i class="bi bi-arrow-right"></i>
			</a>
		</div>
	</div>
</article><!-- /#post-<?php the_ID(); ?> -->
