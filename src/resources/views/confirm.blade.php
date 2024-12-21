@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')


<div class="confirm__form">
    <div class="confirm__heading">
        <h2>confirm</h2>
    </div>

    <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__content-flex">
                        <div class="confirm-table__content-flex--name">
                            <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                        </div>
                        <div class="confirm-table__content-flex--name">
                            <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                        </div>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__content">
                        <input type="hidden" name="gender" value="{{ $contact['gender']}}" readonly />
                        @if ($contact['gender'] == '1') 
                            <p>男性</p> 
                            @elseif ($contact['gender'] == '2') 
                            <p>女性</p> 
                            @else ($contact['gender'] == '3')
                            <p>その他</p>
                        @endif
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__content">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__content">
                        <input type="tel" name="tel" value="{{ $contact['tel1'].'-'.$contact['tel2'].'-'.$contact['tel3'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__content">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__content">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__content">
                        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" readonly>
                        @switch($contact['category_id'])
                            @case (1)
                            <p>商品のお届けについて</p>
                            @break
                            @case (2)
                            <p>商品の交換について</p>                            
                            @break
                            @case (3)
                            <p>商品トラブル</p>
                            @break
                            @case (4)
                            <p>ショップへのお問い合わせ</p>
                            @break
                            @case (5)
                            <p>その他</p>
                            @break
                        @endswitch                        
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの内容</th>
                    <td class="confirm-table__content">
                        <input type="text" name="detail" value="{{ $contact['detail'] }}"  readonly />
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="confirm-button">
            <button type="submit" >送信</button>
        </div>
        
        <div class="confirm-button">
            <button type="button" onclick=history.back()>修正</button>
        </div>


    </form>



</div>


@endsection