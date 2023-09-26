<?php 


$root=$_SERVER['DOCUMENT_ROOT'].'/marcoangelini/app/';

define('__ROOT__', $root);

$upload_path=$_SERVER['DOCUMENT_ROOT'].'/marcoangelini/public/images/';

define('UPLOAD_DIR', $upload_path);

define('PUBLIC_DIR', "http://".$_SERVER['SERVER_NAME']."/marcoangelini/public/");

define('URL_IMAGES', "http://".$_SERVER['SERVER_NAME']."/marcoangelini/public/images/");

$url_general="http://".$_SERVER['SERVER_NAME']."/marcoangelini/public/";

define('URL_GEN', $url_general);




