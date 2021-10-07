<?php
/* Last Edited: 4.6 */
?>

  body {
    <?php if (ot_get_option('sitefont', 'iransans')=='shabnam'): ?> font-family: Shabnam;
    <?php endif;

    if (ot_get_option('sitefont', false)=='tanha'): ?> font-family: Tanha;
    <?php endif;

    if (ot_get_option('sitefont', false)=='samim'): ?> font-family: Samim;
    <?php endif;

    if (ot_get_option('sitefont', false)=='sahel'): ?> font-family: Sahel;
    <?php endif;

    if (ot_get_option('sitefont', false)=='nahid'): ?> font-family: Nahid;
    <?php endif;

    if (ot_get_option('sitefont', false)=='gandom'): ?> font-family: Gandom;
    <?php endif;
    ?>
  }



  #wpadminbar p,
  #wpadminbar a,
  #wpadminbar .ab-label,
  #wpadminbar .display-name,
  #wpadminbar .username {
    <?php if (ot_get_option('sitefont', 'iransans')=='shabnam'): ?> font-family: Shabnam !important;
    <?php endif;

    if (ot_get_option('sitefont', false)=='tanha'): ?> font-family: Tanha !important;
    <?php endif;

    if (ot_get_option('sitefont', false)=='samim'): ?> font-family: Samim !important;
    <?php endif;

    if (ot_get_option('sitefont', false)=='sahel'): ?> font-family: Sahel !important;
    <?php endif;

    if (ot_get_option('sitefont', false)=='nahid'): ?> font-family: Nahid !important;
    <?php endif;

    if (ot_get_option('sitefont', false)=='gandom'): ?> font-family: Gandom !important;
    <?php endif;
    ?>
  }


  /* NOTE: logo  */
  .logoimg {
    background: url(<?php echo ot_get_option( 'sitelogo' , get_template_directory_uri().'/img/logo.png');
    ?>) no-repeat !important;
  }

  /* NOTE: FINISH_logo  */


  /* NOTE: first_color_wwsh  */
  ::selection {
    color: #fff !important;
    background: <?php echo ot_get_option('first_color_wwsh', '#ff1a75');
    ?> !important;
  }


  #sidr .logomobile {
    background: <?php echo ot_get_option('first_color_wwsh', '#ed2324');
    ?> !important;
  }

  .post-password-form input[type="submit"] {
    border: none;
    background: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?>;
    color: #fff;
    border-radius: 20px;
  }

  .post-password-form input[type="password"] {
    border: none;
    border-radius: 20px;
    box-shadow: 1px 1px 45px rgba(0, 0, 0, 0.15);
  }

  .notregcmnt p , #learn-press-profile-header{
    background: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?> !important;
  }

  .indexbackimg {
    background: <?php echo ot_get_option('first_color_wwsh', '#e71774');
    ?> !important;
  }

  .indexbackimg {
    background-image: url(<?php echo ot_get_option('back_slider' , false) ?>) !important;
  }

  #respond .comment-reply-title a {
    color: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?> !important;
  }

  #respond .comment-reply-title>a:hover {
    color: <?php echo ot_get_option('hover_first_color_wwsh', '#C51162');
    ?> !important;
  }

  .woocommerce button,
  .woocommerce .button {
    background: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?> !important;
  }

  .woocommerce button:hover,
  .woocommerce .button:hover {
    background: <?php echo ot_get_option('hover_first_color_wwsh', '#C51162');
    ?> !important;
  }

  .woocommerce-error {
    background: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?> !important;
  }

  .comment-navigation a {
    color: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?> !important;
  }

  .woocommerce-error .button {
    color: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?> !important;
  }

  .go-out-wwsh {
    background: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?> !important;
  }

  .woocommerce-MyAccount-navigation li.is-active a {
    background: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?> !important;
  }

  .woocommerce-MyAccount-navigation li.is-active a:hover {
    background: <?php echo ot_get_option('first_color_wwsh', '#F50057');
    ?> !important;
  }

  .menuarea ul>li>ul>li:hover>a {
    background: <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
  }

  .bctagosmart {
    background-color: <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
    box-shadow: 0 2px 12px <?php echo ot_get_option('first_color_wwsh', 'rgba(242, 45, 51, 0.6)');
    ?> !important;
  }

  .bctagosmart:hover {
    background: <?php echo ot_get_option('hover_first_color_wwsh', '#de0e14');
    ?> !important;
  }

  .course-advice-box .contentform .form-advice form input[type='submit'],
  .course-advice-box .contentform .form-advice form button {
    background-color: <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
    box-shadow: 0 2px 12px <?php echo ot_get_option('first_color_wwsh', 'rgba(242, 45, 51, 0.6)');
    ?> !important;
  }

  .course-ul-as li a:hover {
    color: <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
  }

  .course-ul-as li a:hover:before {
    background-color: <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
  }

  .wwsh-advice {
    border: 1px solid <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
  }

  .wwsh-advice {
    color: <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
    border: 1px solid <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
    box-shadow: 0px 2px 11px <?php echo ot_get_option('first_color_wwsh', '#f22d3354');
    ?> !important;
  }

  .wwsh-advice:hover {
    color: <?php echo ot_get_option('hover_first_color_wwsh', '#de0e14');
    ?> !important;
    border: 1px solid <?php echo ot_get_option('hover_first_color_wwsh', '#f22d33');
    ?> !important;
    box-shadow: 0px 2px 16px <?php echo ot_get_option('first_color_wwsh', 'rgba(242, 45, 51, 0.59)');
    ?> !important;
  }

  .wwsh-register {
    background-color: <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
    box-shadow: 0 2px 12px <?php echo ot_get_option('first_color_wwsh', 'rgba(242, 45, 51, 0.8)');
    ?> !important;
  }

  .wwsh-register:hover,
  button.single_add_to_cart_button.button.alt:hover {
    background-color: <?php echo ot_get_option('hover_first_color_wwsh', '#de0e14');
    ?> !important;
    box-shadow: 0 2px 20px <?php echo ot_get_option('first_color_wwsh', 'rgba(242, 45, 51, 1)');
    ?> !important;
  }

  .pagination-wp .pagination .nav-links .page-numbers {
    background: <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?>;
    /* NOTE: No hover for this element  */
  }

  .pagination-wp .pagination .nav-links .current {
    background: <?php echo ot_get_option('first_color_wwsh', '#f22d33');
    ?> !important;
    /* NOTE: No hover for this element  */
  }

  #footer .main-footer .main-footer-bg {
    background: <?php echo ot_get_option('footer_first_color', '#d70d59');
    ?> !important;
    background: linear-gradient(324deg, <?php echo ot_get_option('footer_first_color', '#d70d59'); ?> 0%, <?php echo ot_get_option('footer_second_color', '#fc3924'); ?> 100%) !important;

    /* NOTE: No hover for this element  */
  }

  /* NOTE: FINISH_first_color_wwsh  */
  .probackimg {
    background: #0cebeb;
    background: -webkit-linear-gradient(to right, #29ffc6, #20e3b2, #0cebeb);
    background: linear-gradient(to right, #29ffc6, #20e3b2, #0cebeb);
  }

  @media (max-width: 767px) {
    #footer .main-footer .main-footer-bg {
      background: none !important;
    }

    #footer {
      background: <?php echo ot_get_option('footer_first_color', '#d70d59');
      ?> !important;
      background: linear-gradient(324deg, <?php echo ot_get_option('footer_first_color', '#d70d59'); ?> 0%, <?php echo ot_get_option('footer_second_color', '#fc3924'); ?> 100%) !important;
    }
  }

  /* NOTE: second_color_wwsh  */
  <?php if (ot_get_option('inside_fff_000_second', false) !=="off") {
    ?>.acta {
      color: #333 !important;
    }

    .acta:hover {
      color: #333 !important;
    }

    <?php
  }

  else {
    ?>.acta {
      color: #fff !important;
    }

    .acta:hover {
      color: #fff !important;
    }

    <?php
  }

  ?>.allcoursesb {
    background-color: <?php echo ot_get_option('second_color_wwsh', '#5082D7');
    ?> !important;
    box-shadow: 0 2px 12px <?php echo ot_get_option('second_color_wwsh', 'rgba(80, 130, 215, 0.6)');
    ?> !important;
  }

  .allcoursesb:hover {
    background-color: <?php echo ot_get_option('hover_second_color_wwsh', '#2d66c7');
    ?> !important;
  }

  .lineprom1,
  .lineprom2,
  .lineprom3,
  .lineprom4,
  .lineprom5,
  .lineprom6 {
    background: -moz-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 100%) !important;
    background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 100%) !important;
    background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='<?php echo ot_get_option( 'second_color_wwsh' , '#339AD9' ); ?>', GradientType=1) !important;
  }

  .lineprom4 {
    background: -moz-linear-gradient(left, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 0%, rgba(0, 0, 0, 0) 100%) !important;
    background: -webkit-linear-gradient(left, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 0%, rgba(0, 0, 0, 0) 100%) !important;
    background: linear-gradient(to right, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 0%, rgba(0, 0, 0, 0) 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo ot_get_option( 'second_color_wwsh' , '#339AD9' ); ?>', endColorstr='#00000000', GradientType=1) !important;
  }

  .lineprom5 {
    background: -moz-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 100%) !important;
    background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 100%) !important;
    background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='<?php echo ot_get_option( 'second_color_wwsh' , '#339AD9' ); ?>', GradientType=1) !important;
    opacity: 0.3;
  }

  .lineprom6 {
    background: -moz-linear-gradient(left, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 0%, rgba(0, 0, 0, 0) 100%) !important;
    background: -webkit-linear-gradient(left, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 0%, rgba(0, 0, 0, 0) 100%) !important;
    background: linear-gradient(to right, <?php echo ot_get_option('second_color_wwsh', '#339AD9'); ?> 0%, rgba(0, 0, 0, 0) 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo ot_get_option( 'second_color_wwsh' , '#339AD9' ); ?>', endColorstr='#00000000', GradientType=1) !important;
  }

  .backnums ul li.studentsnum {
    background-color: <?php echo ot_get_option('second_color_wwsh', '#339AD9');
    ?> !important;
    /* NOTE: No hover for this element  */
  }

  .blueelement {
    color: <?php echo ot_get_option('second_color_wwsh', '#339AD9');
    ?> !important;
    /* NOTE: No hover for this element  */
  }

  .backnums::before {
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo ot_get_option( 'second_color_wwsh' , '#339AD9' ); ?>', endColorstr='#00ffff', GradientType=1) !important;
    /* NOTE: No hover for this element  */
  }

  .postshomebox>div.first-post a .blog-posts-inner .categorytxt ul li:before {
    content: "";
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background-color: <?php echo ot_get_option('second_color_wwsh', '#339AD9');
    ?> !important;
    /* NOTE: No hover for this element  */
  }

  /* NOTE: FINISH_second_color_wwsh  */
  /* NOTE: third_color_wwsh  */
  .acta {
    background: <?php echo ot_get_option('third_color_wwsh', '#FFD000');
    ?> !important;
  }

  .acta:hover {
    background: <?php echo ot_get_option('hover_third_color_wwsh', '#f0c400');
    ?> !important;
  }

  .article-content>article>ul li:before {
    background-color: <?php echo ot_get_option('third_color_wwsh', '#FFD000');
    ?> !important;
    /* NOTE: No hover for this element  */
  }

  .star-rating {
    color: <?php echo ot_get_option('third_color_wwsh', '#FFD000');
    ?> !important;
    /* NOTE: No hover for this element  */
  }

  p.stars a {
    color: <?php echo ot_get_option('third_color_wwsh', '#FFD000');
    ?> !important;
    /* NOTE: No hover for this element  */
  }

  .all-areas-title:after {
    background: <?php echo ot_get_option('third_color_wwsh', '#F8C44F');
    ?> !important;
    /* NOTE: No hover for this element  */
  }

  /* NOTE: FINISH_third_color_wwsh  */
  .course-advice-box .piccontent {
    background: #f22d33;
    border-radius: 10px;
    direction: rtl;
    background: url(<?php echo ot_get_option('background_style_advice', ''.get_template_directory_uri().'/img/lightbox_back.jpg') ?>) !important;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top right;
    height: 100%;
    color: #fff;
    padding-top: 15px;
    padding-bottom: 15px;
    position: relative;
  }

  #footer .footerarea .footcontent a .logo-image,
  #sidr .logo-image {
    background: url(<?php echo ot_get_option('sitefooterlogo', ''.get_template_directory_uri().'/img/footer-logo.png') ?>) no-repeat !important;
  }

  <?php echo ot_get_option('your_css', '');

  ?>@media (max-width: 767px) {

    .backimg,.indexbackimg {
      background: unset !important;
      background: transparent !important;
      display: none;
    }

    .justindexbg::before {
      background: transparent !important;
    }
  }



  <?php if (ot_get_option('type_of_bg_header', false)=='bg_first'): ?><?php endif;
  ?><?php if (ot_get_option('type_of_bg_header', false)=='bg_second'): ?>

  /*Model 2*/
  .indexbackimg,
  .justindexbg::before,
  .probackimg:after {
    height: 550px;
    border-radius: 0 100% 100% 0;
  }

  <?php endif;
  ?><?php if (ot_get_option('type_of_bg_header', false)=='bg_third'): ?>

  /*Model 3*/
  .indexbackimg,
  .justindexbg::before,
  .probackimg:after {
    height: 650px;
    border-radius: 0 0 100% 0;
  }

  <?php endif;
  ?><?php if (ot_get_option('type_of_bg_header', false)=='bg_no'): ?>

  /*Model4*/
  .justindexbg::before {
    content: unset !important;
  }

  .indexbackimg {
    background: transparent !important;
  }

  .preleft {
    color: #333;
  }

  .probackimg:after {
    content: unset !important;
  }

  <?php endif;

  ?>.indexbackimg,
  .probackimg {
    background-repeat: no-repeat !important;
    background-size: cover !important;

    background-position: <?php if (ot_get_option('position_bgimg', false)=="bg_right") {
      ?>right <?php
    }

    elseif (ot_get_option('position_bgimg', false)=="bg_left") {
      ?>left<?php
    }

    elseif (ot_get_option('position_bgimg', false)=="bg_center") {
      ?>center<?php
    }

    else {
      ?>right<?php
    }

    ?> !important;
  }

  .justindexbg::before {
    background: <?php echo ot_get_option('first_color_wwsh', 'linear-gradient(324deg, #d70d59 0%, #fc3924 100%)');
    ?>;
  }

  .shayanheader {
    background: <?php echo ot_get_option('header-back-color', 'transparent');
    ?>;
  }

  ul.learn-press-nav-tabs .course-nav.active:after, ul.learn-press-nav-tabs .course-nav:hover:after , #course-item-content-header, .scrollbar-light > .scroll-element.scroll-y .scroll-bar, .course-curriculum ul.curriculum-sections .section-content .course-item:before{
    background: <?php echo ot_get_option('first_color_wwsh', '#F50057');?>;
  }
  .course-curriculum ul.curriculum-sections .section-header{
    border-bottom: 1px solid <?php echo ot_get_option('first_color_wwsh', '#F50057');?>;
  }


<?php
$hm_designed_scrollbar = ot_get_option('hm_designed_scrollbar' , false);
if (ot_get_option('hm_designed_scrollbar' , false) == "off") {
  ?>
  <?php
}else {
  ?>
  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px <?php echo ot_get_option('first_color_wwsh', '#ed2324');
    ?> !important;
    border-radius: 10px;
  }
  ::-webkit-scrollbar-thumb {
    background: <?php echo ot_get_option('first_color_wwsh', '#ed2324');
    ?> !important;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: <?php echo ot_get_option('hover_first_color_wwsh', '#ed2324');
    ?> !important;
  }

  ::-webkit-scrollbar {
    width: 13px;
  }
  <?php
} ?>
