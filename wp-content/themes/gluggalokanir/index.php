<?php include('header.php'); ?>

<section>
	
	
	<?php $heroImages = array(
			'category_name' => 'forsidumyndir'
		);
		
		
		$products = new WP_Query($heroImages);
		if ($products->have_posts()) : while ($products->have_posts()) : $products->the_post();			

			 $heroImageOne = get_field('field_56a93154f1393', 119);
			 $heroImageTwo = get_field('field_56a93168f1394', 119);
			 $heroImageThree = get_field('field_56a93476de829', 119);
			
			 endwhile;
		endif;
		
		wp_reset_postdata();
		
		?>
		
	<div class="hero-image">

		<div>
			
			<img src="<?php echo $heroImageOne['url'] ?>">
		</div>
		<div>
			
			<img src="<?php echo $heroImageTwo['url'] ?>">
		</div>
		<div>
			
			<img src="<?php echo $heroImageThree['url'] ?>">
		</div>

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

<section>
	<div class="handwritten-message">
		<img src="<?php bloginfo('template_directory'); ?>/assets/icons/fegradu-heimilid.svg">
	</div>
	
	<div class="large-text-banner-clearfix">
		<div class="large-text-banner-content">
			<div class="measure-icon">
				<img src="<?php bloginfo('template_directory'); ?>/assets/icons/tape.svg">
				<p>Mældu</p>
			</div>
			<div class="order-icon">
				<img src="<?php bloginfo('template_directory'); ?>/assets/icons/contract11.svg">
				<p>Pantaðu</p>
			</div>
			<div class="installation-icon">
				<img src="<?php bloginfo('template_directory'); ?>/assets/icons/hammer42.svg">
				<p>Settu upp</p>
			</div>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>