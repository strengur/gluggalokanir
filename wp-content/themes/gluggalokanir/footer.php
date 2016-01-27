		<footer>
			<div class="footer-menu">
				<?php wp_nav_menu( array('menu' => 'Footer Menu')); ?>
			</div>
			
			<div class="copyright">
				<p>&copy;<?php echo date( 'Y' ); ?> Gluggalokanir | Allur&nbsp;réttur&nbsp;áskilinn</p>
			</div>
		</footer>
		
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main-javascript.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick.min.js"></script>
	</body>
</html>