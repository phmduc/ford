<?php
/**
 * The template for displaying content in the single.php template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
			$date = get_the_date();
			$tags = get_the_tags();
			$formatted_date = date( 'j M, Y', strtotime( $date ) );
	?>
	<div class="w-blog">
		<div class="row">
			<div class="col-lg-12">
				<div class="blog-detail">
					<div class="blog-image">
						<?= get_the_post_thumbnail() ?>
						<div class="text-banner">
							<div class="blog-ingredient">
								<?php foreach($tags as $tag) : ?>
								<span><?= $tag -> name ?></span><i class="bi bi-dash-lg mx-2"></i>
								<?php endforeach; ?>
							
							</div>
							<h2>
								<?= get_the_title() ?>
							</h2>
							<div class="contain-comment-list">
								<span><span> <i class="bi bi-person"></i></span>
									<span><?= get_the_author() ?></span></span>
								<span><span> <i class="bi bi-calendar4"></i></span>
									<span><?= $formatted_date ?></span></span>
								<span><span> <i class="bi bi-chat-left"></i></span>
									<span><?= get_comments_number( ) ?> Comment</span></span>
							</div>
						</div>
					</div>
					<div class="content-details">
						<?= the_content() ?>
					</div>
					
					<section class="blog-comment">
						<h3>Comments</h3>
						<div class="comment-container">
							<div class="comments">
								<div class="comment-text">
									<div class="comment-image ">
										<img src="https://rin.webmau.net/wp-content/uploads/2023/04/1-1.jpg" alt="avata">
									</div>
									<div>
										<h6 class="comment-date">30 Jan, 2022</h6>
										<h5 class="comment-name">Glenn Greer</h5>
										<p class="comment-desc">"This proposal is a win-win
											situation which will cause a
											stellar paradigm shift, and produce a multi-fold
											increase in
											deliverables a better understanding"</p>
									</div>
								</div>
								<div class="comment-reply">
									<span><i class="bi bi-reply-fill"></i></span><span>Reply</span>
								</div>
							</div>
	
							<div class="comments">
								<div class="comment-text">
									<div class="comment-image ">
										<img src="https://rin.webmau.net/wp-content/uploads/2023/04/1-1.jpg" alt="avata">
									</div>
									<div>
										<h6>30 Jan, 2022</h6>
										<h5>Glenn Greer</h5>
										<p>"This proposal is a win-win situation which will cause a
											stellar paradigm shift, and produce a multi-fold
											increase in
											deliverables a better understanding"</p>
									</div>
								</div>
								<div class="comment-reply">
									<span><i class="bi bi-reply-fill"></i></span><span>Reply</span>
								</div>
							</div>
							<div class="reply">
								<div class="comments">
									<div class="comment-text">
										<div class="comment-image reply-image">
											<img src="https://rin.webmau.net/wp-content/uploads/2023/04/1-1.jpg" alt="avata">
										</div>
										<div>
											<h6>30 Jan, 2022</h6>
											<h5>Glenn Greer</h5>
											<p>"This proposal is a win-win situation which will
												cause a
												stellar paradigm shift, and produce a multi-fold
												increase in
												deliverables a better understanding"</p>
										</div>
									</div>
									<div class="comment-reply">
										<span><i class="bi bi-reply-fill"></i></span><span>Reply</span>
									</div>
								</div>
							</div>
						</div>
						<div class="post-comment">
	
						</div>
					</section>
					<section class="leave-comment">
						<h3>Leave Comment</h3>
						<p>Your email address will not be published. Required fields are marked</p>
						<form action="" id="form" class="form-container">
	
							<div class="input-lists">
								<input type="text" class="input-text" placeholder="Full Name">
								<input type="text" class="input-text" placeholder="Enter Email Address">
								<input type="text" class="input-text" placeholder="Enter URL">
							</div>
	
							<textarea name="" id="" cols="30" rows="10" class="input-textarea" placeholder="Comments"></textarea>
	
							<div class="input-checkbox">
								<input type="checkbox"> <span>Save my name, email, and website
									in this browser for the next time I comment.</span>
							</div>
							<div class="btn-post-comment">
								<button>Post Comment</button>
							</div>
	
						</form>
					</section>
				</div>
			</div>
		</div>
	</div>
</article><!-- /#post-<?php the_ID(); ?> -->
