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
		
		
		$leftBlockImage = get_field('field_569fdaf8ba586', 46);
		$leftBlockText = get_field('field_56a00d7a95d31', 46);
		
		$centerBlockImage = get_field('field_569fdc36e1c93', 48);
		$centerBlockText = get_field('field_56a00ea576053', 48);
		
		$rightBlockImage = get_field('field_569fdc8fb353c', 50);
		$rightBlockText = get_field('field_56a00ef254979', 50);
		
	?>
	

	<div class="block block-a">
		<div class="block-content-image">
			<a href="<?php print_r($links[2]);?>"><img src="<?php echo $rightBlockImage['url']; ?>" alt="<?php echo $rightBlockImage['alt']; ?>" /></a>
		</div>
		
		<div class="block-content-textblock blue-color">
			<a href="<?php print_r($links[2]);?>"><p><?php echo $rightBlockText; ?></p></a>
		</div>
	</div>
	
	<div class="block block-b">
		<div class="block-content-image">
			<a href="<?php print_r($links[1]);?>"><img src="<?php echo $centerBlockImage['url']; ?>" alt="<?php echo $centerBlockImage['alt']; ?>" /></a>
		</div>
		
		<div class="block-content-textblock blue-color">
			<a href="<?php print_r($links[1]);?>"><p><?php echo $centerBlockText; ?></p></a>
		</div>
	</div>
	
	<div class="block block-c">
		<div class="block-content-image">
			<a href="<?php print_r($links[0]);?>"><img src="<?php echo $leftBlockImage['url']; ?>" alt="<?php echo $lefttBlockImage['alt']; ?>" /></a>
		</div>
		
		<div class="block-content-textblock blue-color">
			<a href="<?php print_r($links[0]);?>"><p><?php echo $leftBlockText; ?></p></a>
		</div>
	</div>
		
	</div>
</div>


<?php include('footer.php'); ?>