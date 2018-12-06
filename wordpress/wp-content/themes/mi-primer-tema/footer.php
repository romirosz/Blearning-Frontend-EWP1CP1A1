<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>
</body>
<footer>
	<div class="panel-footer">Desafio Latam 2018 - Curso Fullstack G5</div>
	
</footer>
</html>