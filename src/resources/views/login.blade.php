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
        <h2>Register</h2>
      </div>

      <form class="form" action="/login" method="POST">
        @csrf
       <div class="form__group">
           <div class="form__group-title">
            <div class="form__label--item">メールアドレス</div>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        


       
          <div class="form__group-title">
            <div class="form__label--item">パスワード</div>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="password" placeholder="080" />-
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
    


       
       
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
       </div>
      </form>

  </main>
    
</body>
</html>