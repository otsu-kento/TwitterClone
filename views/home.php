<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ホーム画面です">
    <link rel="icon" href="/TwitterClone/views/img/logo-twitterblue.svg">
    <!-- bootsyrap CSS  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="/TwitterClone/views/css/style.css" rel="stylesheet">
    <title>ホーム画面 / TwitterClone</title>
</head>
<body class="home">
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
                    <li class="nav-item my-icon"><img src="/TwitterClone/views/img_uploaded/user/sample-person.jpg" alt="マイアイコン"></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="main-header">
                <h1>ホーム</h1>
            </div>
            <div class="tweet-post">
                <div class="my-icon">
                    <img src="/TwitterClone/views/img_uploaded/user/sample-person.jpg" alt="マイアイコン">
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
                
            <div class="tweet-list">
                <div class="tweet">
                    <div class="user">
                        <a href="profile.php?user_id=1">
                        <img src="/TwitterClone/views/img_uploaded/user/sample-person.jpg" alt="マイアイコン">
                        </a>
                    </div>
                    <div class="content">
                        <div class="name">
                            <a href="profile.php?user_id=1">
                                <span class="nickname">太郎</span>
                                <span class="user-name">@taro ・23日前</span>
                            </a>
                        </div>
                        <p>今プログラミングをしています。</p>
                        <div class="icon-list">
                            <div class="like">
                                <img src="/TwitterClone/views/img/icon-heart.svg" alt="ハートアイコン">
                            </div>
                            <div class="like-count">0</div>
                        </div>
                    </div>
                </div>

                <div class="tweet">
                    <div class="user">
                        <a href="profile.php?user_id=2">
                        <img src="/TwitterClone/views/img/icon-default-user.svg" alt="マイアイコン">
                        </a>
                    </div>
                    <div class="content">
                        <div class="name">
                            <a href="profile.php?user_id=2">
                                <span class="nickname">次郎</span>
                                <span class="user-name">@jiro ・24日前</span>
                            </a>
                        </div>
                        <p>コワーキングスペースをオープンしました！</p>
                        <img src="/TwitterClone/views/img_uploaded/tweet/sample-post.jpg" alt="ツイート画像" class="post-image">
                        <div class="icon-list">
                            <div class="like">
                                <img src="/TwitterClone/views/img/icon-heart-twitterblue.svg" alt="青いハートアイコン">
                            </div>
                            <div class="like-count">1</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>