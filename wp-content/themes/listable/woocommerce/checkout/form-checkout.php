<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
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
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>

<form id="order_review" name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
	<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>
		<div class="checkout__billing">
			<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
			<?php do_action( 'woocommerce_checkout_billing' ); ?>
			<?php do_action( 'woocommerce_checkout_shipping' ); ?>
		</div>
		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
	<?php endif; ?>

	<div class="woocommerce-mobile-place-order">
	<?php
		wc_get_template( 'checkout/place-order-button.php', array(
		'order_button_text'  => apply_filters( 'woocommerce_order_button_text', esc_html__( 'Place order', 'listable' ) )
		) );
	?>
	</div>

</form>

<form id="wcCouponForm" method="post"></form>
<form id="wcLoginForm" method="post"></form>
<form id="wcRegisterForm" method="post"></form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
