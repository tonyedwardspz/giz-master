<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 1 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$cookies=$_COOKIE;
$classes = array();
$classes[]="clearfix";
if(!empty($cookies['gridcookie'])){
	$classes[]='layout-'.$cookies['gridcookie']; 

}else{
	$classes[]="layout-full"; 
}
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>
<li <?php post_class( $classes ); ?> onclick="">
	<div class="product-item clearfix">
		<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
		<div class="product-image pull-left">

				<?php
					/**
					 * woocommerce_before_shop_loop_item_title hook
					 *
					 * @hooked woocommerce_show_product_loop_sale_flash - 10
					 * @hooked woocommerce_template_loop_product_thumbnail - 10
					 */
					do_action( 'woocommerce_before_shop_loop_item_title' );
				?>
		</div>
		<div class="product-details pull-right">
			<div class="product-details-inner clearfix">
				<div class="title-cat clearfix">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="product-categories pull-left">
					<?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( '', '', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), THEMENAME ) . ' ', '</span>' ); ?>
					</div>
					<div class="product-rating pull-right">
						
						<?php  echo $product->get_rating_html();?>
					</div>
				</div>
				<div class="product-desc">
					<div class="product-short-desc">
						<?php wc_get_template( 'single-product/short-description.php' );?>
					</div>
					<div class="product-price ">
						<?php
							/**
							 * woocommerce_after_shop_loop_item_title hook
							 *
							 * @hooked woocommerce_template_loop_rating - 5
							 * @hooked woocommerce_template_loop_price - 10
							 */
							do_action( 'woocommerce_after_shop_loop_item_title' );
						?>
					</div>
				</div>
				<div class="product-meta">
					<?php
						/**
						 * woocommerce_after_shop_loop_item hook
						 *
						 * @hooked woocommerce_template_loop_add_to_cart - 10
						 */
						do_action( 'woocommerce_after_shop_loop_item' ); 
					?>
					<div class="cshero-view-detail pull-right">
		                <a class="btn view-detail" href="<?php the_permalink(); ?>"><span>View Detail</span></a>
		            </div>
				</div>
			</div>
		
		</div>
	</div>
</li>
