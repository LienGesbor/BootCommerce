<?php

get_header(); ?>
	
	
<!-- Main Column -->
<div class="container col-md-9 main-column" style="float: right;">
	<?php
		woocommerce_content();
	?>
</div>
<!--Main Column-->


<!--Secondary Column-->
<?php get_sidebar('main'); ?>
<!--Secondary Column-->

<?php get_footer();?>