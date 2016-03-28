<?php
date_default_timezone_set('PRC');
header("Content-type:text/html; charset=UTF-8");

$parent_id_arr = isset($_POST['pid']) ? ($_POST['pid']) : array(0);
$parent_ids = '0,' . implode(',', $parent_id_arr);
$parent_id_arr = explode(',', $parent_ids);
$parent_id_arr = array_unique($parent_id_arr);
$parent_ids = implode(',', $parent_id_arr);
$parent_ids [2];
print_r($parent_ids[2]);