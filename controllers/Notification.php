<?php
///////////////////////////////////////
// 通知コントローラー
///////////////////////////////////////

// 設定を読み込み
include_once '../config.php';
// 便利な関数を読み込み
include_once '../util.php';

// 通知データ操作モデルを読み込み
include_once '../models/Notifications_model.php';

// ログインしているか
$user = getUserSession();
if (!$user) {
    // ログインしていない
    header('Location:' . HOME_URL . 'controllers/Sign-in.php');
    exit;
}

// 画面表示
$view_user = $user;
// 通知一覧
$view_notifications = findNotifications($user['id']);
include_once '../views/notification.php';