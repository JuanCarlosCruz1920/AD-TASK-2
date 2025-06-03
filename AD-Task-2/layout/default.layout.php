<?php

require_once BASE_PATH . '/components/header.component.php';

if (isset($page_content_file) && file_exists($page_content_file)) {
    require_once $page_content_file;
} else {
    echo '<div class="container"><h1>Content Not Found</h1><p>The content for this page could not be loaded.</p></div>';
}

require_once BASE_PATH . '/components/footer.component.php';