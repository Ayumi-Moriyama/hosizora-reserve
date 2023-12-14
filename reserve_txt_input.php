<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>イベント予約情報入力画面</title>
  <!-- bulmaの読み込み -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
<a href="hosizora.php" class="button is-primary is-small">イベントページに戻る</a>

  <form action="reserve_txt_create.php" method="POST">
    <fieldset>
      <legend>予約情報入力画面</legend>
      <div>
        <p>氏   名:<br>
          <input type="text" name="name" placeholder="例）星空 光">
        </p>
      </div>
      <div>
        <p>フリガナ:<br>
          <input type="text" name="kana" placeholder="例）ホシゾラ ヒカリ">
        </p>
      </div>
      <div>
        <p>住   所:<br>
          <input type="text" name="address" placeholder="例）○○市××区●●-□□">
        </p>
      </div>
      <div>     
        性   別:<label for="gender"><input type="radio" name="gender" value="男性" checked>男性</label>
                <label for="gender"><input type="radio" name="gender" value="女性">女性</label>
                <label for="gender"><input type="radio" name="gender" value="非公表">非公表</label>
        
      </div>
        年   代:<label for="age"><input type="radio" name="age" value="未成年" checked>未成年</label>
                <label for="age"><input type="radio" name="age" value="18歳～20歳未満">18歳～20歳未満</label>
                <label for="age"><input type="radio" name="age" value="20歳以上">20歳以上</label>
      <div>
        <p>電話番号:<br>
          <input type="text" name="tel"  placeholder="080-xxxx-xxxx">
        </p>
      </div>
      <div>
        <p>メールアドレス:<br>
          <input type="text" name="email"  placeholder="test@test.com">
        </p>
      </div>
      <div>
        <p>希望日程:</p>
        <select name="schedule" id="schedule" required>
          <option value="">下記日程から選択</option>
          <option>12月13日</option>
          <option>12月14日</option>
          <option>12月15日</option>
        </select>
      </div>
      <div>
        会場までの送迎:<input type="radio" name="bus" value="送迎希望" checked>送迎希望
                      <input type="radio" name="bus" value="送迎は不要" >送迎は不要
      </div>
      <div>
        <p>1杯目のドリンクを選択してください:<br>
        <input type="radio" name="drink" value="ホットココア" checked>ホットココア
        <input type="radio" name="drink" value="ホットコーヒー">ホットコーヒー
        <input type="radio" name="drink" value="ホットワイン">ホットワイン
        </p>
      </div>
      <div>
        <label for="request">
          <p>要望欄:<br></p></label>
        <textarea id="request" name="request" rows="5" cols="40"></textarea>
      </div>

      <div>
        <button>送信する</button>
      </div>
    </fieldset>
  </form>

<a href="reserve_txt_read.php">管理者画面へ</a>
</body>

</html>