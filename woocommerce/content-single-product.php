<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;
?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
	<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="product-details clearfix">
			<div class="product-details-inner clearfix">
				<div class="product-image pull-left">
					<?php wc_get_template( 'single-product/sale-flash.php' ); ?>
					<?php wc_get_template( 'single-product/product-image.php' ); ?>
				</div>
				<div class="product-summary pull-right">
					<div class="product-title clearfix">
						<div class="product-title-cat pull-left">
							<h3><?php the_title(); ?></h3>
							<div class="product-categories pull-left">
								<?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( '', '', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), THEMENAME ) . ' ', '</span>' ); ?>
							</div>
						</div>
						<div class="product-rating pull-right">
							<div class="product-reviews clearfix">
								<?php  
								printf( _nx( '1 Review, Add to you review', '%1$s Reviews, Add to you review', $product->get_review_count(), 'review title', THEMENAME ), number_format_i18n( $product->get_review_count() ) );
								//echo $product->get_review_count();?>
							</div>
							<?php  echo $product->get_rating_html();?>
						</div>
					</div>
					<div class="product-desc clearfix">
						<?php wc_get_template( 'single-product/short-description.php' );?>
					</div>
					<div class="product-meta clearfix">
						<?php if($product->get_stock_quantity() > 0):?>
						<div class="product-stock clearfix">
							<?php 
							printf( _nx( 'AVAILABILITY: %1$s in Stock', ' AVAILABILITY: %1$s in Stock', $product->get_stock_quantity(), 'review title', THEMENAME ), number_format_i18n( $product->get_stock_quantity() ) );
							?>
						</div>
						<?php endif; ?>
						<div class="product-price">
							<?php wc_get_template( 'single-product/price.php' );?>
						</div>
					</div>
					<div class="product-add-to-cart clearfix">
						<?php do_action( 'woocommerce_' . $product->product_type . '_add_to_cart'  ); ?>
					</div>
				</div>
			</div>
			<div class="product-tabs clearfix">
				<?php wc_get_template( 'single-product/tabs/tabs.php' ); ?>
			</div>
		</div>
		<div class="product-similiar clearfix">
			<?php
				/**
				 * woocommerce_after_single_product_summary hook
				 *
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>
		</div>

		<meta itemprop="url" content="<?php the_permalink(); ?>" />

	</div><!-- #product-<?php the_ID(); ?> -->
<?php do_action( 'woocommerce_after_single_product' ); ?>
