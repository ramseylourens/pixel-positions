<?php

// Load Laravel environment
require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Get the secret key from .env
$secretKey = env('CRON_SECRET_KEY');

// Security check
if (!$secretKey || ($_GET['key'] ?? '') !== $secretKey) {
    http_response_code(403);
    die('Forbidden');
}

// Run Laravel scheduler
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->call('schedule:run');

echo 'Cron executed at ' . date('Y-m-d H:i:s');
