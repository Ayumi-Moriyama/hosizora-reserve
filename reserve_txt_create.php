<?php

// var_dump($_POST);
// exit();

// データの受け取り
$name = $_POST["name"];
$kana = $_POST["kana"];
$address = $_POST["address"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$schedule = $_POST["schedule"];
$bus = $_POST["bus"];
$drink = $_POST["drink"];
$request = $_POST["request"];

// データを配列に入れる（CSV用）
$write_data = array($name,$kana,$address,$gender,$age,$tel,$email,$schedule,$bus,$drink,$request);

// ファイルを開く．引数が`a`である部分に注目！
$file = fopen('data/data.csv', 'a');
// ファイルをロックする
flock($file, LOCK_EX);

// CSVに書き込み
    fputcsv($file, $write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// データ入力画面に移動する
header("Location:reserve_txt_input.php");


