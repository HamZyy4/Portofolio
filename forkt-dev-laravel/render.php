<?php
// Usage: php render.php   → writes public/portfolio.html from resources/views/portfolio.php
ob_start();
include __DIR__ . '/resources/views/portfolio.php';
file_put_contents(__DIR__ . '/public/portfolio.html', ob_get_clean());
echo "public/portfolio.html written\n";
