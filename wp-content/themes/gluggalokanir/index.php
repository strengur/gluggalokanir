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
		
		$leftBlockImage = get_field('left_block_feature_image');
		$leftBlockText = get_field('left_block_text_block');
		
		$centerBlockImage = get_field('center_block_feature_image');
		$centerBlockText = get_field('center_block_text_block');
		
		$rightBlockImage = get_field('right_block_feature_image');
		$rightBlockText = get_field('right_block_text_block');
	?>
<?php echo '<pre>';
	var_dump( $centerBlockImage );
echo '</pre>';?>
	<div class="block block-a">
		<div class="block-content-image">
			<a href="<?php print_r($links[0]);?>"><img src="<?php echo $leftBlockImage['url']; ?>" alt="<?php echo $leftBlockImage['alt']; ?>" /></a>
		</div>
		
		<div class="block-content-textblock blue-color">
			<a href="<?php print_r($links[0]);?>"><p><?php echo $leftBlockText; ?></p></a>
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
			<a href="<?php print_r($links[2]);?>"><img src="<?php echo $rightBlockImage['url']; ?>" alt="<?php echo $rightBlockImage['alt']; ?>" /></a>
		</div>
		
		<div class="block-content-textblock blue-color">
			<a href="<?php print_r($links[2]);?>"><p><?php echo $rightBlockText; ?></p></a>
		</div>
	</div>
</div>

<?php print_r($centerBlockImage); ?>

<?php include('footer.php'); ?>