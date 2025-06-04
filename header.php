<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'marra' ); ?></a>

<div id="wrapper">
	<?php if( function_exists('get_field') && get_field('top_banner_active', 'option') && get_field('top_banner_text', 'option') ): ?>
	<div class="top-banner" style="background-color: rgba(210, 221, 251, 0.80); color: #411512; text-align: center; padding: 10px 0; height: 50px;">
		<div class="container">
			<span class="top-banner-text"><?php echo esc_html(get_field('top_banner_text', 'option')); ?></span>
		</div>
	</div>
	<?php endif; ?>
	
	<header>
		<nav id="header" class="navbar navbar-expand-md <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>" style="background: transparent; padding: 26px 100px;">
			<div class="container">
				<div class="navbar-collapse d-flex justify-content-between align-items-center">
					<?php
						// Get the menu location
						$menu_locations = get_nav_menu_locations();
						$menu_id = $menu_locations['main-menu'];
						
						if ($menu_id) {
							$menu_items = wp_get_nav_menu_items($menu_id);
							
							if ($menu_items) {
								$total_items = count($menu_items);
								$half_point = ceil($total_items / 2);
								
								// Left Menu
								echo '<div class="navbar-nav me-auto">';
								echo '<ul class="navbar-nav">';
								for ($i = 0; $i < $half_point; $i++) {
									$item = $menu_items[$i];
									echo '<li class="nav-item">';
									echo '<a class="nav-link" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
									echo '</li>';
								}
								echo '</ul>';
								echo '</div>';

								// Logo
								echo '<a class="navbar-brand mx-auto" href="' . esc_url(home_url()) . '" title="' . esc_attr(get_bloginfo('name', 'display')) . '" rel="home">';
								$header_logo = get_theme_mod('header_logo');
								if (!empty($header_logo)) {
									echo '<img src="' . esc_url($header_logo) . '" alt="' . esc_attr(get_bloginfo('name', 'display')) . '" />';
								} else {
									echo '<svg xmlns="http://www.w3.org/2000/svg" width="156" height="33" viewBox="0 0 156 33" fill="none">
									<g clip-path="url(#clip0_569_318)">
									<path d="M62.9504 29.3674L51.5428 0.845245L47.1033 3.00821C47.8411 3.57575 48.0618 4.55949 48.1249 5.1901C48.1627 5.53693 48.106 5.88376 47.9673 6.20537L38.0983 28.8881C37.4551 30.3827 36.4146 31.6817 35.3426 32.6276V32.9555H40.6333V32.6213C39.3974 31.5367 38.5397 30.1998 39.4541 28.1188L41.3775 23.7109H57.0605L58.8325 28.1188C59.5325 29.8719 59.0974 31.3475 57.5902 32.615V32.9618H59.5262H64.0791H65.5421V32.6339C64.5016 31.7763 63.5431 30.8556 62.9504 29.3674ZM41.8 22.7713L49.5564 5.01983L56.6885 22.7713H41.8Z" fill="#411512"/>
									<path d="M31.5022 28.7304V8.31782V5.65668C31.5022 4.09278 32.3094 3.31083 33.0346 2.6424H31.3383H31.0986H27.1763L16.9858 25.3504L6.68803 2.6424H2.84135H2.77199H0.899098C1.62429 3.31083 2.43146 4.09278 2.43146 5.65668V10.7961V29.1529C2.31165 30.5781 1.44142 31.833 0.0793152 32.5834V32.9681H5.55294V32.5897C4.05211 31.751 3.44043 30.7231 3.30169 29.4556V4.71077H3.71789L15.0813 29.8151H16.3173L27.315 4.71077H27.7817V28.9007C27.7375 30.37 27.1132 31.4672 26.0097 32.5834V32.9681H33.2931V32.5897C32.1455 31.4294 31.5085 30.3006 31.5085 28.7367L31.5022 28.7304Z" fill="#411512"/>
									<path d="M152.502 29.3674L141.088 0.845245L136.649 3.00821C137.387 3.57575 137.607 4.55949 137.67 5.1901C137.708 5.53693 137.652 5.88376 137.513 6.20537L130.305 22.7713V22.7839L127.65 28.8881C127.007 30.3827 125.966 31.6817 124.894 32.6276V32.9555H130.185V32.6213C128.949 31.5367 128.092 30.1998 129.006 28.1188L130.929 23.7109H146.612L148.384 28.1188C149.084 29.8719 148.649 31.3475 147.142 32.615V32.9618H149.078H153.631H155.094V32.6339C154.053 31.7763 153.095 30.8556 152.502 29.3674ZM131.345 22.7713L139.102 5.01983L146.234 22.7713H131.345Z" fill="#411512"/>
									<path d="M91.2392 29.651L84.2395 17.7326C89.1835 17.1273 92.0401 14.5229 92.0401 10.4429C92.0401 5.98452 87.6637 2.63602 82.2216 2.63602H68.5438C69.2438 3.30446 70.0194 4.0864 70.0194 5.6503V29.4051C70.0321 30.8933 69.6978 31.978 68.2916 32.5518V32.9554H75.3922V32.5518C74.2256 32.0221 73.6769 30.8239 73.658 29.2979V20.192C74.7427 19.4037 76.193 18.4137 80.3739 17.9849L88.0421 31.0951C88.4583 31.9401 88.3511 32.2113 87.7394 32.6212V32.9491H89.1267H93.1941H94.3922V32.3815C93.1878 31.9401 92.5257 31.5933 91.2455 29.6384L91.2392 29.651ZM73.6517 19.1641V3.46211H81.9063C85.9169 3.46211 88.3258 6.57098 88.3258 10.5375C88.3258 12.8392 87.0772 15.04 85.0341 16.1246C84.6053 16.3516 84.1576 16.5282 83.6972 16.6606C82.6 16.9822 81.4397 17.0894 80.3046 17.2092C78.6839 17.3732 77.0696 17.6254 75.5435 18.2119C74.9255 18.4515 74.213 18.811 73.6454 19.1704L73.6517 19.1641Z" fill="#411512"/>
									<path d="M120.701 29.6511L113.701 17.739C118.645 17.1336 121.502 14.5293 121.502 10.4493C121.502 5.99089 117.125 2.6424 111.683 2.6424H98.0056C98.7056 3.31083 99.4812 4.09278 99.4812 5.65668V29.4115C99.4938 30.8997 99.1596 31.9843 97.7534 32.5582V32.9618H104.854V32.5582C103.687 32.0285 103.139 30.8303 103.12 29.3043V20.1984C104.204 19.4101 105.655 18.4201 109.836 17.9913L117.498 31.1015C117.914 31.9465 117.807 32.2177 117.195 32.6275V32.9555H118.582H122.65H123.848V32.3879C122.643 31.9465 121.981 31.5997 120.701 29.6448V29.6511ZM103.113 19.1642V3.46218H111.368C115.379 3.46218 117.788 6.57105 117.788 10.5375C117.788 12.8392 116.539 15.04 114.496 16.1247C114.067 16.3517 113.619 16.5283 113.159 16.6607C112.062 16.9823 110.901 17.0895 109.766 17.2093C108.146 17.3733 106.531 17.6255 105.005 18.212C104.387 18.4516 103.675 18.811 103.107 19.1705L103.113 19.1642Z" fill="#411512"/>
									</g>
									<defs>
									<clipPath id="clip0_569_318">
									<rect width="155.015" height="32.1166" fill="white" transform="translate(0.0793457 0.845184)"/>
									</clipPath>
									</defs>
									</svg>';
								}
								echo '</a>';

								// Right Menu
								echo '<div class="navbar-nav ms-auto">';
								echo '<ul class="navbar-nav">';
								for ($i = $half_point; $i < $total_items; $i++) {
									$item = $menu_items[$i];
									echo '<li class="nav-item">';
									echo '<a class="nav-link" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
									echo '</li>';
								}
								echo '</ul>';
								echo '</div>';
							}
						}
					?>
				</div>
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main id="main" class="container"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>
