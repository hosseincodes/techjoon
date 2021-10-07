<?php
function hamyar_config_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'منوی اصلی سایت' ),
			'mobile-menu' => __( 'منوی موبایل (از ساب منو و منوهای دارای زیر مجموعه، استفاده نکنید)' ),
    )
  );
}
add_action( 'init', 'hamyar_config_menus' );