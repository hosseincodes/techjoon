<?php
/* Last Edited: 1.0.0 */

get_header(); ?>

<div class="home-page">
    <div class="container responsive-pc">
        <div class="row">
            <div class="col-md-8">
                <div class="top-posts">
                    <?php
                        $my_query = new WP_Query( array( 
                            'category_name' => 'top-posts', 
                            'posts_per_page' => 1 
                        ) ); 
                        while ($my_query->have_posts()):
                        $my_query->the_post();
                        $do_not_duplicate = $post->ID;?>

                    <a class="posts-box-link" href=<?php the_permalink(); ?>>
                        <div class="top-posts-box">
                            <div class="posts-title-homepage">
                                <h2><?php the_title() ?></h2>
                                <h5><?php the_time('d F Y'); ?></h5>
                            </div>
                            <div class="posts-img">
                                <?php the_post_thumbnail('single-post-thumbnail'); ?>
                            </div> 
                        </div>
                    </a><?php endwhile; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mini-view">
                    <?php
                        $my_query = new WP_Query( array( 
                            'category_name' => 'mini-view', 
                            'posts_per_page' => 5 
                        ) ); 
                        while ($my_query->have_posts()):
                        $my_query->the_post();
                        $do_not_duplicate = $post->ID;?>

                    <a class="posts-box-link" href=<?php the_permalink(); ?>>
                        <div class="top-posts-box">
                            <div class="posts-title-homepage">
                                <h4><?php the_title() ?></h4>
                            </div>
                        </div>
                    </a><?php endwhile; ?>
                </div>
            </div>
        </div>

        <div class="posts">
            <?php
                $my_query = new WP_Query( array( 
                    'category_name' => 'posts', 
                    'posts_per_page' => 9 
                ) ); 
                while ($my_query->have_posts()):
                $my_query->the_post();
                $do_not_duplicate = $post->ID;?>

            <div class="row">
                <a class="posts-box-link" href=<?php the_permalink(); ?>>
                    <div class="posts-box">
                        <div class="col-md-3">
                            <div class="posts-img">
                                <?php the_post_thumbnail('single-post-thumbnail'); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="posts-title-homepage">
                                <h3><?php the_title() ?></h3>
                                <h5><?php the_time('d F Y'); ?></h5>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="posts-excerpt">
                                <?php the_excerpt();?>
                            </div>
                        </div>
                    </div>
                </a>
            </div><?php endwhile; ?>
        </div>
    </div>
    
    <div class="container responsive-mobile">
        <h4 class="moblie-h4">آخرین اخبار</h4>
        <div class="posts">
            <?php
                $my_query = new WP_Query( array( 
                    'category_name' => 'posts', 
                    'posts_per_page' => 9 
                ) ); 
                while ($my_query->have_posts()):
                $my_query->the_post();
                $do_not_duplicate = $post->ID;?>

            <div class="row">
                <a class="posts-box-link" href=<?php the_permalink(); ?>>
                    <div class="posts-box">
                        <div class="col-md-4">
                            <div class="posts-title-homepage">
                                <h2><?php the_title() ?></h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="posts-img">
                                <?php the_post_thumbnail('single-post-thumbnail'); ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="posts-excerpt">
                                <?php the_excerpt();?>
                            </div>
                        </div>
                    </div>
                </a>
            </div><?php endwhile; ?>
        </div>
    </div>
</div>
        
        
<?php get_footer(); ?>