<?php 


$root=$_SERVER['DOCUMENT_ROOT'].'/app/';

define('__ROOT__', $root);

$upload_path=$_SERVER['DOCUMENT_ROOT'].'/public/images/';

define('UPLOAD_DIR', $upload_path);

define('PUBLIC_DIR', "https://".$_SERVER['SERVER_NAME']."/public/");

define('URL_IMAGES', "https://".$_SERVER['SERVER_NAME']."/public/images/");

$url_general="https://".$_SERVER['SERVER_NAME']."/public/";

define('URL_GEN', $url_general);




