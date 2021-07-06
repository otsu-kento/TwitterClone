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
            <div class="like js-like" data-like-id="<?= htmlspecialchars($view_tweet['like_id']); ?>">
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