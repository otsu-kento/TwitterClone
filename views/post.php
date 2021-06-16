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
    <title>つぶやく画面 / TwitterClone</title>
    <meta name="description" content="つぶやく画面です">
</head>
<body class="home">
    <div class="container">
    <?php include_once('../views/common/side.php'); ?>

        <div class="main">
            <div class="main-header">
                <h1>つぶやく</h1>
            </div>

            <div class="tweet-post">
                <div class="my-icon">
                    <img src="<?= HOME_URL; ?>views/img_uploaded/user/sample-person.jpg" alt="マイアイコン">
                </div>
                <div class="input-area">
                    <form action="post.php" method="post" enctype="multipart/form-data">
                        <textarea name="body" placeholder="いまどうしてる？" maxlength="140"></textarea>
                        <div class="bottom-area">
                            <div class="mb-0">
                                <input type="file" name="image" class="form-control form-control-sm">
                            </div>
                            <buttoon class="btn" type="submit">つぶやく</buttoon>
                        </div>
                    </form>
                </div>
            </div>

            <div class="ditch"></div>
        </div>
    </div>

    <?php include_once('../views/common/foot.php'); ?>
</body>
</html>