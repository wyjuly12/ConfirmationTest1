@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header')
<div class="header__button">
    <button type="button"><a href="/login">logout</a></button>
</div>
@endsection


@section('content')
<div class="admin-form__content">
    <div class="login-form__heading">
        <h2>Admin</h2>
    </div>
</div>

<div class="adimin-form__menu">
    <form class="admin-form" action="/admin/search" method="get">
        @csrf
        <div class="admim-form__flex">
            <div class="admin-form__cotent">
                <input type="text" name="keyword" value="{{ old('keyword') }}">
            </div>
            <div class="admin-form__cotent">
                <select name="gender" value="{{ old('gender') }}">
                    <option value="1" {{ old('gender') == '1' ? 'checked':''}} >男性</option>
                    <option value="2" {{ old('gender') == '2' ? 'checked':''}} >女性</option>
                    <option value="3" {{ old('gender') == '3' ? 'checked':''}} >その他</option>
                </select>
            </div>
            <div class="admin-form__cotent">
                <input type="date" name="" id="">
            </div>
            <div class="admin-form__cotent">
                <button type="submit">検索</button>
            </div>
            <div class="admin-form__cotent">
                <button type="button" onclick="location.href='/admin'" > リセット</button>
            </div>
        </div>
    </form>

    <div class="admin-form__page">
        @if($contacts !== null)
        {{ $contacts ->links() }}
        @endif
    </div>

</div>  



<div class="admin-form__table">
    <table class="tabel-form">
        <tr class="table-form__row">
            <th class="table-form__header">お名前</th>
            <th class="table-form__header">性別</th>
            <th class="table-form__header">メールアドレス</th>
            <th class="table-form__header">問い合わせの種類
            </th>
            <th class="table-form__header"></th>
        </tr>

        @if($contacts !== null)
        @foreach($contacts as $contact)
        <tr class="table-form__row">
            <td>{{ $contact['first_name'] }} {{$contact['last_name'] }} </td>
            <td>
            @switch($contact['gender'])
                @case(1)
                    男性
                @break
                @case (2)
                    女性                           
                @break
                @case (3)
                    その他
                @break
            @endswitch
            <td>{{ $contact['email'] }}</td>
            <td>
            @switch($contact['category_id'])
                @case(1)
                    商品のお届けについて
                @break
                @case (2)
                    商品の交換について                           
                @break
                @case (3)
                    商品トラブル
                @break
                @case (4)
                    ショップへのお問い合わせ
                @break
                @case (5)
                    その他
                @break
            @endswitch
           </td>
            <td><button>詳細</button></td>
        </tr>
        @endforeach
        @endif


    </table>
</div>
@endsection