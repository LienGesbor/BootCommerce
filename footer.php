	

	</div><!-- Content Main Wrapper -->

	<footer class="conatiner-fluid site-footer">
		
		<div class="conatiner-fluid site-nav-footer">
			<?php
			
			$args = array(
				'theme_location' => 'footer'
			);
			
			?>
			
			<?php wp_nav_menu(  $args ); ?>
		</div>
		<br>
		<p id="copyright"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
	
	</footer>

</div><!-- container -->

<?php wp_footer(); ?>
</body>
</html>