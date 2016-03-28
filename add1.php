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
//$second_level[2] = array(
//    10 => "后台菜单管理",
//    11 => "菜单分组管理",
//    12 => "特殊权限类别管理",
//    13 => "特殊权限管理",
//    14 => "特殊权限分组管理",
//    15 => "账号管理",
//);
//$second_level[3] = array(
//    20 => "广告分类管理",
//    21 => "广告位管理",
//    22 => "网站seo优化管理",
//    23 => "STMP邮件发送管理",
//    23 => "网站日志管理",
//);
//$second_level[4] = array(
//    20 => "资讯分类管理",
//    21 => "网站信息管理",
//);
$pid = $_GET['pid'];
$sid = $_GET['sid'];

foreach ($second_level[$pid] as $k => $v) {
    $selected = '';
    if ($sid == $k) {
        $selected = "selected='selected'";
    }
    echo"<option value='$k' $selected>$v</option>";
}
?>