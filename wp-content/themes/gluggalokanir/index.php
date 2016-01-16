<?php include('header.php'); ?>

<section>
	
	<div class="hero-image">
		<img src="<?php bloginfo('template_directory'); ?>/assets/banners/bedroom-1680x480px.jpg">
	</div>
	
</section>

<div class="blocks">
	
	<?php
		$args = array(
			'category_name' => 'kubbar'
		);
		
		
		$products = new WP_Query($args);
		if ($products->have_posts()) : while ($products->have_posts()) : $products->the_post();
			$links[] = get_permalink();
			$title[] = get_the_title();
			endwhile;
			endif;
		wp_reset_postdata();
	?>
	
	<div class="block block-a">
		<div class="block-content-image">
			<a href="<?php print_r($links[0]);?>"><img src="<?php bloginfo('template_directory'); ?>/assets/banners/bath-692x421px.jpg"></a>
		</div>
		
		<div class="block-content-textblock blue-color">
			
			<a href="<?php print_r($links[0]);?>"><p><?php echo $title[0];?></p></a>
				
		</div>
		
	</div>
	
	<div class="block block-b">
		<a href="#">
		<div class="block-content-image">
			<a href="<?php print_r($links[1]);?>"><img src="<?php bloginfo('template_directory'); ?>/assets/banners/eldhus-692x461px.jpg"></a>
		</div>
		
		<div class="block-content-textblock blue-color">
			<a href="<?php print_r($links[1]);?>"><p><?php echo $title[1];?></p></a>
		</div>
		</a>
	</div>
	
	<div class="block block-c">
		<div class="block-content-image">
			<a href="<?php print_r($links[2]);?>"><img src="<?php bloginfo('template_directory'); ?>/assets/banners/office-692x421px.jpg"></a>
		</div>
		
		<div class="block-content-textblock blue-color">
			<a href="<?php print_r($links[2]);?>"><p><?php echo $title[2];?></p></a>
		</div>
	</div>
		
	</div>
</div>


<?php include('footer.php'); ?>