<?php

var_dump($_POST);
$rute = $_POST['nota'];
$content = $_POST['file'];

$result = file_put_contents($rute, $content);

if(! $result)
    header('Location: ' . $_SERVER['HTTP_REFERER']);
