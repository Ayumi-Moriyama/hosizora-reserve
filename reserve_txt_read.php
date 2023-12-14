<?php

// データまとめ用の空文字変数
// $str = '';
// $aryCsv = [];

// 何行目か（row）
// $row = 1;

// ファイルを開く（読み取り専用）
$file = fopen('data/data.csv', 'r');
// ファイルをロック
flock($file, LOCK_EX);

// CSVファイルからデータを読み込む
while(($data = fgetcsv($file, 0, ",")) !== FALSE){
  $csv[] = $data;
}

// fgetcsv()で1行ずつ読み込む
// if($file){
//   while($data = fgetcsv($file)){
//     $row++;
//     foreach ($data as $value) {
//     // 取得したデータを`$aryCsv`に追加する
//     $str .="<tr>
//               <td>${row}行目</td>
//               <td>${value}</td>
//             </tr>";
//     }
//   }
// }

// ロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// CSVデータをJSON形式に変換
$json = json_encode($csv, JSON_UNESCAPED_UNICODE);
// JSONデータを出力
// echo $json;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理者画面（参加者一覧）</title>
</head>

<body>

  <fieldset>
    <legend>管理者画面（参加者一覧）</legend>
    <a href="reserve_txt_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>参加者氏名</th>
          <th>フリガナ</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>

  </fieldset>

  <div>
    <!-- チャートjsを表示する場所 -->
    <canvas id="myChart"></canvas> 
  </div>

  <!-- チャートjs読み込み -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const jsonArray = <?=json_encode($json)?>;
console.log(jsonArray);


</script>

</body>

</html>