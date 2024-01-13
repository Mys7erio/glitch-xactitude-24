<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    include('index.html');
    exit();
}
if ($uri === '/upload') {
    include('upload.html');
    exit();
}

?>
