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
  <!-- bulmaの読み込み -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>

<p>管理者画面（参加者一覧）</p>
<a href="reserve_txt_input.php">入力画面へ</a>

<!-- 集計表を表示する場所 -->
<div id="total"></div>

<table>
  <tr>
    <th>参加人数（３日間合計）</th>
  </tr>
  <tr>
    <th id="guestTotal"></th>
    <th>人</th>
  </tr>
</table>

  <div>
    <!-- チャートjsを表示する場所 -->
    <canvas id="myChart"></canvas> 
  </div>

  <!-- チャートjs読み込み -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- jQuery一応入れる -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
// PHPからJSON
const jsonArray = <?=json_encode($json)?>;
console.log(jsonArray);

//JSONを配列に戻す
const array = JSON.parse(jsonArray);
// console.log(array);

console.log(array.length);
const guestTotal = array.length;
$("#guestTotal").text(guestTotal);

array.forEach((value, index) => {
	console.log(index, value);
});

</script>

</body>

</html>