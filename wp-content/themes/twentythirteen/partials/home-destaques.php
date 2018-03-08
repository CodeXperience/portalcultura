<!-- Inicio Loop dos posts em destaque -->
<div class="module">
        <div class="destaque-mosaico home">
            <ul style="position: relative; height: 729px;">
                <?php
                    global $post;
                    $args = array(
                                'category_name' => 'destaque'
                            );
                    $postDestaque = get_posts($args);
                    foreach( $postDestaque as $post) : setup_postdata( $post ); ?>
                        <li class="destaque" style="position: absolute; left: 0px; top: 0px;">
                            <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('thumb-destaque-mosaico'); ?>
                            <?php else: ?>
                                <img src="<?php bloginfo('template_url'); ?>/images/thmb-destaque.png" alt="Alt text" />
                            <?php endif; ?>
                            <span class="overlay">
                                <h2><?php the_title(); ?></h2>
                            </span>
                            </a>
                        </li>

                    <?php endforeach; ?>
                    <?php
                    
                        $args2 = array(
                                    'category_name' => 'noticias'
                                );
                        $postNormal = get_posts($args2); ?>
                    
                    <?php foreach( $postNormal as $key => $post) : setup_postdata( $post ); ?>
                        <li class="item-<?php echo ++$key ?>">
                            <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('thumb-normal-mosaico'); ?>
                            <?php else: ?>
                                <img src="<?php bloginfo('template_url'); ?>/images/thumb-mini.png" alt="Alt text" />
                            <?php endif; ?>
                            <span class="overlay">
                                <h2><?php the_title(); ?></h2>
                            </span>
                            </a>
                        </li>          
                    <?php endforeach; ?>
                    
            </ul>
        </div>
    </div>
<!-- Fim Loop dos posts em destaqe -->
