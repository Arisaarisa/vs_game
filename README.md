# vs_game

## 課題作成　　

【概要】　　

PHP言語を用いて格闘ゲームを作成します。　　

1. 対戦相手は1対１
1. HPが無くなった方が負け！
1. ランダムで敵も攻撃してくる
1. 繰り広げる技は、パンチ、キック、投げ技、気功、爆弾、投げキッス
1. fullHPは30000
1. 敵の攻撃技はランダムに決まる
1. 攻撃技によって攻撃力は違う
1. テンショ上がりそうな背景をつける
1. 敵を攻撃した時は `攻撃成功`　もしくは　`攻撃失敗`　と表示
1. 投げキッスの攻撃力は-10000、０，10000のどれか
1. できることなら。。。キャラクターの名前は自作させたい。
1. そして、できることなら勝率も保持したいー。

## 条件

`start.php`  

- ゲームのタイトルとゲームの始めるのボタンだけの画面

`hp_set.php`  

- HTMLのフォームを用意して、テキストボックスに名前を入力してもらう。設定ボタンを押して名前をセット。formのpostメソッドで名前を送信。

`geme.php`  

- 受け取ったHPを画面に出す。フォームを用意し、攻撃をオプションボタンで選択させる。攻撃ボタンを押したらpostメソッドで攻撃の種類を送る。前のゲームのように500〜3000のランダムな値を選んで攻撃する。HP - 攻撃した値をgame.phpに表示する。これを繰り返す


