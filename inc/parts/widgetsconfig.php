<?php
function hamyar_wwsh_config_widgets() {
	register_sidebar( array(
		'name'          => 'ابزارک نمادها، سمت چپ در فوتر',
		'id'            => 'footer_left_namad',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="display:none;">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hamyar_wwsh_config_widgets' );
