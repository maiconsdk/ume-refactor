<?php

define('ROOT_DIR', __DIR__);
define('LAYOUT__DIR',ROOT_DIR . '/resources/layout');
define('DIST__DIR', 'http://' . $_SERVER['HTTP_PROTOCOL'] . $_SERVER['HTTP_HOST'] . '/_dist');

require_once './vendor/autoload.php';

require_once './resources/layout/header/header.php';
require_once './resources/layout/footer/footer.php';

if($_SERVER['REQUEST_URI'] === '/') {
    require_once './resources/views/pages/home/home-page.view.php';
}

if($_SERVER['REQUEST_URI'] === '/blog') {
    require_once './resources/views/pages/blog/blog-page.view.php';
}
