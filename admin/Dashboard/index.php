<?php
session_start();

include "../../pages/db.php";
include "../../function/global.php";

include('page_include.php');

#----------------------------------
require 'header.php';
#~~~~~~~~~~~~~

echo $content_page->text;  #page include

#~~~~~~~~~~~~~
require 'footer.php';
