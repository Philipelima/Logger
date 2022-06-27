<?php


require_once '../vendor/autoload.php';

use Logger\Logger;
use Logger\Settings\Settings;

/**
 * settings  for the Logger
 * 1 - array
 */
Settings::settings([
    'path' => realpath(__DIR__.'/../')
]);


Logger::info("Hello, this is a test message.");

Logger::warn("Attention, failed login attempt.");

Logger::success("Success registering user.");

Logger::error("Failed to register user.");
