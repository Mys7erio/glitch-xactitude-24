<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    include('index.html');
    exit();
}
if ($uri === '/admin') {
    include('admin.html');
    exit();
}

?>
