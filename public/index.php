<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// Read an early env value from the project's `.env` so we can decide whether
// to hide deprecation warnings before Laravel's bootstrap (the .env is not
// yet loaded by the framework at this point). This allows a developer to set
// `HIDE_DEPRECATIONS=true` in `.env` to suppress deprecation notices in the
// browser UI while keeping other error reporting active.
$hideDeprecations = false;
$envPath = __DIR__ . '/../.env';
if (file_exists($envPath) && is_readable($envPath)) {
    $envContents = file_get_contents($envPath);

    // Check HIDE_DEPRECATIONS first if present
    if (preg_match('/^HIDE_DEPRECATIONS\s*=\s*(.*)$/mi', $envContents, $m)) {
        $val = trim($m[1]);
        $val = trim($val, " \t\n\r\0\x0B\"'");
        $hideDeprecations = in_array(strtolower($val), ['1', 'true', 'yes', 'on'], true);
    } elseif (preg_match('/^APP_DEBUG\s*=\s*(.*)$/mi', $envContents, $m2)) {
        // Fallback: if HIDE_DEPRECATIONS isn't set, use APP_DEBUG as a hint
        $val2 = trim($m2[1]);
        $val2 = trim($val2, " \t\n\r\0\x0B\"'");
        // Only hide deprecations when APP_DEBUG is truthy
        $hideDeprecations = in_array(strtolower($val2), ['1', 'true', 'yes', 'on'], true);
    }
}

if ($hideDeprecations) {
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);
}

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
