<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--name">
              <input type="text" name="last_name" placeholder="例；山田" value="{{ old('last_name') }}"/>
              <input type="text" name="first_name" placeholder="例；太朗" value="{{ old('first_name') }}"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('last_name')
              {{$message}}
              @enderror
              @error('first_name')
              {{$message}}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <label><input type="radio" name="gender" value="男性" value="{{ old('gender') }}" checked>男性</label>
              <label><input type="radio" name="gender" value="女性" value="{{ old('gender') }}">女性</label>
              <label><input type="radio" name="gender" value="その他" value="{{ old('gender') }}">その他</label>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('gender')
              {{$message}}
              @enderror
            </div>
          </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test1@gmail.com" value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('email')
              {{$message}}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="090" value="{{ old('tel') }}"/>-
              <input type="tel" name="tel" placeholder="0904" value="{{ old('tel') }}"/>-
              <input type="tel" name="tel" placeholder="6090" value="{{ old('tel') }}"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('tel')
              {{$message}}
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="沖縄県那覇市２４−２" value="{{ old('address') }}"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('address')
              {{$message}}
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="マンション" value="{{ old('building') }}"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--select">
              <select class="form__item-select" name="category_id">
              <option value="">選択してください</option>
                @foreach ($categories as $category)
                <option value="{{ $category['content'] }}">{{ $category['content'] }}</option>
                @endforeach
              </select>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('content')
              {{$message}}
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問い合わせ内容をご記入ください" value="{{ old('detail') }}"></textarea>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('detail')
              {{$message}}
              @enderror
            </div>
          </div>
        </div>

        
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

