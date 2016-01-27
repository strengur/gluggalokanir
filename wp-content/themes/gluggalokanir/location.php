<?php
 	/*
 		Template Name: Staðsetning
 	*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="page-content-clearfix">
		<div class="page-content-contact">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
	
			<div class="view1">
				<?php $location = get_field('field_56a4f996e5e5c');
					if( ! empty($location) ):
				?>
				<div id="map" style="width: 100%; height: 350px;"></div>
				

				<script type="text/javascript">
				  //<![CDATA[
					function load() {
						var lat = <?php echo $location['lat']; ?>;
						var lng = <?php echo $location['lng']; ?>;
						// coordinates to latLng
						var latlng = new google.maps.LatLng(lat, lng);
						// map Options
						var myOptions = {
							zoom: 15,
							center: latlng,
							mapTypeId: google.maps.MapTypeId.ROADMAP
						};
				//draw a map
						var map = new google.maps.Map(document.getElementById("map"), myOptions);
						var marker = new google.maps.Marker({
							position: map.getCenter(),
							map: map
				   		});
					}
				// call the function
				load();
				//]]>
				</script>
				<?php endif; ?> 
			</div>

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


