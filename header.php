<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-white bg-white' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="sr-only sr-only-focusable"><?php esc_html_e( 'Skip to main content', 'weable' ); ?></a>

<div id="wrapper">
	<header>
		<div class="top">
			<div class="container px-0">
			<img src="/wp-content/uploads/2023/04/banner-top-ford-thang-long-1117507j23061.webp" alt="">

			</div>
		</div>
		<nav class="navbar-top">
			<div class="container px-0">
				<div class="navbar-link d-flex justify-content-between align-items-center">
					<button type="button" class="btn btn-menu d-lg-none " data-toggle="collapse" data-target="#collapse-menu" aria-expanded="false"><i class="bi bi-list"></i></button>
					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav links flex-row mr-auto',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);

						if ( '1' === $search_enabled ) :
					?>
					<!-- <ul class="links d-lg-flex d-none">
						<li><a href="#" class="nav-link">Trang chủ</a></li>
						<li><a href="#" class="nav-link">Giới thiệu</a></li>
						<li class="dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sản phẩm</a>
							<ul class="listProduct dropdown-menu">
								<li><a href="#">Ford Territory</a></li>
								<li><a href="#">Ford Everest</a></li>
								<li><a href="#">Ford Ranger</a></li>
								<li><a href="#">Ford Transit</a></li>
								<li><a href="#">Ford Explorer</a></li>
								<li><a href="#">Ford Ranger Raptor</a></li>
							</ul>
						</li>
						<li><a href="#" class="nav-link">Tin tức</a></li>
						<li><a href="#" class="nav-link">Liên hệ</a></li>
					</ul> -->
					<form class="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm..."
                                aria-describedby="basic1">
                            <div class="input-group-prepend" style="cursor: pointer;">
                                <div class="input-group-text" id="basic1"><i class="bi bi-search"></i></div>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="collapse collapseMenu d-lg-none"  id="collapse-menu">
				
				<ul class="links d-flex">
				
					<li><a href="#" class="nav-link">Trang chủ</a></li>
					<li><a href="#" class="nav-link">Giới thiệu</a></li>
					<li class="collapse-list">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="collapse" data-target="#collapseList" aria-expanded="false">Sản phẩm</a>
						<ul class="listProduct collapse" id="collapseList">
							<li><a href="#">Ford Territory</a></li>
							<li><a href="#">Ford Everest</a></li>
							<li><a href="#">Ford Ranger</a></li>
							<li><a href="#">Ford Transit</a></li>
							<li><a href="#">Ford Explorer</a></li>
							<li><a href="#">Ford Ranger Raptor</a></li>
						</ul>
					</li>
					<li><a href="#" class="nav-link">Tin tức</a></li>
					<li><a href="#" class="nav-link">Liên hệ</a></li>
				</ul>
			</div>
		</div>
		<!-- <nav id="header" class="bg-light py-3 navbar navbar-expand-md <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a> -->

				<!-- <div id="navbar" class="navbar d-none d-lg-flex p-0">
					
							<form class="form-inline search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="input-group">
									<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'weable' ); ?>" title="<?php esc_attr_e( 'Search', 'weable' ); ?>" />
									<div class="input-group-append">
										<button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'weable' ); ?></button>
									</div>
								</div>
							</form>
					<?php
						endif;
					?>
				</div> -->

				<!-- <div class="header-btns d-none d-lg-block" role="group">
					<a href="" class="btn btn-secondary btn-sm">
						Giỏ hàng <span class="badge badge-light">3</span>
					</a>
					<a href="" class="btn btn-danger btn-sm"><i class="bi bi-telephone"></i> 0842 94 3333</a>
					<a href="" class="btn btn-primary btn-sm">Liên hệ</a>
				</div>

				<div class="mobile-right d-flex d-lg-none align-items-center">
					<a href="" class="btn btn-secondary btn-sm d-inline-block d-lg-none mr-3">
						Giỏ hàng <span class="badge badge-light">3</span>
					</a>
					<div class="hamburger-menu d-block d-lg-none" id="hamburger-menu">
						<div class="menu-bar1"></div>
						<div class="menu-bar2"></div>
						<div class="menu-bar3"></div>
					</div>
				</div> -->
				<!-- /.Icon menu mobie & mobile cart item -->

			<!-- </div> -->
			<!-- /.container -->
		<!-- </nav> -->
		<!-- /#header -->
		
		<!-- <div class="m-menu d-lg-none d-block">
			<?php 
				wp_nav_menu(
					array(
						'theme_location' => 'mobile-menu',
						'container'      => '',
						'menu_class'     => 'navbar-nav mr-auto',
						'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
						'walker'         => new WP_Bootstrap_Navwalker(),
					)
				);
			?>
		</div> -->
		<!-- /.Mobile menu container -->		
	</header>

	<main id="main" class="<?= (is_page_template('page-full.php')) ? 'w-builder' : 'container' ?>" <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 57px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
			<?php if((is_page_template('page-fullHasBanner.php' ))) : ?>
				<div class="w-banner">
					<div class="banner-item">
						<div class="items">
							<a href="">
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/banner-ford-5-2169425j23061.webp' ?>" alt="">
							</a>
						</div>
						<div class="items">
							<a href="">
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/banner-ford-6-2169424j23061.webp' ?>" alt="">
							</a>
						</div>
						<div class="items">
							<a href="">
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/banner-ford-7-2169426j23061.webp' ?>" alt="">
							</a>
						</div>
						<div class="items">
							<a href="">
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/banner-ford-1-2169421j23061.webp' ?>" alt="">
							</a>
						</div>
						<div class="items">
							<a href="">
								<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/banner-ford-3-2169423j23061.webp' ?>" alt="">
							</a>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() || (is_page_template('page-BlogDetail.php')) || (is_page_template('page-fullHasBanner.php'))  || (is_page_template('page-Blogs.php')) || (is_page_template('page-Contact.php')) || (is_page_template('page-AboutUs.php')) ||  (is_page_template('page-ProductDetail.php')) || (is_page_template('page-Products.php')) || (is_page_template('page-Search.php')) ) :
		?>
			
			<div class="row">
				<div class="col-lg-9 ">
		<?php
			endif;
		?>
