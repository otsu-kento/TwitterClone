<?php
// 設定関係を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../views/common/head.php'); ?>
    <title>会員登録画面 / TwitterClone</title>
    <meta name="description" content="会員登録画面です">
</head>
<body class="signup text-center">
    <main class="form-signup">
        <form action="Sign-up.php" method="post">
            <img src="/TwitterClone/views/img/logo-white.svg" alt="" class="logo-white">
            <h1>アカウントを作る</h1>
            <input type="text" class="form-control" name="nickname" autocomplete="off" placeholder="ニックネーム" maxlength="50" required autofocus>
            <input type="text" class="form-control" name="name" autocomplete="off" placeholder="ユーザー名、例)hello123" maxlength="50" required>
            <input type="email" class="form-control" name="email" autocomplete="off" placeholder="メールアドレス" maxlength="254" required>
            <input type="password" class="form-control" name="password" autocomplete="off" placeholder="パスワード" miinlength="4" maxlength="128" required>
            <button class="w-100 btn btn-lg" type="submit">登録する</button>
            <p class="mt-3 mb-2"><a href="Sign-in.php">ログインする</a></p>
            <p class="mt-2 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>

    <?php include_once('../views/common/foot.php'); ?>
</body>
</html>
