<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <h1 class="header-ttl">FashionablyLate</h1>
        <form class="header-form" action="/login" method="post">
            @csrf
            <div class="header-form__button">
                <button class="header-form__button-submit" type="submit">login</button>
            </div>
        </form>
    </header>

    <main>
        <div class="content">
            <div class="main__top">
                <h1 class="main__top-ttl">Register</h1>
            </div>

            <div class="main__card">
                <form class="create-form" action="/login" method="post">
                    @csrf
                    <div class="create-form__item">
                        <p class="create-form__item-text">お名前</p>
                        <input type="text" name="name" placeholder="例: 山田　太郎" value="{{old('name')}}" />
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="create-form__item">
                        <p class="create-form__item-text">メールアドレス</p>
                        <input type="text" name="email" placeholder="例: test@example.com" value="{{old('email')}}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="create-form__item">
                        <p class="create-form__item-text">パスワード</p>
                        <input type="text" name="password" placeholder="例: coachtech1106" value="{{old('password')}}" />
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="create-form__button">
                        <button class="create-form__button-submit">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>