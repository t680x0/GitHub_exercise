<?php
$link = mysql_connect('127.0.0.1', 'test', 'Test1234!');
if (!$link) {
die('接続失敗！
'.mysql_error());
} else {
echo '接続成功！';
}
?>
