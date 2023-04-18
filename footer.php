			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page)
				if ( is_single() || is_archive() ||  (is_page_template('page-fullHasBanner.php')) || (is_page_template('page-BlogDetail.php')) || (is_page_template('page-Blogs.php')) || (is_page_template('page-Contact.php')) || (is_page_template('page-AboutUs.php')) ||  (is_page_template('page-ProductDetail.php')) || (is_page_template('page-Products.php')) || (is_page_template('page-Search.php')) ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer">	
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h4>FORD THĂNG LONG</h4>
						<ul class="list">
							<li>Showroom: 105 Láng Hạ, Đống Đa, Hà Nội</li>
							<li><strong>Hotline: 0934.668.808 - Mr.Khoa</strong></li>
							<li>Email: <a href="#">lvkhoa@fordthanglong.com.vn</a></li>
							<li>Website: <a href="#"> www.fordlangha.vn</a></li>
						</ul>
						<div class="socials d-flex">
							<a href="#" class="icon"><i class="bi bi-facebook"></i></a>
							<a href="#" class="icon"><i class="bi bi-google"></i></a>
							<a href="#" class="icon"><i class="bi bi-rss-fill"></i></a>
							<a href="#" class="icon"><i class="bi bi-diagram-3-fill"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h4 class="title" data-toggle="collapse" data-target="#collapseTitleOne" aria-expanded="false">VỀ FORD THĂNG LONG</h4>
						<ul class="aboutFord collapse"  id="collapseTitleOne">
							<li><a href="#">Giới thiệu</a></li>
							<li><a href="#">Bảng giá xe Ford 2020</a></li>
							<li><a href="#">Dịch vụ bảo hành xe tại Ford</a></li>
							<li><a href="#">Tin tức về Ford Việt Nam</a></li>
							<li><a href="#">Liên hệ để được tư vấn</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6">
						<h4 class="title" data-toggle="collapse" data-target="#collapseTitleTwo" aria-expanded="false">DANH MỤC XE FORD</h4>
						<ul class="categoryFord collapse"  id="collapseTitleTwo">
							<li><a href="#">Ford EcoSport</a></li>
							<li><a href="#">Ford Everest</a></li>
							<li><a href="#">Ford Ranger</a></li>
							<li><a href="#">Ford Ranger Raptor</a></li>
							<li><a href="#">Ford Explorer</a></li>
							<li><a href="#">Ford Transit</a></li>
						</ul>
					</div>
					<div class="copyright text-center">
						Copyright© 2021
					</div>
				</div>
			</div>
			<!-- <section class="align-full w-footer py-4 bg-light">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-2">
							<img src="<?= ($logo = get_field('logo','option')) ? $logo : '' ?>" alt="<?= bloginfo('name') ?>" class="img-fluid f-logo">
						</div>
						<div class="col-lg-10">
							<?php 
							if ( has_nav_menu( 'footer-menu' ) ) : 
								wp_nav_menu(
									array(
										'theme_location'  => 'footer-menu',
										'container'       => 'nav',
										'container_class' => '',
										'fallback_cb'     => '',
										'items_wrap'      => '<ul class="menu nav justify-content-center justify-content-lg-end">%3$s</ul>',
										//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
										'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
									)
								);
							endif; 
							?>
						</div>
					</div>
					<div class="row mt-0 mt-lg-3">
						<div class="col-lg-8">
							<div class="comp-infos text-center text-lg-left">
								<?= ($cty_name = get_field('cty_name','option')) ? '<p class="name">'.$cty_name.'</p>' : '' ?>
								<?= ($cty_add = get_field('cty_add','option')) ? '<p class="add">'.$cty_add.'</p>' : '' ?>
								<?= ($cert = get_field('cty_cert','option')['cert']) ? '<p class="cert">'.$cert.'</p>' : '' ?>
								<?= ($where_cert = get_field('cty_cert','option')['where_cert']) ? '<p class="cert_local">'.$where_cert.'</p>' : '' ?>
							</div>
						</div>
						<div class="col-lg-4">
							<?php 
							$certs = get_field('e-cert','option'); 
							if($certs) :
							?>
							<ul class="e-certs list-unstyled d-flex align-items-center justify-content-center justify-content-lg-end mb-0">
								<?php foreach ($certs as $item) : ?>
									<?php if($item['icon']) : ?>
									<li>
										<a target="_blank" href="<?= ($item['link']) ? esc_attr( $item['link'] ) : '' ?>" title="<?= ($item['icon']['title']) ? esc_attr( $item['icon']['title'] ) : '' ?>" class="d-block">
											<img src="<?= ($item['icon']['url']) ? esc_attr( $item['icon']['url'] ) : '' ?>" alt="<?= ($item['icon']['alt']) ? esc_attr( $item['icon']['alt'] ) : '' ?>" class="img-fluid">
										</a>
									</li>
									<?php endif; ?>
								<?php endforeach; ?>
							</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
			<section class="align-full copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<p class="m-0 text-center text-lg-left mt-3 mt-lg-0"><?php printf( esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'weable' ), date_i18n( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?></p>
						</div>
						<div class="col-lg-6">
							<ul class="w-socials d-flex align-items-center list-unstyled mb-0 justify-content-center justify-content-lg-end">
								<?= ($fanpage = get_field('fanpage','option')) ? '<li class="fb"><a target="_blank" title="Fanpage của công ty TNHH giải pháp công nghệ Weable" href="'.$fanpage.'"><i class="bi bi-facebook"></i></a></li>' : '' ?>
								<?= ($twitter = get_field('twitter','option')) ? '<li class="twitter"><a target="_blank" title="Twitter của công ty TNHH giải pháp công nghệ Weable" href="'.$twitter.'"><i class="bi bi-twitter"></i></a></li>' : '' ?>
								<?= ($linkedin = get_field('linkedin','option')) ? '<li class="linkedin"><a target="_blank" title="Linkedin của công ty TNHH giải pháp công nghệ Weable" href="'.$linkedin.'"><i class="bi bi-linkedin"></i></a></li>' : '' ?>
								<?= ($youtube = get_field('youtube','option')) ? '<li class="youtube"><a target="_blank" title="Youtube của công ty TNHH giải pháp công nghệ Weable" href="'.$youtube.'"><i class="bi bi-youtube"></i></a></li>' : '' ?>
								<?= ($pinterest = get_field('pinterest','option')) ? '<li class="pinterest"><a target="_blank" title="Pinterest của công ty TNHH giải pháp công nghệ Weable" href="'.$pinterest.'"><i class="bi bi-pinterest"></i></a></li>' : '' ?>
								<?= ($instagram = get_field('instagram','option')) ? '<li class="instagram"><a target="_blank" title="Instagram của công ty TNHH giải pháp công nghệ Weable" href="'.$instagram.'"><i class="bi bi-instagram"></i></a></li>' : '' ?>
								<?= ($git = get_field('git','option')) ? '<li class="git"><a target="_blank" title="Kho lưu trữ source code dự án của công ty TNHH giải pháp công nghệ Weable" href="'.$git.'"><i class="bi bi-github"></i></a></li>' : '' ?>
							</ul>
						</div>
					</div>
				</div>
			</section> -->
		</footer>
	</div>
	<?php
		wp_footer();
	?>
</body>
</html>
