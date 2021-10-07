<?php
if (is_plugin_active( 'learnpress/learnpress.php' )) {
		function hm_learnpress_tooman( $currencies ) {
			$currencies['IRR'] = __( 'تومان ایران - اسپید لرن', 'learnpress' );
			return $currencies;
		}
		add_filter( 'learn-press/currencies', 'hm_learnpress_tooman' );
		function hm_learnpress_tooman_symbol( $symbols ) {
			$symbols['IRR'] = 'تومان';
			return $symbols;
		}
		add_filter( 'learn-press/currency-symbols', 'hm_learnpress_tooman_symbol' );
}
