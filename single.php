<?php get_header();
/* Last Edited: 1.2.0 */

?>

<div class="nothing-in-page">
    <div class="section-courses">
        <div class="container">
            <div class="col-md-12">
                    <div class="post-class-information">
                        <div><span class="title-span-top"></span></div>
                        <h1 class="posts-title"><?php single_post_title(); ?></h1>
                        <h4 class="posts-title-h4"><?php the_post();
                                $author_id=get_the_author_meta('ID'); $curauth=get_user_by('ID',$author_id);
                                $display_name=$curauth->display_name; rewind_posts(); ?><?php echo $display_name; ?> | <?php the_time('d F Y'); ?>
                        </h4>
                        <div class="post-img"><?php the_post_thumbnail( 'wwshthumb' ); ?></div>
                        <div class="courses-class-information-p">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="posts-p">
                                <?php echo the_content(); ?>
                            </div>
                            <div class="share-content-blog">
                                <div class="lefts_shares">
                                    <span>اشتراک گذاری</span>
                                    <ul>
                                    <li><a target="_blank" rel="nofollow" class="linkedin_shares"
                                    href="https://www.linkedin.com/shareArticle?mini=true&title=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li><a target="_blank" rel="nofollow" class="twitter_shares"
                                    href="http://twitter.com/home?status=<?php the_permalink(); ?>"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a target="_blank" rel="nofollow" class="telegram_shares"
                                    href="https://telegram.me/share/url?url=<?php the_permalink(); ?>"><i class="fab fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="clear_iranthemes"></div>
                            </div>

                            <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'متاسفانه مشکلی در دریافت محتوای مطلب بوجود آمد. لطفا به صفحه‌ی اصلی سایت بروید. سپاس از شما.' ); ?>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>