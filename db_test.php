<?php
$link = mysqli_connect('127.0.0.1', 'test', 'Test1234!');
if (!$link) {
die('接続失敗！
'.mysqli_connect_error());
} else {
echo '接続成功！';
mysqli_set_charset($link,"utf8");
}
?>
