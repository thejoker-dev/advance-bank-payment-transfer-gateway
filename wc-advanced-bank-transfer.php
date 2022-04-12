<?php
/**
 * Plugin Name: Transferencia Electrónica Avanzada o Deposito Bancario
 * Plugin URI: https://networkerd.cl
 * Description: Realiza Pagos por Transferencia Electrónica Avanzada o Deposito Bancario dentro el Checkout.
 * Author: J.
 * Author URI: https://networkerd.cl
 * Version: 1.0.4
 * Tested up to: 5.8
 */

defined('ABSPATH') or exit;


// Make sure WooCommerce is active
if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    return;
}

add_action('plugins_loaded', 'abpt_gateway_init', 11);

function abpt_gateway_init()
{
    require_once(plugin_basename('classes/wc_gateway_advance_bank_transfer.php'));
}

require_once(plugin_basename('includes/hooks.php'));
