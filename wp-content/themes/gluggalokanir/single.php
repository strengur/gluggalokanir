<?php include('header.php'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="page-content-clearfix">
	<div class="post-content">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	
<?php endwhile; else: ?>

		<p>Engar upplýsingar til að birta</p>

<?php endif; ?>

	</div>
</div>



<?php include('footer.php'); ?>