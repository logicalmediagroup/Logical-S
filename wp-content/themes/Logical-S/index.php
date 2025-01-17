<?php

/**
* Theme entry point
*
* @package Sage
*/

use Roots\Sage\Container;

// Load Composer autoloader if it exists
if (file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    require_once $composer;
}

// Load Sage container
if (!defined('WP_ENV')) {
    define('WP_ENV', 'development');
}

// Start the application
add_action('after_setup_theme', function () {
    if (!defined('SAGE_PATH')) {
        define('SAGE_PATH', __DIR__);
    }

    /**
    * Sage required files
    */
    if (file_exists($app = __DIR__ . '/app/app.php')) {
        require_once $app;
    }
});

