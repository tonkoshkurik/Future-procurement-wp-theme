<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package materialwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head <?php do_action( 'add_head_attributes' ); ?>>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="favicon.png">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
      <!-- Google Tag Manager -->
      <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PXZ4K6"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PXZ4K6');</script>
      <!-- End Google Tag Manager -->
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'materialwp' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav class="navbar navbar-inverse" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="logo"><svg width="35px" height="35px" viewBox="0 0 234 228" version="1.1" xmlns="http://www.w3.org/2000/svg">
              			<path fill="none" d=" M 0.00 0.00 L 234.00 0.00 L 234.00 228.00 L 0.00 228.00 L 0.00 0.00 Z" />
              			<path fill="#fff" d=" M 133.62 2.04 C 135.59 2.97 137.65 3.76 139.87 3.58 C 143.94 10.69 151.14 15.59 158.70 18.37 C 161.10 19.89 162.83 22.28 165.19 23.89 C 170.10 27.50 173.91 32.29 177.71 36.98 C 177.39 38.51 176.83 39.98 176.40 41.49 C 170.56 42.06 164.86 43.76 158.97 44.11 C 151.81 44.28 144.72 46.14 138.31 49.29 C 135.05 50.04 131.63 49.37 128.31 49.57 C 128.25 45.52 128.37 41.42 131.10 38.14 C 123.36 38.39 115.60 39.54 108.20 41.86 C 101.82 44.44 94.62 44.09 88.42 47.21 C 83.47 49.39 79.29 52.90 74.45 55.27 C 71.86 56.67 68.97 57.69 66.88 59.84 C 59.54 67.68 54.23 77.07 47.75 85.57 C 45.31 85.35 42.85 85.39 40.41 85.56 C 39.33 83.59 38.19 81.66 37.00 79.76 C 34.80 82.06 32.48 84.27 30.37 86.67 C 30.44 86.04 30.56 84.80 30.62 84.17 C 28.67 84.31 26.71 84.42 24.75 84.49 C 23.93 82.27 22.41 80.19 22.26 77.79 C 24.51 72.44 27.97 66.96 33.57 64.69 C 37.61 60.92 39.63 55.49 43.30 51.37 C 45.97 47.69 49.09 44.36 51.78 40.69 C 54.93 36.32 59.76 33.65 64.42 31.19 C 70.76 28.07 76.38 23.59 82.99 21.01 C 87.84 18.94 93.09 18.24 98.20 17.09 C 108.38 13.82 119.07 11.91 129.76 11.70 C 131.51 8.60 131.11 4.75 133.62 2.04 Z" />
              			<path fill="#ffffff" d=" M 106.87 39.37 C 116.65 36.24 127.10 34.03 137.36 35.88 C 133.03 38.02 128.17 37.03 123.57 37.73 C 118.82 38.67 113.96 39.15 109.31 40.59 C 102.62 42.87 95.58 43.85 88.75 45.65 C 93.45 40.72 100.82 41.28 106.87 39.37 Z" />
              			<path fill="#fff" d=" M 198.65 60.12 C 201.80 62.49 205.59 63.39 209.45 62.53 C 211.51 65.43 213.82 68.11 216.92 69.91 C 221.75 76.76 226.40 84.04 228.43 92.28 C 233.25 104.91 233.98 119.01 230.82 132.14 C 229.12 140.72 226.09 148.95 222.86 157.05 C 217.83 168.05 211.49 178.37 205.42 188.81 C 211.13 188.69 216.83 189.05 222.48 189.90 C 222.61 192.74 222.56 195.58 222.40 198.42 C 215.28 200.46 207.80 200.67 200.60 202.40 C 194.72 202.16 190.08 206.39 184.39 207.05 C 178.88 207.74 173.63 210.17 167.99 209.65 C 164.85 209.47 162.11 211.36 159.06 211.72 C 157.77 211.33 156.58 210.71 155.33 210.22 C 159.02 203.85 164.61 198.87 168.16 192.40 C 174.51 184.50 179.07 175.12 181.48 165.29 C 181.37 158.51 182.58 151.48 187.21 146.23 C 189.02 146.83 190.84 147.44 192.74 147.67 C 194.09 151.96 193.56 156.48 193.75 160.89 C 199.65 150.99 201.69 139.31 203.29 128.04 C 203.44 119.09 201.97 110.07 198.69 101.71 C 196.83 92.59 190.66 85.31 186.13 77.43 C 190.38 81.14 192.59 86.54 195.55 91.24 C 198.30 95.34 199.14 100.24 200.82 104.80 C 203.64 112.35 203.84 120.50 204.83 128.42 C 207.11 112.07 203.32 94.69 193.63 81.23 C 191.49 77.78 190.83 73.59 188.20 70.40 C 188.81 70.38 190.02 70.34 190.63 70.32 C 192.05 71.95 193.51 73.55 195.01 75.11 C 194.19 71.85 193.22 68.54 193.66 65.13 C 194.41 63.98 196.01 63.96 197.16 63.36 C 197.64 62.28 198.14 61.20 198.65 60.12 Z" />
              			<path fill="#ffffff" d=" M 221.35 80.07 C 223.32 82.13 225.31 84.40 225.89 87.29 C 226.92 91.73 228.67 95.97 229.94 100.35 C 232.70 112.36 232.19 125.08 228.52 136.84 C 228.13 132.90 228.53 128.93 229.25 125.05 C 229.91 120.75 228.62 116.54 228.46 112.27 C 228.07 106.56 226.44 101.04 225.36 95.45 C 224.32 90.23 221.01 85.54 221.35 80.07 Z" />
              			<path fill="#fff" d=" M 21.89 109.75 C 23.01 108.12 25.18 108.53 26.86 108.11 C 28.46 110.24 30.84 111.54 32.64 113.46 C 33.84 115.37 34.46 117.58 35.45 119.61 C 37.53 123.33 36.75 127.95 39.14 131.55 C 43.15 136.63 46.30 142.47 51.41 146.60 C 53.58 148.15 56.08 149.13 58.52 150.16 C 58.53 152.61 58.42 155.06 58.10 157.50 C 54.93 157.52 51.76 157.61 48.59 157.68 C 47.17 156.30 45.75 154.93 44.28 153.62 C 46.78 158.28 48.75 163.54 53.02 166.92 C 57.80 171.17 61.62 176.37 66.15 180.85 C 73.35 186.02 80.21 192.01 88.62 195.13 C 98.69 197.72 109.13 198.60 119.28 200.85 C 122.52 202.07 125.92 202.74 129.37 202.92 C 129.53 203.46 129.85 204.53 130.01 205.07 C 129.04 205.80 128.08 206.54 127.12 207.29 C 130.09 208.62 133.41 208.19 136.46 209.16 C 134.00 209.46 131.52 209.31 129.05 209.42 C 129.79 211.69 130.62 214.03 132.47 215.65 C 128.40 215.30 124.32 215.99 120.25 215.46 C 123.15 216.02 126.06 216.58 128.74 217.89 C 128.43 219.40 128.68 221.22 127.26 222.23 C 115.78 225.76 104.32 219.95 92.81 219.55 C 95.71 222.19 99.87 222.26 103.56 222.63 C 107.84 223.27 112.14 223.85 116.35 224.88 C 119.41 225.76 122.72 225.20 125.68 226.47 C 122.14 226.79 118.52 226.65 115.12 225.57 C 108.43 223.65 101.37 223.80 94.66 221.96 C 90.46 220.90 86.00 220.67 82.09 218.65 C 77.19 216.14 71.99 214.30 66.99 212.01 C 65.75 210.61 65.04 208.72 63.49 207.64 C 56.09 204.16 49.21 199.36 43.59 193.40 C 41.10 189.62 37.40 186.92 34.49 183.50 C 26.59 173.08 21.79 160.79 17.89 148.42 C 16.53 150.89 14.99 153.26 12.62 154.88 C 12.16 157.11 11.60 159.33 11.08 161.56 C 8.88 161.44 6.67 161.40 4.47 161.56 C 4.12 159.34 3.50 157.15 3.54 154.88 C 5.48 148.93 9.62 143.84 10.97 137.65 C 11.30 135.52 12.56 133.77 13.53 131.90 C 13.74 130.05 13.63 128.18 13.78 126.33 C 14.16 123.24 17.09 121.20 17.53 118.15 C 17.84 114.87 20.18 112.39 21.89 109.75 Z" />
          		    </svg> <span><?php bloginfo( 'name' ); ?></span></div></a>
    		</div>

    			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
				 <?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => false,
		                'menu_class'        => 'nav navbar-nav navbar-left',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
	        	?>
				<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	        			<div class="form-control-wrapper">
                        	<input name="s" id="s" type="text" class="form-control col-lg-8" placeholder="Search">
                        </div>
                    </form>
        		</div> <!-- .navbar-collapse -->
        	</div><!-- /.container -->
		</nav><!-- .navbar .navbar-default -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
