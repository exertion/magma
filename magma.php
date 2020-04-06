<?php
/**
 * @package Magma
 * @version 1.0.0
 */
/*
Plugin Name: Magma
Description: The Magma WordPress Plugin Framework.
Author: Exertion
Version: 1.0.0
Author URI: https://exertion.co
*/
require_once __DIR__ . '/vendor/autoload.php';

$plugin = new Spotlight\Foundation\Application(__DIR__);

function config($option, $default = null) {
    $config = new Spotlight\Foundation\Config(__DIR__, __FILE__);
    return $config->config($option, $default);
}
