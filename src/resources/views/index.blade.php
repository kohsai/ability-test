<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
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

        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>


        <div class="form__group">

            <div class="form__group__name">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>

            <div class="form__group__name-input">
                <input type="text" style="border:none" style="background-color: transparent" name="name"
                    placeholder="例：山田" />
            </div>
            <div class="form__group__name-input">
                <input type="text" style="border:none" style="background-color:transparent" name="name"
                    placeholder="例：太郎" />
            </div>
        </div>

        <div class="form__group">

            <div class="form__group__name">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>


            <div class="form__group__gender">
                <input type="radio" name="gender" value="男性" checked> 男性
            </div>
            <div class="form__group__gender">
                <input type="radio" name="gender" value="女性">女性
            </div>
            <div class="form__group__gender">
                <input type="radio" name="gender" value="その他">その他
            </div>
        </div>



        <div class="form__group">
            <div class="form__group__name">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-email">
                <input type="email" style="border:none" style="background-color:transparent" name="email"
                    placeholder="例：test@example.com" />
            </div>

        </div>


        <div class="form__group">
            <div class="form__group__name">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>

            <div class="form__group-tel">

                <input type="text" style="border:none" style="background-color: transparent" name="name"
                    placeholder="080" />
            </div>
            <div class="form__group-tel">
                <input type="text" style="border:none" style="background-color:transparent" name="name"
                    placeholder="1234" />
            </div>
            <div class="form__group-tel">
                <input type="text" style="border:none" style="background-color:transparent" name="name"
                    placeholder="5678" />
            </div>

        </div>
        </div>

        <div class="form__group">
            <div class="form__group__name">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
        </div>


        <div class="form__group">
            <div class="form__group__name">
                <span class="form__label--item">建物名</span>
                <span class="form__label--required">※</span>
            </div>
        </div>


        <div class="form__group">
            <div class="form__group__name">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>

        </div>



        <div class="form__group">
            <div class="form__group__name">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
        </div>

        {{-- <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      < class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="テスト太郎" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="資料をいただきたいです"></textarea>
            </div>
          </div>
        </div> --}}


        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>


    </main>
</body>

</html>
