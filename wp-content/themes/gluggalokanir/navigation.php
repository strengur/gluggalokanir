<nav class="top-nav">
	<div class="phone-number">
		<img src="<?php bloginfo('template_directory');?>/assets/icons/telephone46.svg">
		<h4>555 5555</h4>
	</div>
	<div class="social-media-icons">
		<img src="<?php bloginfo('template_directory');?>/assets/icons/socialmedia19.svg">
		<img src="<?php bloginfo('template_directory');?>/assets/icons/twitter21.svg">
		<img src="<?php bloginfo('template_directory');?>/assets/icons/socialnetwork228.svg">
		<img src="<?php bloginfo('template_directory');?>/assets/icons/videos.svg">
	</div>
</nav>

<nav class="desktop-nav blue-color">
	<?php wp_nav_menu( array('menu' => 'Top and Buttons')); ?>
</nav>

<nav class="mobile-nav">
	<?php wp_nav_menu( array('menu' => 'Top and Buttons')); ?>
</nav>