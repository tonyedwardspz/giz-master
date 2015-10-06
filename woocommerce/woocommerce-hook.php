<?php
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_after_single_product_summary' ,'woocommerce_output_product_data_tabs');
remove_action( 'woocommerce_after_single_product_summary' ,'woocommerce_upsell_display');
?>