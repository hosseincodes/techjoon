<?php

/* Last Edited: 1.0.0 */

get_header(); ?>

<div class="nothing-in-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
                <article style="width:100%; display:block;">
                    <div class="row">

                        <?php
                            $my_query = new WP_Query( array( 
                                'category_name' => 'blog', 
                                'posts_per_page' => 6 
                            ) ); 
                            while ($my_query->have_posts()):
                            $my_query->the_post();
                            $do_not_duplicate = $post->ID;?>

                        <div class="col-md-4">
                            <a class="news-box-link" href=<?php the_permalink(); ?>>
                                <div class="news-box">
                                    <div class="news-img">
                                        <?php the_post_thumbnail('single-post-thumbnail'); ?>
                                    </div>
                                    <div class="news-p-box">
                                        <h3><?php the_title() ?></h3>
                                        <p><?php the_excerpt();?></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>
                    <div class="col-12">
                        <div class="pagination-wp">
                            <?php the_posts_pagination( array( 
                                'mid_size' => 2,
                                'screen_reader_text' => __(' ')
                            )); ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>