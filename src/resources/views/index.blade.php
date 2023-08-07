<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  <title>Contact Form</title>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        お問い合わせ
      </a>
    </div>
  </header>

  <main>
    <div>
       <form class="form" action="/contacts/confirm" method="post">
        @csrf
         <div class="form__group">
           <div class="form__group-title">
             <span class="form__label--item">お名前</span>
             <span class="form__label--required">※</span>
           </div>
           <div class="form__group-content">
             <div class="form__input--text">
               <input type="text" name="family-name"/>
               <p class="form__example">例）山田</p>
             </div>
             <div class="form__error">
               <!--バリデーション機能を実装したら記述します。-->
             </div>
           </div>
             <div class="form__input--text">
               <input type="text" name="given-name" />
               <p class="form__example">例）太郎</p>
             </div>
             <div class="form__error">
               <!--バリデーション機能を実装したら記述します。-->
             </div>
             </div>

         </div>
         <div class="form__group">
           <div class="form__group-title">
             <span class="form__label--item">性別</span>
             <span class="form__label--required">※</span>
           </div>
           <input type="radio" name="gender" id="1" value="1" checked><label>男性</label>
           <input type="radio" name="gender" id="2" value="2"><label>女性</label>
             <div class="form__error">
               <!--バリデーション機能を実装したら記述します。-->
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
               <input type="email" name="email"/>
               <p class="form__example">例）test@example.com</p>
             </div>
             <div class="form__error">
               <!--バリデーション機能を実装したら記述します。-->
             </div>
           </div>
         </div>
         <div class="form__group">
           <div class="form__group-title">
             <span class="form__label--item">郵便番号</span>
             <span class="form__label--required">※</span>
           </div>
           <p>〒</p>
           <div class="form__group-content">
             <div class="form__input--text">
               <input type="text" name="postcode"/>
               <p class="form__example">例）123-4567</p>
             </div>
             <div class="form__error">
               <!--バリデーション機能を実装したら記述します。-->
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
               <input type="text" name="address"/>
               <p class="form__example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
             </div>
             <div class="form__error">
               <!--バリデーション機能を実装したら記述します。-->
             </div>
           </div>
         </div>
         <div class="form__group">
           <div class="form__group-title">
             <span class="form__label--item">建物名</span>
           </div>
           <div class="form__group-content">
             <div class="form__input--text">
               <input type="text" name="building_name"/>
               <p class="form__example">例）千駄ヶ谷マンション101</p>
             </div>
           </div>
         </div>
         <div class="form__group">
           <div class="form__group-title">
             <span class="form__label--item">ご意見</span>
             <span class="form__label--required">※</span>
           </div>
           <div class="form__group-content">
             <div class="form__input--textarea">
               <textarea name="opinion"></textarea>
             </div>
           </div>
         </div>
         <div class="form__button">
           <button class="form__button-submit" type="submit">確認</button>
         </div>
       </form>
     </div>
   </main>
</body>

</html>