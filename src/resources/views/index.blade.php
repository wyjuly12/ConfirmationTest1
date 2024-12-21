@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>contact</h2>
    </div>

    <form class="form" action="/confirm" method="post">
        @csrf
        <!-- 名前 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--title">名前</span>
                <span class="form__label--required">※必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-flex">
                    <div class="form__input-flex--name">
                        <input name="first_name" placeholder="(例)山田" value="{{ old('first_name') }}" ></input>
                    </div>
                    <div class="form__input-flex--name">
                        <input name="last_name" placeholder="(例)太郎" value="{{ old('last_name') }}" ></input>
                    </div>
                </div>
                <div class="form__error">
                    @error('first_name')
                        {{ $message }}
                    @enderror    
                    @error('last_name')
                        {{ $message }}
                    @enderror
                </div>
            </div> 
        </div> 


        <!-- 性別 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--title">性別</span>
                <span class="form__label--required">※必須</span>
            </div>
            <div class="form__group-contet">
                <div class="form__input-flex">
                    <div class="form__input-flex--radio">
                        <input type="radio" name="gender" id="men" value="1" {{ old('gender') == '1' ? 'checked':''}} checked>男性</>
                    </div>
                    <div class="form__input-flex--radio">
                        <input type="radio" name="gender" id="women" value="2" {{ old('gender') == '2' ? 'checked':''}} >女性</>
                    </div>
                    <div class="form__input-flex--radio">
                        <input type="radio" name="gender" id="other" value="3" {{ old('gender') == '3' ? 'checked':''}} >その他</>                     
                    </div>
                </div> 

            </div>
        </div>  


        <!-- メールアドレス -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--title">メールアドレス</span>
                <span class="form__label--required">※必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input name="email" placeholder="test@example.com" value="{{ old('email') }}" ></input>
                </div>
                <div class="form__error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

 



         <!-- 電話番号 -->       
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--title">電話番号</span>
                <span class="form__label--required">※必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-flex">
                    <div class="form__input-flex--tel">
                        <input name="tel1" placeholder="010" value="{{ old('tel1') }}" ></input>
                    </div>
                    <div class="form__input-flex--tel">
                        <input name="tel2" placeholder="1234" value="{{ old('tel2') }}" ></input>
                    </div>
                    <div class="form__input-flex--tel">
                        <input name="tel3" placeholder="5678" value="{{ old('tel3') }}" ></input>
                    </div>
                </div>
                <div class="form__error">
                    @if($errors->has('tel1'))
                        {{ $errors->first('tel1') }}
                        @elseif($errors->has('tel2'))
                            {{ $errors->first('tel2') }}                                      
                        @elseif($errors->has('tel3'))
                            {{ $errors->first('tel3') }}                        
                    @endif
                </div>               
            </div>
        </div>  

        <!-- 住所 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--title">住所</span>
                <span class="form__label--required">※必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input name="address" placeholder="東京都渋谷区１ー２ー３" value="{{ old('address') }}" ></input>
                </div>
                <div class="form__error">
                    @error('address')
                        {{ $message }}
                    @enderror
                </div> 
            </div>
        
        </div>

        <!-- 建物名 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--title">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input name="building" placeholder="渋谷マンション"  value="{{ old('building') }}" ></input>
                </div>
            </div>
        </div>


        <!-- 問い合わせ種別 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--title">問い合わせ種類</span>
                <span class="form__label--required">※必須</span>
            </div>
            <div class="form__input--select">
                <select id="category" name="category_id"  value="{{  old('category_id') }}"  >
                    <option hidden></option>
                    <option value="1" {{ old('category_id') == '1' ? 'selected':''}} >商品のお届けについて</option>
                    <option value="2" {{ old('category_id') == '2' ? 'selected':''}} >商品の交換について</option>
                    <option value="3" {{ old('category_id') == '3' ? 'selected':''}} > 商品トラブル</option>
                    <option value="4" {{ old('category_id') == '4' ? 'selected':''}} >ショップへのお問い合わせ</option>
                    <option value="5" {{ old('category_id') == '5' ? 'selected':''}} >その他</option>                                
                </select>
                <div class="form__error">
                    @error('category_id')
                        {{ $message }}
                    @enderror
                </div> 
            </div>
        </div>

        <!-- 問い合わせ内容 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--title">問い合わせ内容</span>
                <span class="form__label--required">※必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" placeholder="問い合わせ内容を記入してください。"  >{{ old('detail') }}</textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                        {{ $message }}
                    @enderror
                </div> 
                

            </div>
        </div>

        <!-- 確認ボタン -->
        <div class="form__button">
            <button class="form__button-submit" type="submit">内容確認</button>
        </div>

    </form>


</div>



@endsection