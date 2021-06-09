<?php
// エラー表示あり
ini_set('display_errors', 1);
error_reporting(E_ALL);
// 日本時間にする
date_default_timezone_set('Asia/Tokyo');
// URLディレクトリ設定
define('HOME_URL', '/TwitterClone/');

//////////////////////////////////////////
// ツイート一覧
//////////////////////////////////////////
$view_tweets = [
    [
        'user_id' => 1,
        'user_name' => 'taro',
        'user_nickname' => '太郎',
        'user_image_name' => 'sample-person.jpg',
        'tweet_body' => '今プログラミングをしています。',
        'tweet_image_name' => null,
        'tweet_created_at' => '2021-03-15 14:00:00',
        'like_id' => null,
        'like_count' => 0,
    ],
    [
        'user_id' => 2,
        'user_name' => 'jiro',
        'user_nickname' => '次郎',
        'user_image_name' => null,
        'tweet_body' => 'コワーキングスペースをオープンしました！',
        'tweet_image_name' => 'sample-post.jpg',
        'tweet_created_at' => '2021-03-14 14:00:00',
        'like_id' => 1,
        'like_count' => 1,
    ],
];

//////////////////////////////////////////
// 便利な関数
//////////////////////////////////////////
/**
 * 画像ファイル名から画像のURLを生成
 * @param string $name ファイル名
 * @param string $type ユーザー画像かツイート画像
 * @return string
 */
function buildImagePath(string $name = null, string $type)
{
    if ($type === 'user' && !isset($name)) {
        return HOME_URL . 'views/img/icon-default-user.svg';
    }

    return HOME_URL . 'views/img_uploaded/' . $type . '/' . htmlspecialchars($name);
}
/**
 * 指定した日時からどれだけ経過したかを取得
 * 
 * @param string $datetime 日時
 * @return string
 */
function convertToDayTimeAgo(string $datetime)
{
    $unix = strtotime($datetime);
    $now = time();
    $diff_sec = $now - $unix;

    if ($diff_sec < 60) {
        $time = $diff_sec;
        $unix = '秒前';
    } elseif ($diff_sec < 3600) {
        $time = $diff_sec / 60;
        $unix = '分前';
    } elseif ($diff_sec < 86400) {
        $time = $diff_sec / 3600;
        $unix = '時間前';
    } elseif ($diff_sec < 2764000) {
        $time = $diff_sec / 86400;
        $unix = '日前';
    } else {
        if(date('Y') != date('Y', $unix)) {
            $time = date('Y年m月j日', $unix);
        } else {
            $time = date('m月j日', $unix); 
        }
        return $time;
    }

    return (int)$time . $unix; 
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ホーム画面です">
    <link rel="icon" href="<?= HOME_URL; ?>views/img/logo-twitterblue.svg">
    <!-- bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="<?= HOME_URL; ?>views/css/style.css" rel="stylesheet">
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous" defer></script>
    <!--  いいね！JS-->
    <script src="<?= HOME_URL; ?>views/js/like.js" defer></script>

    <title>ホーム画面 / TwitterClone</title>
</head>
<body class="home">
    <div class="container">
        <div class="side">
            <div class="side-inner">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/logo-twitterblue.svg" alt="ロゴアイコン" class="logo-icon"></a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-home.svg" alt="ホームアイコン"></a></li>
                    <li class="nav-item"><a href="serch.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-search.svg" alt="サーチアイコン"></a></li>
                    <li class="nav-item"><a href="notification.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-notification.svg" alt="ベルアイコン"></a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-profile.svg" alt="プロフィールアイコン"></a></li>
                    <li class="nav-item"><a href="post.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-post-tweet-twitterblue.svg" alt="羽アイコン" class="post-tweet"></a></li>
                    <li class="nav-item my-icon"><img src="<?= HOME_URL; ?>views/img_uploaded/user/sample-person.jpg" class="js-popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="<a href='profile.php'>プロフィール</a><br><a href='sign-out.php'>ログアウト</a>" data-bs-html="true" alt="マイアイコン"></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="main-header">
                <h1>ホーム</h1>
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
                
        <?php if (empty($view_tweets)): ?>
            <p class="p-3">ツイートがまだありません</p>
        <?php else: ?>
            <div class="tweet-list">
                <?php foreach ($view_tweets as $view_tweet):?>
                    <div class="tweet">
                        <div class="user">
                            <a href="profile.php?user_id=1">
                                <img src="<?= buildImagePath($view_tweet['user_image_name'], 'user'); ?>" alt="マイアイコン">
                            </a>
                        </div>
                        <div class="content">
                            <div class="name">
                                <a href="profile.php?user_id=<?= htmlspecialchars($view_tweet['user_id']); ?>">
                                    <span class="nickname"><?= htmlspecialchars($view_tweet['user_nickname']); ?></span>
                                    <span class="user-name">@<?= htmlspecialchars($view_tweet['user_name']); ?> ・<?= convertToDayTimeAgo($view_tweet['tweet_created_at']); ?></span>
                                </a>
                            </div>

                            <p><?= htmlspecialchars($view_tweet['tweet_body']); ?></p>

                            <?php if (isset($view_tweet['tweet_image_name'])): ?>
                                <img src="<?= buildImagePath($view_tweet['tweet_image_name'], 'tweet'); ?>" alt="ツイート画像" class="post-image">
                            <?php endif; ?>

                            <div class="icon-list">
                                <div class="like js-like" data-like-id="<?= $view_tweet['like_id']; ?>">
                                    <?php
                                    if (isset($view_tweet['like_id'])){
                                        echo '<img src="' . HOME_URL . 'views/img/icon-heart-twitterblue.svg" alt="青いハートアイコン">';
                                    } else {
                                        echo '<img src="' . HOME_URL . 'views/img/icon-heart.svg" alt="ハートアイコン">';
                                    }
                                    ?>
                                </div>
                                <div class="like-count js-like-count"><?= htmlspecialchars($view_tweet['like_count']); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                
            </div>
        <?php endif; ?>
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