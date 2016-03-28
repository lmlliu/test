<?php

$second_level[1] = array(
    10 => "系统设置下级1",
    11 => "系统设置下级2",
    12 => "系统设置下级3",
    13 => "系统设置下级4",
);
$second_level[2] = array(
    20 => "全局设置下级1",
    21 => "全局设置下级2",
    22 => "全局设置下级3",
    23 => "全局设置下级4",
);
$pid = $_GET['pid'];
$sid = $_GET['sid'];
foreach ($second_level[$pid] as $k => $v) {
    $selected = "selected='selected'";
    echo"<option value='$k'>$v</option>";
}
?>