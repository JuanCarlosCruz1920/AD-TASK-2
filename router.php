<?php

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$scriptName = dirname($_SERVER['SCRIPT_NAME']);

// Remove the script name from the request URI to get the clean path
if ($scriptName !== '/' && strpos($requestUri, $scriptName) === 0) {
    $requestPath = substr($requestUri, strlen($scriptName));
} else {
    $requestPath = $requestUri;
}

// Remove trailing slashes, except for the root path
if ($requestPath !== '/') {
    $requestPath = rtrim($requestPath, '/');
}

// Initialize a variable to hold the path to the content file for the layout
$page_content_file = '';

// Define routes and set the content file
switch ($requestPath) {
    case '/':
        $page_content_file = BASE_PATH . '/pages/home/index.php';
        break;
    case '/movie':
        $page_content_file = BASE_PATH . '/pages/movie-details/index.php';
        break;
    default:
        // Handle 404 Not Found
        http_response_code(404);
        $page_content_file = BASE_PATH . '/pages/404.php'; // You might want to create a 404.php
        // For now, if 404.php doesn't exist, we'll just echo the error directly.
        if (!file_exists($page_content_file)) {
            echo '<h1>404 Not Found</h1>';
            echo '<p>The page you requested could not be found.</p>';
            exit(); // Stop execution if no 404 page
        }
        break;
}

// Now, include the default layout, which will then include the specific page content
require_once BASE_PATH . '/layout/default.layout.php';