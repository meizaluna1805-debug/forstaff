<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Penyimpanan sementara Laravel di Vercel.
$temporaryPath = '/tmp/forstaff';
$storagePath = $temporaryPath.'/storage';
$cachePath = $temporaryPath.'/bootstrap/cache';

$directories = [
    $cachePath,
    $storagePath.'/app',
    $storagePath.'/framework/cache/data',
    $storagePath.'/framework/sessions',
    $storagePath.'/framework/views',
    $storagePath.'/logs',
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

$paths = [
    'APP_CONFIG_CACHE' => $cachePath.'/config.php',
    'APP_EVENTS_CACHE' => $cachePath.'/events.php',
    'APP_PACKAGES_CACHE' => $cachePath.'/packages.php',
    'APP_ROUTES_CACHE' => $cachePath.'/routes.php',
    'APP_SERVICES_CACHE' => $cachePath.'/services.php',
    'VIEW_COMPILED_PATH' => $storagePath.'/framework/views',
];

foreach ($paths as $name => $path) {
    putenv($name.'='.$path);
    $_ENV[$name] = $path;
    $_SERVER[$name] = $path;
}

require __DIR__.'/../vendor/autoload.php';

/** @var Application $app */
$app = require __DIR__.'/../bootstrap/app.php';

$app->useStoragePath($storagePath);

$app->handleRequest(Request::capture());