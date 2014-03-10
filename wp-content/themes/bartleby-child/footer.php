  <!-- Footer -->
  <?php global $bartleby_options; $bartleby_settings = get_option( 'bartleby_options', $bartleby_options ); ?>
  <footer>
<div class="row">
	<div class="sixteen columns">
		<hr />
		<div class="row">
			<div class="seven columns">
				<div id="colophon">
					<small>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></small>
					<div class="row">
						<div id="credit" class="ten columns">
							<?php if( $bartleby_settings['footer_link']) : ?>
								<a href="http://www.edwardrjenkins.com/" rel="nofollow">
									<?php esc_attr_e( 'Bartleby Theme by Edward R. Jenkins' , 'bartleby' ); ?>
								</a>
							<?php else: ?>
								<?php esc_attr_e( 'Bartleby Theme by Edward R. Jenkins' , 'bartleby' ); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
		  	</div>
			<div class="nine columns">
				<nav id="footermenu" role="navigation"><?php wp_nav_menu( array( 'theme_location' => 'bottom-menu' ) ); ?></nav>
			</div>
		</div>
	</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
