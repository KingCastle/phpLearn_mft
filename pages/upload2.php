<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 29/11/2017
 * Time: 04:05 PM
 */

require '../vendor/autoload.php';


$image = new Bulletproof\Image($_FILES);

$image->setName("imageupload")

    ->setLocation(__DIR__ . "/uploads");

if($image["imageupload"]){
    if($image->upload()){
        echo $image->getName(); // samayo
        echo $image->getMime(); // gif
        echo $image->getLocation(); // avatars
        echo $image->getFullPath(); // avatars/samayo.gif
    }
}



?>



<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:<br>
    <input type="file" name="imageupload" id="imageupload"><br>
    <input type="submit" value="Upload Image" name="submit"><br>
</form>

</body>
</html>
