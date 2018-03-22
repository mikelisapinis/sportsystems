<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="woocommerce-order">

	<?php if ( $order ) : ?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'trenazieri' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'trenazieri' ) ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My account', 'trenazieri' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'trenazieri' ), $order ); ?></p>

			
			<div class="card-group woocommerce-order-overview woocommerce-table woocommerce-thankyou-order-details order_details">
				
					<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php _e( 'Order number:', 'trenazieri' ); ?></h5>
							<p class="card-text"><strong><?php echo $order->get_order_number(); ?></strong></p>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php _e( 'Date:', 'trenazieri' ); ?></h5>
							<p class="card-text"><strong><?php echo wc_format_datetime( $order->get_date_created() ); ?></strong></p>
						</div>
					</div>

					<?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
						<div class="card">
							<div class="card-body">
								<h5 class="card-title"><?php _e( 'Email:', 'trenazieri' ); ?></h5>
								<p class="card-text"><strong><?php echo $order->get_billing_email(); ?></strong></p>
							</div>
						</div>	
					<?php endif; ?>

					<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php _e( 'Total:', 'trenazieri' ); ?></h5>
							<p class="card-text"><strong><?php echo $order->get_formatted_order_total(); ?></strong></p>
						</div>
					</div>

					<?php if ( $order->get_payment_method_title() ) : ?>
						<div class="card">
							<div class="card-body">
								<h5 class="card-title"><?php _e( 'Payment method:', 'trenazieri' ); ?></h5>
								<p class="card-text"><strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong></p>
							</div>
						</div>
					<?php endif; ?>
			</div>

		<?php endif; ?>
		<div class="card">
			<div class="card-body">
				<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
			</div>
		</div>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
	<?php else : ?>
		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'trenazieri' ), null ); ?></p
	<?php endif; ?>

</div>
