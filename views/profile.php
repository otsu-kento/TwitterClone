<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/TwitterClone/views/img/logo-twitterblue.svg">
    <!-- bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/TwitterClone/views/css/style.css" rel="stylesheet">
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous" defer></script>
    <!--  いいね！JS-->
    <script src="/TwitterClone/views/js/like.js" defer></script>

    <title>プロフィール画面 / TwitterClone</title>
    <meta name="description" content="プロフィール画面です">
</head>
<body class="home profile text-center">
    <div class="container">
        <div class="side">
            <div class="side-inner">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="/TwitterClone/views/img/logo-twitterblue.svg" alt="ロゴアイコン" class="logo-icon"></a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="/TwitterClone/views/img/icon-home.svg" alt="ホームアイコン"></a></li>
                    <li class="nav-item"><a href="serch.php" class="nav-link"><img src="/TwitterClone/views/img/icon-search.svg" alt="サーチアイコン"></a></li>
                    <li class="nav-item"><a href="notification.php" class="nav-link"><img src="/TwitterClone/views/img/icon-notification.svg" alt="ベルアイコン"></a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link"><img src="/TwitterClone/views/img/icon-profile.svg" alt="プロフィールアイコン"></a></li>
                    <li class="nav-item"><a href="post.php" class="nav-link"><img src="/TwitterClone/views/img/icon-post-tweet-twitterblue.svg" alt="羽アイコン" class="post-tweet"></a></li>
                    <li class="nav-item my-icon"><img src="/TwitterClone/views/img_uploaded/user/sample-person.jpg" class="js-popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="<a href='profile.php'>プロフィール</a><br><a href='sign-out.php'>ログアウト</a>" data-bs-html="true" alt="マイアイコン"></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="main-header">
                <h1>太郎</h1>
            </div>
            <div class="profile-area">
                <div class="top">
                    <div class="user"><img src="/TwitterClone/views/img_uploaded/user/sample-person.jpg" alt=""></div>
                    
                    <?php if (isset($_GET['user_id'])): ?>
                        <!-- 他人のプロフィール -->
                        <?php if (isset($_GET['case'])): ?>
                        <button class="btn btn-sm">フォローを外す</button>
                        <?php else: ?>
                        <button class="btn btn-sm btn-reverse">フォローする</button>
                        <?php endif; ?>
                    <?php else: ?>
                        <!-- 自分のプロフィール -->
                        <button class="btn btn-reverse btn-sm" type="submit" data-bs-toggle="modal" data-bs-target="#js-modal">プロフィール編集</button>

                        <div class="modal fade" id="js-modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="profile.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <h5 class="modal-title">プロフィールを編集</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="user">
                                                <img src="/TwitterClone/views/img_uploaded/user/sample-person.jpg" alt="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-1">プロフィール写真</label>
                                                <input type="file" class="form-control form-control-sm" name="image">
                                            </div>
                                            <input type="text" class="mb-4 form-control" name="nickname" maxlength="50" value="太郎" placeholder="ニックネーム"　required>
                                            <input type="text" class="mb-4 form-control" name="name" maxlength="50" value="taro" placeholder="ユーザー名"　required>
                                            <input type="email" class="mb-4 form-control" name="email" maxlength="254" value="taro@icloud.com" placeholder="メールアドレス"　required>
                                            <input type="password" class="mb-4 form-control" name="nickname" minlength="4" maxlength="128" value="" placeholder="パスワード変更する場合ご入力ください">
                                            <div class="modal-footer">
                                                <button class="btn btn-reverse" data-bs-dismiss="modal">キャンセル</button>
                                                <button class="btn" type="submit">保存する</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="name">太郎</div>
                <div class="text-muted">@taro</div>

                <div class="follow-follower">
                    <div class="follow-count">1</div>
                    <div class="follow-text">フォロー中</div>
                    <div class="follow-count">1</div>
                    <div class="follow-text">フォロワー</div>
                </div>
            </div>

            <div class="ditch"></div>
                

            <!-- TODO:後日実装
                ツイート一覧
            -->
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.js-popover').popover({
                container: 'body'
            })
        }, false);
    </script>
</body>
</html>