<?php
/**
 * Show options for ordering
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="woocommerce-filter clearfix">
	<div class="products-filter products-ordering ">
		<label>Sort by:</label>
		<form class="woocommerce-ordering pull-left" method="get">
			<select name="orderby" class="orderby">
				<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
					<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
				<?php endforeach; ?>
			</select>

			<?php
				// Keep query string vars intact
				foreach ( $_GET as $key => $val ) {
					if ( 'orderby' === $key || 'submit' === $key || 'number_products' === $key ) {
						continue;
					}
					if ( is_array( $val ) ) {
						foreach( $val as $innerVal ) {
							echo '<input type="hidden" name="' . esc_attr( $key ) . '[]" value="' . esc_attr( $innerVal ) . '" />';
						}
					} else {
						echo '<input type="hidden" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
					}
				}
			?>
		</form>
	</div>
	<?php echo jc_woocommerce_products_per_page(); ?>
	<div class="products-filter change-layout ">
		<label><?php _e('View:',THEMENAME); ?></label>
		<a href="javascript:viod(0)" class="layout-full active" ><i class="fa fa-th-list"></i></a>
		<a href="javascript:viod(0)" class="layout-grid" ><i class="fa fa-th"></i></a>
	</div>
</div>