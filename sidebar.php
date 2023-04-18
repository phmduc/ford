<?php
/**
 * Sidebar Template
 */

if ( is_active_sidebar( 'primary_widget_area' ) || is_archive() || is_single() ) :
?>
<div id="sidebar" class="col-lg-3  w-blog order-md-first col-sm-12 oder-sm-last">
	<div class="sidebar-sticky">
		<div class="sidebar-box-1">
			<div class="box-1-header">
				DANH MỤC SẢN PHẨM
			</div>
			<div class="box-1-content">
				<ul>
					<li><a href="">Ford Territory</a></li>
					<li><a href="">Ford Everest</a></li>
					<li><a href="">Ford Ranger</a></li>
					<li><a href="">Ford Transit</a></li>
					<li><a href="">Ford Explorer</a></li>
					<li><a href="">Ford Ranger Raptor</a></li>
				</ul>
			</div>
		</div>

		<div class="sidebar-box-2">
			<div class="box-2-header">
				hỗ trợ trực tuyến
			</div>
			<div class="box-2-content">
				<ul>
					<li>
						<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/telesale.webp' ?>" alt="">
						<p>Tư vấn mua xe trả góp - 0934.668.808</p>
					</li>
					<li>
						<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/zalo.webp' ?>" alt="">
						<p>Chat Zalo - 0934.668.808</p>
					</li>
					<li>
						<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/email.webp' ?>" alt="">
						<p>Email báo giá - lvkhoa@fordthanglong.com.vn</p>
					</li>
				</ul>
			</div>
		</div>

		<div class="sidebar-box-3">
			<div class="box-3-header">
				tin tức
			</div>
			<div class="box-3-content">
				<div class="items-box-3">
					<div class="items-img">
						<a href="">
							<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt1.webp' ?>" alt="">
						</a>
					</div>
					<div class="items-text">
						<a href="">
						Bảng giá xe ô tô Ford tháng 7/2022: Thêm Everest Thế Hệ Mới cùng loạt ưu đãi
						</a>
					</div>	
				</div>
				<div class="items-box-3">
					<div class="items-img">
						<a href="">
							<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt2.webp' ?>" alt="">
						</a>
					</div>
					<div class="items-text">
						<a href="">
						Vui Hè Sôi Động, Nhân Đôi Ưu Đãi Khi Mua Xe Ford - Ưu Đãi Đến 110 Triệu
						</a>
					</div>	
				</div>
				<div class="items-box-3">
					<div class="items-img">
						<a href="">
							<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt3.webp' ?>" alt="">
						</a>
					</div>
					<div class="items-text">
						<a href="">
						Cập Nhật: Bảng giá ô tô Ford tháng 4/2019 + Chi phí lăn bánh
						</a>
					</div>	
				</div>
				<div class="items-box-3">
					<div class="items-img">
						<a href="">
							<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt4.webp' ?>" alt="">
						</a>
					</div>
					<div class="items-text">
						<a href="">
						Xe bán tải tăng lệ phí trước bạ gấp 3 lần từ ngày 10/4
						</a>
					</div>	
				</div>
				<div class="items-box-3">
					<div class="items-img">
						<a href="">
							<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt5.webp' ?>" alt="">
						</a>
					</div>
					<div class="items-text">
						<a href="">
						Những kinh phí bạn phải trả khi mua xe ô tô mới tại Ford Thăng Long
						</a>
					</div>	
				</div>
				<div class="items-box-3">
					<div class="items-img">
						<a href="">
							<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt6.webp' ?>" alt="">
						</a>
					</div>
					<div class="items-text">
						<a href="">
						Mua xe Ford trả góp lãi suất thấp
						</a>
					</div>	
				</div>
			</div>
		</div>

		<div class="sidebar-box-4">
			<div class="box-4-header">
				dòng xe bán chạy
			</div>
			<div class="box-4-content">
				<div class="box-4-item">
					<div class="item">
						<div class="img">
							<a href="">
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/bc1.webp' ?>" alt="">
							</a>
						</div>
						<div class="name">
							<a href="">
								Ford Everest Titanium+ 2.0L AT 4WD 2023
							</a>
						</div>
						<div class="price">
							<span>1,468,000,000 đ</span>
							<a href="">mua ngay</a>
						</div>
					</div>
					<div class="item">
						<div class="img">
							<a href="">
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/bc2.webp' ?>" alt="">
							</a>
						</div>
						<div class="name">
							<a href="">
								Ford Everest Titanium+ 2.0L AT 4WD 2023
							</a>
						</div>
						<div class="price">
							<span>1,468,000,000 đ</span>
							<a href="">mua ngay</a>
						</div>
					</div>
					<div class="item">
						<div class="img">
							<a href="">
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/bc3.webp' ?>" alt="">
							</a>
						</div>
						<div class="name">
							<a href="">
								Ford Everest Titanium+ 2.0L AT 4WD 2023						
							</a>
						</div>
						<div class="price">
							<span>1,468,000,000 đ</span>
							<a href="">mua ngay</a>
						</div>
					</div>
					<div class="item">
						<div class="img">
							<a href="">
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/bc4.webp' ?>" alt="">
							</a>
						</div>
						<div class="name">
							<a href="">
								Ford Everest Titanium+ 2.0L AT 4WD 2023
							</a>
						</div>
						<div class="price">
							<span>1,468,000,000 đ</span>
							<a href="">mua ngay</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sidebar-box-5">
			<div class="box-5-header">
				Fanpage Facebook
			</div>
			<div class="box-5-content">
				<iframe name="f45c2c84ff3478" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df62b79588d326%26domain%3Dfordlangha.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ffordlangha.vn%252Ff8ccf095e468%26relation%3Dparent.parent&amp;container_width=254&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FFordVietnam%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=&amp;width=" style="border: none; visibility: visible; width: 254px; height: 130px;" class=""></iframe>
			</div>
		</div>

		<div class="sidebar-box-6">
			<div class="box-6-header">
				Liên kết website
			</div>
			<div class="box-6-content">
				<a href="">
					<i class="bi bi-chevron-right"></i> Ford Láng Hạ - Thăng Long
				</a>
			</div>
		</div>

		<div class="sidebar-box-7">
			<div class="box-7-header">
				thống kê
			</div>
			<div class="box-7-content">
				<ul>
					<li>
						<span>Đang online</span>
						<span>2</span>
					</li>
					<li>
						<span>Hôm nay</span>
						<span>5</span>
					</li>
					<li>
						<span>Hôm qua</span>
						<span>38</span>
					</li>
					<li>
						<span>trong tuần</span>
						<span>35</span>
					</li>
					<li>
						<span>Trong tháng</span>
						<span>1,876</span>
					</li>
					<li>
						<span>Tổng cộng</span>
						<span>266,350</span>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="sidebar-mobi">
		<div class="accordion" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingOne">
					<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<div class="box-1-header">
							DANH MỤC SẢN PHẨM
						</div>
						<div class="view">
							<div class="show">
								<i class="bi bi-plus"></i>
							</div>
							<div class="hide">
								<i class="bi bi-dash"></i>
							</div>
						</div>
					</button>
				</div>

				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
					<div class="box-1-content">
						<ul>
							<li><a href="">Ford Territory</a></li>
							<li><a href="">Ford Everest</a></li>
							<li><a href="">Ford Ranger</a></li>
							<li><a href="">Ford Transit</a></li>
							<li><a href="">Ford Explorer</a></li>
							<li><a href="">Ford Ranger Raptor</a></li>
						</ul>
					</div>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingTwo">
					<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<div class="box-2-header">
							Hổ trợ trực tuyến
						</div>
						<div class="view">
							<div class="show">
								<i class="bi bi-plus"></i>
							</div>
							<div class="hide">
								<i class="bi bi-dash"></i>
							</div>
						</div>
					</button>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="card-body">
					<div class="box-2-content">
						<ul>
							<li>
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/telesale.webp' ?>" alt="">
								<p>Tư vấn mua xe trả góp - 0934.668.808</p>
							</li>
							<li>
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/zalo.webp' ?>" alt="">
								<p>Chat Zalo - 0934.668.808</p>
							</li>
							<li>
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/email.webp' ?>" alt="">
								<p>Email báo giá - lvkhoa@fordthanglong.com.vn</p>
							</li>
						</ul>
					</div>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingThree">
					<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
						<div class="box-3-header">
							tin tức
						</div>
						<div class="view">
							<div class="show">
								<i class="bi bi-plus"></i>
							</div>
							<div class="hide">
								<i class="bi bi-dash"></i>
							</div>
						</div>
					</button>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				<div class="card-body">
					<div class="box-3-content">
						<div class="items-box-3">
							<div class="items-img">
								<a href="">
									<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt1.webp' ?>" alt="">
								</a>
							</div>
							<div class="items-text">
								<a href="">
								Bảng giá xe ô tô Ford tháng 7/2022: Thêm Everest Thế Hệ Mới cùng loạt ưu đãi
								</a>
							</div>	
						</div>
						<div class="items-box-3">
							<div class="items-img">
								<a href="">
									<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt2.webp' ?>" alt="">
								</a>
							</div>
							<div class="items-text">
								<a href="">
								Vui Hè Sôi Động, Nhân Đôi Ưu Đãi Khi Mua Xe Ford - Ưu Đãi Đến 110 Triệu
								</a>
							</div>	
						</div>
						<div class="items-box-3">
							<div class="items-img">
								<a href="">
									<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt3.webp' ?>" alt="">
								</a>
							</div>
							<div class="items-text">
								<a href="">
								Cập Nhật: Bảng giá ô tô Ford tháng 4/2019 + Chi phí lăn bánh
								</a>
							</div>	
						</div>
						<div class="items-box-3">
							<div class="items-img">
								<a href="">
									<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt4.webp' ?>" alt="">
								</a>
							</div>
							<div class="items-text">
								<a href="">
								Xe bán tải tăng lệ phí trước bạ gấp 3 lần từ ngày 10/4
								</a>
							</div>	
						</div>
						<div class="items-box-3">
							<div class="items-img">
								<a href="">
									<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt5.webp' ?>" alt="">
								</a>
							</div>
							<div class="items-text">
								<a href="">
								Những kinh phí bạn phải trả khi mua xe ô tô mới tại Ford Thăng Long
								</a>
							</div>	
						</div>
						<div class="items-box-3">
							<div class="items-img">
								<a href="">
									<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tt6.webp' ?>" alt="">
								</a>
							</div>
							<div class="items-text">
								<a href="">
								Mua xe Ford trả góp lãi suất thấp
								</a>
							</div>	
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingFour">
					<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
						<div class="box-4-header">
							Dòng xe bán chạy
						</div>
						<div class="view">
							<div class="show">
								<i class="bi bi-plus"></i>
							</div>
							<div class="hide">
								<i class="bi bi-dash"></i>
							</div>
						</div>
					</button>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				<div class="card-body">
					<div class="box-4-content">
						<div class="box-4-item">
							<div class="item">
								<div class="img">
									<a href="">
										<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/bc1.webp' ?>" alt="">
									</a>
								</div>
								<div class="name">
									<a href="">
										Ford Everest Titanium+ 2.0L AT 4WD 2023
									</a>
								</div>
								<div class="price">
									<span>2,468,000,000 đ</span>
									<a href="">mua ngay</a>
								</div>
							</div>
							<div class="item">
								<div class="img">
									<a href="">
										<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/bc2.webp' ?>" alt="">
									</a>
								</div>
								<div class="name">
									<a href="">
										Ford Everest Titanium+ 2.0L AT 4WD 2023
									</a>
								</div>
								<div class="price">
									<span>1,468,000,000 đ</span>
									<a href="">mua ngay</a>
								</div>
							</div>
							<div class="item">
								<div class="img">
									<a href="">
										<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/bc3.webp' ?>" alt="">
									</a>
								</div>
								<div class="name">
									<a href="">
										Ford Everest Titanium+ 2.0L AT 4WD 2023						
									</a>
								</div>
								<div class="price">
									<span>1,468,000,000 đ</span>
									<a href="">mua ngay</a>
								</div>
							</div>
							<div class="item">
								<div class="img">
									<a href="">
										<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/bc4.webp' ?>" alt="">
									</a>
								</div>
								<div class="name">
									<a href="">
										Ford Everest Titanium+ 2.0L AT 4WD 2023
									</a>
								</div>
								<div class="price">
									<span>1,468,000,000 đ</span>
									<a href="">mua ngay</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingFive">
					<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
						<div class="box-5-header">
							Fanpage Facebook
						</div>
						<div class="view">
							<div class="show">
								<i class="bi bi-plus"></i>
							</div>
							<div class="hide">
								<i class="bi bi-dash"></i>
							</div>
						</div>
					</button>
				</div>
				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
				<div class="card-body">
					<div class="box-5-content">
						<iframe name="f45c2c84ff3478" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df62b79588d326%26domain%3Dfordlangha.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ffordlangha.vn%252Ff8ccf095e468%26relation%3Dparent.parent&amp;container_width=254&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FFordVietnam%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=&amp;width=" style="border: none; visibility: visible; width: 254px; height: 130px;" class=""></iframe>
					</div>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingSix">
					<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
						<div class="box-6-header">
							Liên kết website
						</div>
						<div class="view">
							<div class="show">
								<i class="bi bi-plus"></i>
							</div>
							<div class="hide">
								<i class="bi bi-dash"></i>
							</div>
						</div>
					</button>
				</div>
				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
				<div class="card-body">
					<div class="box-6-content">
						<a href="">
							<i class="bi bi-chevron-right"></i> Ford Láng Hạ - Thăng Long
						</a>
					</div>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingSeven">
					<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
						<div class="box-7-header">
							thống kê
						</div>
						<div class="view">
							<div class="show">
								<i class="bi bi-plus"></i>
							</div>
							<div class="hide">
								<i class="bi bi-dash"></i>
							</div>
						</div>
					</button>
				</div>
				<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
				<div class="card-body">
					<div class="box-7-content">
						<ul>
							<li>
								<span>Đang online</span>
								<span>2</span>
							</li>
							<li>
								<span>Hôm nay</span>
								<span>5</span>
							</li>
							<li>
								<span>Hôm qua</span>
								<span>38</span>
							</li>
							<li>
								<span>trong tuần</span>
								<span>35</span>
							</li>
							<li>
								<span>Trong tháng</span>
								<span>1,876</span>
							</li>
							<li>
								<span>Tổng cộng</span>
								<span>266,350</span>
							</li>
						</ul>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /#sidebar -->
<script>

</script>
<?php
	endif;
?>
