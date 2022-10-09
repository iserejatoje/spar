<?php
include_once('before.php');

const IB_SALES = 1;
const IB_SHOPS = 2;

function P($array)
{
    echo '<pre>' . var_export($array, true) . '</pre>';
}

function getHumanDate($date) {
    return strtolower(FormatDate("d F Y", MakeTimeStamp($date)));
}