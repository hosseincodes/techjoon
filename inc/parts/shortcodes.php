<?php
function hamyarlearn_button( $atts , $content = null ) {
return '<div class="bctagosmart contentcta">'.$content.'</div>';
}
add_shortcode( 'button', 'hamyarlearn_button' );
function hamyarlearn_bold( $atts , $content = null ) {
return '<strong>'.$content.'</strong>';
}
add_shortcode( 'b', 'hamyarlearn_bold' );
function hamyarlearn_redalert( $atts , $content = null ) {
return '<div class="redalertarea">'.$content.'</div>';
}
add_shortcode( 'redalert', 'hamyarlearn_redalert' );
function hamyarlearn_zardalert( $atts , $content = null ) {
return '<div class="zardalertarea">'.$content.'</div>';
}
add_shortcode( 'zardalert', 'hamyarlearn_zardalert' );
