<?php
/* Last Edited: 1.0.0 */

get_header(); ?>

<div class="home-page">
    <div class="container responsive-pc">
        <div class="row">
            <div class="col-md-8">
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
            <div class="col-md-4">
                <div class="logo-box">
                    <div class="logo">
                        <a style="font-size: 16px; margin-left: 10px;" href="http://techjoon.ir">TechJoon 🍑</a>
                    </div>
                    <div class="logo-description">
                        <p style="font-size: 14px; margin-left: 10px;">The beauty of the tech world! <a href="http://twitter.com/TechJoon/" target="_blank"><i
                        style="font-size: 14px;" class="fab fa-twitter"></i></a></p>
                    </div>
                </div>
                <div class="date-box">
                    <p><?php echo date('l d F Y , H:i:s'); ?></p>
                </div>
                <div class="donate-box">
                    <a class="#" href="#">Buy me a coffe! <i class="fab fa-bitcoin bitcoin-icon"></i></a>
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="services">
            <div class="container">
                <h4 class="services-title">خدمات مربوط به کسب و کار های مجازی</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="services-box">
                            <h5>طراحی وب سایت</h5>
                            <p>ایجاد یک سایت کامل با سیستم مدیریت وردپرس</p>
                            <a class="services-link-moreInfo" href="#">اطلاعات بیشتر</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-box">
                            <h5>بهبود سئو</h5>
                            <p>بهینه سازی سایت با استفاده از اخرین استاندارد های گوگل</p>
                            <a class="services-link-moreInfo" href="#">اطلاعات بیشتر</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-box">
                            <h5>تبلیغات در گوگل</h5>
                            <p>شارژ اکانت گوگل ادوردز و سئوی کلمات مدنظر شما</p>
                            <a class="services-link-moreInfo" href="#">اطلاعات بیشتر</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-box">
                            <h5>مدیریت و پشتیبانی سایت</h5>
                            <p>تمدید هاست و دامین - برطرف کردن مشکلات احتمالی و تامین امنیت</p>
                            <a class="services-link-moreInfo" href="#">اطلاعات بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="International-accounts">
            <div class="container">
                <h4 class="services-title">خرید اکانت سایت های بین المللی</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="services-box">
                            <img class="services-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/spotify.png" alt="" srcset="">
                            <h5>اکانت اسپاتیفای 1 ماهه</h5>
                            <p>50 هزار تومان</p>
                            <a class="services-link-moreInfo" href="#">اطلاعات بیشتر</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-box">
                            <img class="services-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/netflix.png" alt="" srcset="">
                            <h5>اکانت نتفلیکس</h5>
                            <p>50 هزار تومان</p>
                            <a class="services-link-moreInfo" href="#">اطلاعات بیشتر</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-box">
                            <img class="services-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.png" alt="" srcset="">
                            <h5>اکانت لینکدین</h5>
                            <p>50 هزار تومان</p>
                            <a class="services-link-moreInfo" href="#">اطلاعات بیشتر</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-box">
                            <img class="services-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/skype.png" alt="" srcset="">
                            <h5>اکانت اسکایپ</h5>
                            <p>50 هزار تومان</p>
                            <a class="services-link-moreInfo" href="#">اطلاعات بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="github-box">
            <div class="container">
                <h4 class="github-box-title"><i class="fab fa-github"></i> اگر تمایل به همکاری در پروژه های اپن سورس دارید:</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="github-project-box">
                            <a class="github-link" href="https://github.com/hosseincodes/mathbot">mathbot</a>
                            <p>A Persian Mathematical Question and Answer Forum (Pre- Alpha)</p>
                            <span class="github-tags">javascript</span><span class="github-tags">reactjs</span><span class="github-tags">scss</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="github-project-box">
                            <a class="github-link" href="https://github.com/hosseincodes/speed-learn">speed-learn</a>
                            <p> Wordpress education theme</p>
                            <span class="github-tags">php</span><span class="github-tags">wordpress</span><span class="github-tags">wordpress-theme</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="github-project-box">
                            <a class="github-link" href="https://github.com/hosseincodes/ticnet">ticnet</a>
                            <p> A cool online chat room built with React, Node.js and socket-io.</p>
                            <span class="github-tags">nodejs</span><span class="github-tags">reactjs</span><span class="github-tags">socket-io</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="mini-view">
            <div class="container">
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
                    <div class="posts-title-homepage pst-mini-view">
                        <h4><?php the_title() ?></h4>
                    </div>
                </div>
            </a><?php endwhile; ?>
            </div>
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