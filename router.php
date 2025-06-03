<?php

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$scriptName = dirname($_SERVER['SCRIPT_NAME']);

if ($scriptName !== '/' && strpos($requestUri, $scriptName) === 0) {
    $requestPath = substr($requestUri, strlen($scriptName));
} else {
    $requestPath = $requestUri;
}

if ($requestPath !== '/') {
    $requestPath = rtrim($requestPath, '/');
}

$page_content_file = '';

switch ($requestPath) {
    case '/':
        $page_content_file = BASE_PATH . '/pages/home/index.php';
        break;
    case '/movie':
        $page_content_file = BASE_PATH . '/pages/movie-details/index.php';
        break;
    default:
        http_response_code(404);
        $page_content_file = BASE_PATH . '/pages/404.php'; 
        if (!file_exists($page_content_file)) {
            echo '<h1>404 Not Found</h1>';
            echo '<p>The page you requested could not be found.</p>';
            exit(); 
        }
        break;
}

require_once BASE_PATH . '/layout/default.layout.php';
