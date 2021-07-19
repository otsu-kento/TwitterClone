<div class="side">
    <div class="side-inner">
        <ul class="nav flex-column">
            <li class="nav-item"><a href="Home.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/logo-twitterblue.svg" alt="ロゴアイコン" class="logo-icon"></a></li>
            <li class="nav-item"><a href="Home.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-home.svg" alt="ホームアイコン"></a></li>
            <li class="nav-item"><a href="Search.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-search.svg" alt="サーチアイコン"></a></li>
            <li class="nav-item"><a href="Notification.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-notification.svg" alt="ベルアイコン"></a></li>
            <li class="nav-item"><a href="Profile.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-profile.svg" alt="プロフィールアイコン"></a></li>
            <li class="nav-item"><a href="Post.php" class="nav-link"><img src="<?= HOME_URL; ?>views/img/icon-post-tweet-twitterblue.svg" alt="羽アイコン" class="post-tweet"></a></li>
            <li class="nav-item my-icon"><img src="<?= htmlspecialchars($view_user['image_path']); ?>" class="js-popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="<a href='profile.php'>プロフィール</a><br><a href='Sign-out.php'>ログアウト</a>" data-bs-html="true" alt="マイアイコン"></li>
        </ul>
    </div>
</div>