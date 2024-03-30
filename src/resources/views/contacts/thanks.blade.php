<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="thanks">
            <h1 class="thanks__ttl">Thank you</h1>
        </div>
        <form class="form" action="/thanks" method="post">
            @csrf
            <p>お問合せありがとうございました</p>
            <div class="button">
                <button class="form__button-submit">HONE</button>
            </div>
        </form>
    </div>
</body>
</html>