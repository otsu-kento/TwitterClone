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
    <title>通知画面 / TwitterClone</title>
    <meta name="description" content="通知画面です">
</head>
<body class="home notification text-center">
    <div class="container">
    <?php include_once('../views/common/side.php'); ?>

        <div class="main">
            <div class="main-header">
                <h1>通知</h1>
            </div>
            
            <div class="ditch"></div>

            <div class="notification-list">
                <?php if (isset($_GET['case'])): ?>
                    <p class="no-result">通知はまだありません。</p>
                <?php else: ?>
                    <div class="notification-item">
                        <div class="user">
                            <img src="<?= HOME_URL; ?>views/img_uploaded/user/sample-person.jpg" alt="">
                        </div>
                        <div class="content">
                            <p>いいね！されました。</p>
                        </div>
                    </div>

                    <div class="notification-item">
                        <div class="user">
                            <img src="<?= HOME_URL; ?>views/img/icon-default-user.svg" alt="">
                        </div>
                        <div class="content">
                            <p>フォローされました。</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
                
        </div>
    </div>

    <?php include_once('../views/common/foot.php'); ?>
</body>
</html>