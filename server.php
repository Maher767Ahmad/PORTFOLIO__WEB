<?php
\ = urldecode(parse_url(\['REQUEST_URI'], PHP_URL_PATH));
if (\ !== '/' && file_exists(__DIR__.'/public'.\)) {
    return false;
}
require_once __DIR__.'/public/index.php';
