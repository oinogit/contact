@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="content__top">
        <h1 class="content__top-ttl">Contact</h1>
    </div>

    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">お名前</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="first_name" class="form__input-text__name" placeholder="例: 山田" value="{{old('first_name')}}">
                    <span class="form__label-space">　　</span>
                    <input type="text" name="last_name"  class="form__input-text__name" placeholder="例: 太郎" value="{{old('last_name')}}">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">性別</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-checkbox">
                    <input type="checkbox" name="c1" value="男性" checked="checked">男性
                    <input type="checkbox" name="c1" value="女性">女性
                    <input type="checkbox" name="c1" value="その他">その他
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">メールアドレス</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="email" class="form__input-text__email" placeholder="例: test@example.com" value="{{old('email')}}">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">電話番号</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="tell" class="form__input-text__tell" placeholder="080" value="{{old('tell')}}">
                    <span class="form__label-hyphen">-</span>
                    <input type="text" name="tell" class="form__input-text__tell" placeholder="1234" value="{{old('tell')}}">
                    <span class="form__label-hyphen">-</span>
                    <input type="text" name="tell" class="form__input-text__tell" placeholder="5678" value="{{old('tell')}}">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">住所</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="address" class="form__input-text__address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{old('address')}}">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="building" class="form__input-text__building" placeholder="例: 千駄ヶ谷マンション101" value="{{old('building')}}">
                </div>
            </div>
        </div>
            <div class="form__group">
                <div class="form__group-ttl">
                    <span class="form__label-item">お問い合わせの種類</span>
                    <span class="form__label-required">※</span>
                </div>
                <div class="form__group-content">
                    <select name="select">
                        <option value="inquiry" >選択してください</option>
                    </select>
                </div>
            </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label-item">お問い合わせ内容</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-content">
                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{old('detail')}}"></textarea>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit">確認画面</button>
        </div>
    </form>
</div>
@endsection