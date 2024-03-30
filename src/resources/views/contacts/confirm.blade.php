@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="content__top">
        <h1 class="content__top-ttl">Confirm</h1>
    </div>

    <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="first_name" value="{{$contact['first_name']}}" readonly />
                        <input type="text" name="last_name" value="{{$contact['last_name']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{$contact['gender']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">　</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{$contact['email']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">　</th>
                    <td class="confirm-table__text">
                        <input type="tell" name="tell" value="{{$contact['tell']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">　</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{$contact['address']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">　</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{$contact['building']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">　</th>
                    <td class="confirm-table__text">
                        <input type="text" name="inquiry" value="{{$contact['inquiry']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row-textarea">
                    <th class="confirm-table__header">　</th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{$contact['detail']}}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit__send" type="submit">送信</button>
            <button class="form__button-submit__fix" type="submit">修正</button>
        </div>
    </form>
</div>
@endsection