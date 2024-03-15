<?php
/**
 * Bootstrap for Tests
 * 
 * @package Boxuk/Iconography
 */
require_once dirname( __DIR__ ) . '/vendor/autoload.php';
WP_Mock::bootstrap();
require_once __DIR__ . '/../iconography.php';
