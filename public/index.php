<?php

// Set the correct document root to point to the public directory of Laravel.
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/public';

// Include the Laravel app's entry point (public/index.php)
require_once __DIR__ . '/public/index.php';
