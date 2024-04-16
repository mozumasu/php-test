<?php
session_start();

$userId = $_POST['userid'];

if (!isset($_SESSION[$userId])) {
    $_SESSION[$userId] = $userId;
    echo "ログインしました。<br>";
    echo "\$_SESSION[\$userId] : " . $_SESSION[$userId];
} else {
    echo "ログイン済みです。";
}
