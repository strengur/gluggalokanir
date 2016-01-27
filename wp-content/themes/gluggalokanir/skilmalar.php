<?php
 	/*
 		Template Name: Skilmálar
 	*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="page-content-clearfix">
		<div class="page-content-contact">
			<h3><?php the_title(); ?></h3>
	
			<?php the_content(); ?>
			
				<?php
					if ( comments_open() ) :
						echo '<p>';
							comments_template();
						echo '</p>';
					endif;
				?>
	
			<?php endwhile; else: ?>
	
				<p>Engar færslur til að birta á þessari síðu.</p>
	
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>