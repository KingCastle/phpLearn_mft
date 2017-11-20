<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 20/11/2017
 * Time: 04:01 PM
 */
include "jdf/jdf.php";

function m_date($time, $format = false)
{
    if ($format) {
        $frm = $format;
    } else {
        $frm = 'Y/m/d';
    }
    return jdate($frm, strtotime($time));
}

function m_summary($text, $length = 200)
{
    if (strlen($text) > $length) {
        return substr($text, 0, $length) . '...';
    }
}

