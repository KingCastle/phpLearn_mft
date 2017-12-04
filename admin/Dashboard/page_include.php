<?php
$Part = @$_REQUEST['part'];

switch ($Part) {

    case 'news':
        $path = 'pages/news.php';
        break;
    case 'newsform':
        $path = 'pages/newsform.php';
        break;


    #----------------------------------------------------------------------------------------
    default:
        $path = 'pages/main.php';
        break;
        $Part = 'Main';
}
include($path);

