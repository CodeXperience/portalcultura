<?php
	/*
		Template Name: HomePage
	*/
	get_header();
?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

	        <!-- exibi os posts na homepage -->
	        <?php get_template_part('partials/home', 'destaques'); ?>

	 		<!-- exibi a agenda cultural -->
	 		<div id="titulo-agenda">AGENDA CULTURAL</div>
	 		<?php get_template_part('partials/home', 'agenda'); ?>      

	 		<!-- exibi os vídeos em carousel -->
	 		<div id="titulo-videos">VÍDEOS</div>
	 		<?php get_template_part('partials/home', 'videos'); ?>

 		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
