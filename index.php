<?php

define('PATH_CONFIG', 'app/config/');
define('PATH_CONTROLLER', 'app/controller/');
define('PATH_MODEL', 'app/model/');
define('PATH_VIEW', 'resources/view/');
define('PATH_VENDOR', 'vendor/');
define('PATH_FUNCTION', 'resources/function/');
define('PATH_IMAGE', 'resources/images/');

// Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
$project_location = "/BNSP";
$me = $project_location;

// For get URL PATH
$request = strtok($_SERVER["REQUEST_URI"], '?');

switch ($request) {
    case $me.'/' :
        include PATH_VIEW . 'beasiswa.php';
        break;
    case $me.'/Pendaftaran' :
        include PATH_VIEW . 'pendaftaran.php';
        break;
    case $me.'/Hasil' :
        include PATH_VIEW . 'hasil.php';
        break;
    case $me.'/detail' :
        include PATH_VIEW . 'detail_beasiswa.php';
        break;
    case $me.'/insert' :
        include PATH_FUNCTION . 'insert.php';
        break;
    default:
        
        http_response_code(404);
        echo $request;
        // echo '$request2 = '.$request2;
        echo '===seharusnya===';
        echo $me.'/about';
        echo "404";
    
        break;
}