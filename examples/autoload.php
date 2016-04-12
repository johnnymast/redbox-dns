<?php
/**
 * We want to make sure we load the correct autoloader
 * where ever we are.
 */
date_default_timezone_set('EUROPE/AMSTERDAM');

if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    require_once __DIR__ . '/../../../autoload.php';
}