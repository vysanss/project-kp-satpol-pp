<?php

use Illuminate\Http\Request;

// Mulai session untuk pengecekan login
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Jika URL mengandung '/admin/' dan bukan '/admin/login', cek status login admin
if (
    strpos($_SERVER['REQUEST_URI'], '/admin/') === 0 &&
    strpos($_SERVER['REQUEST_URI'], '/admin/login') === false
) {
    if (empty($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        // Pastikan file alert ada
        if (file_exists(__DIR__ . '/../resources/views/admin_alert.blade.php')) {
            include __DIR__ . '/../resources/views/admin_alert.blade.php';
        } else {
            echo "File admin_alert.blade.php tidak ditemukan.";
        }
        exit;
    }
}

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
