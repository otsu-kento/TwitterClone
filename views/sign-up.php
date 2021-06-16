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
    <title>会員登録画面 / TwitterClone</title>
    <meta name="description" content="会員登録画面です">
</head>
<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-up.php" method="post">
            <img src="/TwitterClone/views/img/logo-white.svg" alt="" class="logo-white">
            <h1>アカウントを作る</h1>
            <input type="text" class="form-control" name="nickname" placeholder="ニックネーム" maxlength="50" required autofocus>
            <input type="text" class="form-control" name="name" autocomplete="off" placeholder="ユーザー名、例)hello123" maxlength="50" required>
            <input type="email" class="form-control" name="mail" placeholder="メールアドレス" maxlength="254" required>
            <input type="password" class="form-control" name="password" autocomplete="off" placeholder="パスワード" miinlength="4" maxlength="128" required>
            <button class="w-100 btn btn-lg" type="submit">登録する</button>
            <p class="mt-3 mb-2"><a href="sign-in.php">ログインする</a></p>
            <p class="mt-2 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>
</body>
</html>
