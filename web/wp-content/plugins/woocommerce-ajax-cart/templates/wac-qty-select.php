<?php
/**
 * Cart Page
 *
 * Custom template for plugin WooCommerce Ajax Cart
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="quantity">
    <select name="<?php echo esc_attr( $input_name ); ?>"
            title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) ?>"
            class="input-text qty text"
            max="<?php echo wac_option('select_items'); ?>">
        <?php for ( $i=0; $i <= wac_option('select_items') && ( empty($max_value) || $i <= $max_value ); $i++ ): ?>
            <option <?php if ( esc_attr( $input_value ) == $i ): ?>selected="selected"<?php endif; ?>
                    value="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
        <?php endfor; ?>
    </select>
</div>
