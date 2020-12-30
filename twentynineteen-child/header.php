<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo( 'name' ); ?></title>
   
    
    <?php wp_head(); ?>
</head>

<header>
<body class="bdy">
<!--<div class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			</div>
		</div>
	</div>
</div>-->
<!--Header Starts-->
<div id="home" class="container-fluid header_section">
	
	<div class="row">
		<div class="col-md-12">
			<div class="logo_section">
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
					echo '<img class="img-responsive center-block" src="'.$image[0].'">';
				} else {
					echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
				}
				?>
			</div>
		</div>
	</div>	
	<div class="row my_nav">
		<div class="container">
			<div class="col-lg-9 col-md-10 p-0">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
											  
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'top-menu',
									'container'=>'ul',
									'menu_class'=> 'nav navbar-nav text-right'
								)
								);
						?>

					</div>
				</nav>
			</div>
			<div class="col-lg-3 col-md-2">
				
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-social',
							'container'=>'ul',
							'menu_class'=> 'list-inline header_social'
						)
						);
				?>
				
			</div>
		</div>	
	</div>			
</div>
</header>

