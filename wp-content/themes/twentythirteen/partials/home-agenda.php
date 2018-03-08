	
	
	<div class="container">
		<?php 

			global $post;
			$eventos = array(
							'posts_per_page' => '4',
							'category_name' => 'eventos',
							'orderby' => 'rand'
						);
			$myposts = get_posts($eventos);
			foreach( $myposts as $key => $post ) : setup_postdata( $post );
            if( $key %2 == 0 )
                $class = "box-1";
            else
                $class = "box-2";
                //$class = ($key %2 == 0 ? "box-1" : "box-2");
		?>
			<div class="<?php echo $class ?>">
				<p class="data-evento"><?php echo get_post_meta( get_the_ID(), 'Data', true); ?></p>
				<p class="local-evento"><?php echo get_post_meta( get_the_ID(), 'Local', true); ?></p>
				<p class="titulo-evento"><?php the_title(); ?></p>
				<p><a href="<?php the_permalink(); ?>">// ver evento</a></p> 
				<p class="hashtag-evento"><?php echo get_post_meta( get_the_ID(), 'Hashtags', true); ?></p>
			</div>
		<?php endforeach; ?>
	</div>
