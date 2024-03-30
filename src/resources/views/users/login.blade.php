<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <h1 class="header-ttl">FashionablyLate</h1>
        <form class="header-form" action="/register" method="post">
            @csrf
            <div class="header-form__button">
                <button class="header-form__button-submit" type="submit">register</button>
            </div>
        </form>
    </header>

    <main>
        <div class="content">
            <div class="main__top">
                <h1 class="main__top-ttl">Login</h1>
            </div>

            <div class="main__card">
                <form class="create-form" action="/admin" method="post">
                    @csrf
                    <div class="create-form__item">
                        <p class="create-form__item-text">メールアドレス</p>
                        <input type="text" name="email" placeholder="例: test@example.com" />
                    </div>
                    <div class="create-form__item">
                        <p class="create-form__item-text">パスワード</p>
                        <input type="text" name="pass" placeholder="例: coachtech1106" />
                    </div>
                    <div class="create-form__button">
                        <button class="create-form__button-submit">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>