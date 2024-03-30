<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <h1 class="header-ttl">FashionablyLate</h1>
        <form class="header-form">
            <div class="header-form__button">
                <button class="header-form__button-submit" type="submit">logout</button>
            </div>
        </form>
    </header>

    <main>
        <div class="content">
            <div class="content__top">
                <h1 class="content__top-ttl">Admin</h1>
            </div>

            <form class="content__form">
                @csrf
                <div class="form-item">
                    <input class="form-item__name" type="text" name="name" placeholder="お名前やメールアドレスを入力してください" />
                    <div class="form-item__select">
                        <select class="form-item__gender" name="select">
                            <option value="gender">性別</option>
                            <option value="gender">全て</option>
                            <option value="gender">男性</option>
                            <option value="gender">女性</option>
                            <option value="gender">その他</option>
                        </select>
                    </div>
                    <div class="form-item__select">
                        <select class="form-item__contact" name="select"><option value="contact">お問い合わせの種類</option></select>
                    </div>
                    <div class="form-item__date">
                        <input type="date" class="icon-del" />
                    </div>
                    <input class="form-item__search" type="search" name="search" placeholder="検索" />
                    <input class="form-item__reset" type="search" name="reset" placeholder="リセット" />
                </div>
                <div class="form-item">
                    <input class="form-item__export" type="text" name="export" placeholder="エクスポート" />
                </div>
            </form>
            <div class="content-table">
                <table class="content-table__inner">
                    <tr class="content-table__tr">
                        <th class="content-table__tr-name">お名前</th>
                        <th class="content-table__tr-gender">性別</th>
                        <th class="content-table__tr-mail">メールアドレス</th>
                        <th class="content-table__tr-contact">お問い合わせの種類</th>
                        <th class="content-table__tr-detail"></th>
                    </tr>
                    <!-- <form class="content-form__detail"> -->
                    <tr class="content-table__td">
                        <td>山田　太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td><button class="content-form__button" type="button">詳細</button></td>
                    </tr>
                    <!-- </form> -->
                    <tr class="content-table__td">
                        <td>山田　太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td><button class="content-form__button" type="button">詳細</button></td>
                    </tr>
                    <tr class="content-table__td">
                        <td>山田　太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td><button class="content-form__button" type="button">詳細</button></td>
                    </tr>
                    <tr class="content-table__td">
                        <td>山田　太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td><button class="content-form__button" type="button">詳細</button>
                                            <!-- <div class="modal-content__detail">
                                                <p class="modal-ttl">お名前</p>
                                                <p class="modal-item">山田　太郎</p>
                                            </div>
                                            <div class="modal-content__detail">
                                                <p class="modal-ttl">性別</p>
                                                <p class="modal-item">男性</p>
                                            </div>
                                            <div class="modal-content__detail">
                                                <p class="modal-ttl">メールアドレス</p>
                                                <p class="modal-item">test@example.com</p>
                                            </div>
                                            <div class="modal-content__detail">
                                                <p class="modal-ttl">電話番号</p>
                                                <p class="modal-item">08012345678</p>
                                            </div>
                                            <div class="modal-content__detail">
                                                <p class="modal-ttl">住所</p>
                                                <p class="modal-item">東京都渋谷区千駄ヶ谷1-2-3</p>
                                            </div>
                                            <div class="modal-content__detail">
                                                <p class="modal-ttl">建物名</p>
                                                <p class="modal-item">千駄ヶ谷マンション101</p>
                                            </div>
                                            <div class="modal-content__detail">
                                                <p class="modal-ttl">お問い合わせの種類</p>
                                                <p class="modal-item">商品の交換について</p>
                                            </div>
                                            <div class="modal-content__detail">
                                                <p class="modal-ttl">お問い合せ内容</p>
                                                <p class="modal-item">届いた商品が注文した商品ではありませんでした。<br>商品の交換をお願いします。</p>
                                            </div>
                                            <div class="modal-button">
                                                <button class="modal-button__submit">削除</button>
                                            </div> -->
                        </td>
                    </tr>
                    <tr class="content-table__td">
                        <td>山田　太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td><button class="content-form__button" type="button">詳細</button></td>
                    </tr>
                    <tr class="content-table__td">
                        <td>山田　太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td><button class="content-form__button" type="button">詳細</button></td>
                    </tr>
                    <tr class="content-table__td">
                        <td>山田　太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td><button class="content-form__button" type="button">詳細</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>

</body>
</html>