<?php

$url = isset($_POST['url']) ? htmlspecialchars($_POST['url']) : 'no link';
include('simple_html_dom.php');
$get_title=file_get_html($url);
var_dump($get_title);
echo $url;

?>