<footer id="footer" class="pt-2" itemtype="http://schema.org/WPFooter">
    <div class="container">
        <div class="row">
			<?php
			$menu_name     = 'footer-menu';
			$menuLocations = get_nav_menu_locations();
			$menuID        = $menuID = $menuLocations[ $menu_name ];
			$menu_items    = wp_get_nav_menu_items( $menuID );
			foreach ( $menu_items as $menu_item ) {
				if ( $menu_item->menu_item_parent == 0 ) {
					$parent     = $menu_item->ID;
					$menu_array = array();
					foreach ( $menu_items as $submenu ) {
						if ( $submenu->menu_item_parent == $parent ) {
							$bool = true;
							if ( count( $menu_array ) < 8 ) {
								$menu_array[] = '<li><a href="' . htmlspecialchars( $submenu->url ) . '">' . htmlspecialchars( $submenu->title ) . '</a></li>' . "\n";
							}
						}
					}
					if ( $bool == true && count( $menu_array ) > 0 ) {
						$menu_list[] = [
							"name"    => htmlspecialchars( $menu_item->title ),
							"content" => '<ul>' . "\n" . implode( "\n", $menu_array ) . '</ul>' . "\n"
						];
					}
				}
			}
			?>
            <div class="col col-8 col-md-3 scouts-purple footer-box pt-2 pb-2 pl-2 pr-2 pt-md-5 pb-md-5 pl-md-4 pr-md-4">
			<img width="200" src="<?php echo get_template_directory_uri() . '/assets/images/WSScouts_Linear_Purple.png'; ?>" >
                <h6><?php echo $menu_list[0]['name'] ?></h6>
				<?php echo $menu_list[0]['content'] ?>
                <a href="https://www.westsussexscouts.org.uk" class="footer-link"><p>West Sussex Scouts</p></a>
            </div>
            <div class="col col-8 col-md-3 scouts-blue footer-box pt-2 pb-2 pl-2 pr-2 pt-md-5 pb-md-5 pl-md-4 pr-md-4">
                <h6><?php echo $menu_list[1]['name'] ?></h6>
				<?php echo $menu_list[1]['content'] ?>
				<a href="https://www.girlguidingsussexwest.org.uk" class="footer-link"><p>Girl Guiding - Sussex West</p></a>
            </div>
            <div class="col col-8 col-md-3 scouts-green pt-2 pb-2 pl-2 pr-2 pt-md-5 pb-md-5 pl-md-4 pr-md-4">
			
                <h6><?php echo $menu_list[2]['name'] ?></h6>
				<?php echo $menu_list[2]['content'] ?>
				<a href="http://www.girlguidingsussexcentral.btck.co.uk" class="footer-link"><p>Girl Guiding - Sussex Central</p></a>
            </div>
            <div class="col col-8 col-md-3 scouts-red pt-2 pb-2 pl-2 pr-2 pt-md-5 pb-md-5 pl-md-4 pr-md-4">
                <h6>Contact Us</h6>
                <span>&copy; <?php echo get_bloginfo( 'name', 'raw' ) ?> <?php echo date( 'Y' ) ?><br/><?php if ( get_option( 'charity_number' ) ): ?> Registered Charity Number
                        <span id="charity_number"><?php echo get_option( 'charity_number' ) ?></span><?php endif ?></span>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/js/footer.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
<?php wp_footer(); ?>
</body>
</html>