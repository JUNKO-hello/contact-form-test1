<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>

    <header class="header">
        <div class="header__logo">
        FashionablyLate
        </div>
    </header>

 <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>

      <form class="form" action="/confirm" method="POST">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" value="{{ old('last_name', session('contact.last_name')) }}"  placeholder="例:山田" />
              <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="例:太郎" />
            </div>
            <div class="form__error">
              @error('last_name')
              {{ $message }}
              @end error
              @error('first_name')
              {{ $message }}
              @end error
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
              <label><input type="radio" name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }} />男性</label>
              <label><input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }} />女性</label>
              <label><input type="radio" name="gender" value="3" {{ old('gender') == 3 ? 'checked' : '' }} />その他</label>
            </div>
            <div class="form__error">
              @error('gender')
              {{ $message }}
              @end error
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
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @end error
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
              <input type="tel" name="tel1" placeholder="080" />-
              <input type="tel" name="tel2" placeholder="1234" />-
              <input type="tel" name="tel3" placeholder="5678" />
            </div>
            <div class="form__error">
              @error('tel1')
              {{ $message }}
              @end error
              @error('tel2')
              {{ $message }}
              @end error
              @error('tel3')
              {{ $message }}
              @end error
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
              <input type="text" name="address" placeholder="例:東京都渋谷区千駄々谷1-2-3" />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @end error
            </div>
          </div>
        </div>


 
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例:千駄々谷マンション101" />
            </div>
          </div>
        </div>


  
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="confirm-type" placeholder="選択してください" />
            </div>
            <div class="form__error">
              @error('confirm-type')
              {{ $message }}
              @end error
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
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
              <div class="form__error">
              @error('content')
              {{ $message }}
              @end error
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
</html>