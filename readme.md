# 星空観察会の予約（PHP）

## DEMO

  - デプロイしている場合はURLを記入（任意）

## 紹介と使い方

  - 星空観察会のイベント予約ページをPHPで作りました。

  - 入力フォームの情報をCSVに入れて利用します。

## 工夫した点

  - イベントページから入力画面への遷移など、構造を工夫しました。
  - CSVからJSONにしたときに文字化けしたのですが修正しました。
  - CSSのフレームワークであるbulmaを導入しました。

## 苦戦した点

  - CSVのデータをJSONにしてパースまではできたのですが、その活用が自分の知識が足りずできていません。
  - JSONのデータを使ってchart.jsでグラフを作ろうと思っていたのですが、その前に数値の集計をしないといけないと気付き、集計で詰んでいます。

## 参考にした web サイトなど

  - CSVにするやり方 https://blog.codecamp.jp/programming-php-csv-loading
  - bulmaの導入 https://qiita.com/ochiochi/items/de1afd2d3fc8f6d3ea55
  - JSONの文字化け対応 https://tadtadya.com/php-how-to-use-japanese-with-json/