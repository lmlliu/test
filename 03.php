<?php
$first_menu = array(
    1 => '系统设置',
    2 => '全局设置',
    3 => '网站管理'
);
$str = '0,1,4';
$pid_arr = explaode(',', $str);
?>
<ul>
    <?php foreach ($first_menu as $id => $name) { ?>
        <li><?php echo $name; ?></li>
    <?php } ?>
</ul>