<?php
// エラー表示あり
ini_set('display_errors', 1);
error_reporting(E_ALL);
// 日本時間にする
date_default_timezone_set('Asia/Tokyo');
// URLディレクトリ設定
define('HOME_URL', '/TwitterClone/');
// データベースの説毒情報
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'twitter_clone');