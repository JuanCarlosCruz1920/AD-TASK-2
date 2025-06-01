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

switch ($requestPath) {
    case '/':
        require __DIR__ . '/pages/home/index.php';
        break;
    case '/movie':
        require __DIR__ . '/pages/movie-details/index.php';
        break;
    default:
        http_response_code(404);
        echo '<h1>404 Not Found</h1>';
        echo '<p>The page you requested could not be found.</p>';
        break;
}