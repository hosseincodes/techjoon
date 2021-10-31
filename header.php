<?php
/* Last Edited: 1.0.0 */

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        if ( is_plugin_active( 'wordpress-seo/wp-seo.php' ) ) {
    ?>

    <title><?php wp_title(); ?></title>

    <?php } else{ ?>

    <?php if ( is_home()){ ?>

    <title><?php bloginfo('name'); ?></title>

    <?php } elseif (is_404()) { ?>

    <title>404 | <?php bloginfo('name'); ?></title>

    <?php } else{ ?>

    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>

    <?php }} ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body <?php body_class(); ?>>

<!-- Header -->

<?php wp_head(); ?>