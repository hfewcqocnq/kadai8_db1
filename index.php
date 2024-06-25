<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート画面</title>
  <style>
    .first {
      margin-top:40px;
      margin-left:20px;
      margin-bottom:40px;
    }
    form {
      margin-top:20px;
      margin-left:20px;
      border:1px solid black;
      padding-left:10px;
      padding-bottom:20px;
      width: 600px;
    }
    button {
      margin-top:20px;
    }
  </style>
</head>
<body>
  <p class="first">会員登録いただき、誠にありがとうございます。<br>
  よろしければ下記アンケート(全4問)へのご回答・ご協力をよろしくお願いいたします。</p>
  <form method="post" action="insert.php">
  <p class="toi1">1.会員登録のきっかけ</p>
  <select name="kikkake">
    <option value="ネット検索">ネット検索</option>
    <option value="SNS">SNS</option>
    <option value="紹介">紹介</option>
    <option value="その他">その他</option>
  </select>

  <p class="toi2">2.このサイトにどんなことを求めていますか</p>
  <select name="motomeru">
    <option value="自分のアイデアを共有したい">自分のアイデアを共有したい</option>
    <option value="他のアイデアからヒントを得たい">他のアイデアからヒントを得たい</option>
    <option value="どんなアイデアがあるのか見てみたい">どんなアイデアがあるのか見てみたい</option>
    <option value="その他">その他</option>
  </select>

  <p class="toi3">3.これまでどのような目的や課題に対してアイデアを出したことがありますか<br>（会社、プライベート問わずの目的や課題をお聞かせください）</p>
  <textarea name="kako" cols="40" rows="10"></textarea><br>

  <p class="toi4">4.その他意見や要望等ございましたら入力をお願いします。</p>
  <textarea name="sonota" cols="40" rows="10"></textarea><br>

  <button type="submit" value="確認">入力内容を送信する</button>
  </form>
</body>
</html>