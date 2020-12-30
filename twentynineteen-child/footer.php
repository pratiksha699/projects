<footer>
<div class="container-fluid">
		
		<div class="row footer_section">
			<div class="bg_blue">	
				<div class="container">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<?php
							if(is_active_sidebar('first-footer-widget-area'))
							{
								$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							if ( has_custom_logo() ) {
								echo '<img class="img-responsive footer_logo" style="max-width: 250px;" src="'.$image[0].'">';
							}
							dynamic_sidebar('first-footer-widget-area');
							wp_nav_menu(
								array(
									'theme_location' => 'footer-social',
									'container'=>'ul',
									'menu_class'=> 'list-inline footer_social'
								)
								);
								
							}
						?>					
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<?php
							if(is_active_sidebar('second-footer-widget-area'))
							{
								dynamic_sidebar('second-footer-widget-area');
								
							wp_nav_menu(
								array(
									'theme_location' => 'footer-menu',
									'container'=>'ul',
									'menu_class'=> 'quick_links list-unstyled'
								)
								);
							
							}
						?>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<?php
							if(is_active_sidebar('third-footer-widget-area'))
							{
								dynamic_sidebar('third-footer-widget-area');
							}
						?>
					</div>
					
				</div>
			</div>	
		</div>
		
		<div class="row footer_bottom">
		    <div class="container">
				<div class="col-md-12 col-sm-12 col-xs-12">
				    <p>© Copyright  <?php echo Date('Y'); ?> <?php bloginfo('name'); ?>   |   All Rights Reserved</p>
				</div>
				
			</div>
		</div>
	</div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>