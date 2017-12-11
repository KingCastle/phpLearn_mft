<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 11/12/2017
 * Time: 04:17 PM
 */

function user_access($string)
{

    $conn = mysqli_connect("localhost", "root", "", "class");
    mysqli_set_charset($conn, "utf8");


    $sql = "SELECT
t_user_group.access
FROM
t_user
INNER JOIN t_user_group ON t_user_group.id = t_user.id_grp

WHERE t_user.id=4

";
    $query = mysqli_query($conn, $sql);

    $fetch = mysqli_fetch_assoc($query);

    $access = json_decode($fetch['access'], true);

    if (in_array($string, $access)) {
        return true;
    } else {
        header("Location:?part=Main");
    }

}