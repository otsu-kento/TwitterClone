<?php
///////////////////////////////////////
// サインアップコントローラー
///////////////////////////////////////

// 設定を読み込み
include_once '../config.php';
// ユーザーデータ制作モデルを読み込み
include_once '../models/Users_model.php';

// エラー格納用
$error_messages = [];

// ユーザー作成
// $_POSTを使用しているが、filter_input関数という便利な関数がある。
if (isset($_POST['nickname']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $data = [
        'nickname' => (string)$_POST['nickname'],
        'name' => (string)$_POST['name'],
        'email' => (string)$_POST['email'],
        'password' => (string)$_POST['password'],
    ];

    // バリデーション
    // すべての入力値に対して行う文字数制限
    $length = mb_strlen($data['nickname']);
    if ($length < 1 || $length > 50) {
        $error_messages[] = 'ニックネームは1〜50文字にしてください。';
    }

    // メールアドレス
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $error_messages[] = 'メールアドレスが不正です。';
    }

    // 既存チェック
    if (findUser($data['email'])) {
        $error_messages[] = 'このメールアドレスは使用されています。';
    }
    if (findUser($data['name'])) {
        $error_messages[] = 'このユーザー名は使用されています。';
    }
    // エラーがなければ登録する
    if (!$error_messages) {
        if (createUser($data)) {
            // ログイン画面に遷移
            header('Location:' . HOME_URL . 'controllers/sign-in.php');
            exit;
        }
    }
}

// 画面表示
$view_error_messages = $error_messages;
include_once '../views/sign-up.php';