<?php
session_start();

// セッション変数に値を代入
$_SESSION['keyword'] = 'PHP';
$_SESSION['number'] = 100;
$_SESSION['array'] = ['JavaScript','PHP','SQL'];


echo $_SESSION['keyword'];
exit();

?>