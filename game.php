<?php
require_once "functions.php";

$msg = "";
$end_msg = "";

// 攻撃パターン
$attack_patterns = [
    1 => "パンチ",
    2 => "キック",
    3 => "投げ技",
    4 => "気功",
    5 => "爆弾",
    6 => "投げキッス"
];

// プレイヤーの名前取得
$player_name = filter_input(INPUT_POST, "player_name");

// プレイヤーのHP取得
$my_hp = filter_input(INPUT_POST, "my_hp", FILTER_VALIDATE_INT);
// 初期表示時は10000セット
if (empty($my_hp)) {
    $my_hp = 10000;
}

// 敵のHP取得
$enemy_hp = filter_input(INPUT_POST, "enemy_hp", FILTER_VALIDATE_INT);
// 初期表示時は10000セット
if (empty($enemy_hp)) {
    $enemy_hp = 10000;
}

// 攻撃パターン取得
$attack_pattern = filter_input(INPUT_POST, "attack_pattern", FILTER_VALIDATE_INT);

if ($attack_pattern) {

    switch ($attack_pattern) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            // 攻撃名取得
            $attack_name = $attack_patterns[$attack_pattern];

            // 自分の攻撃
            $attack = rand(0, 3000);
            $enemy_hp = max($enemy_hp - $attack, 0);

            // 攻撃メッセージ作成
            $attack_msg = createAttackMsg($player_name, $attack_name, $attack, $enemy_hp);

            break;
            // defalut:
            // $msg = "攻撃に失敗";
    }

    // 敵の攻撃
    $damage = rand(0, 3000);
    $my_hp = max($my_hp - $damage, 0);

    // 敵の攻撃メッセージ作成
    $enemy_attack_msg = createEnemyAttackMsg($damage, $player_name, $my_hp);

    // 終了メッセージ作成
    $end_msg = createEndMsg($player_name, $my_hp, $enemy_hp);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=DotGothic16&display=swap" rel="stylesheet">
    <title>VS-GAME</title>
</head>

<body>
    <div id="game_page" class="home_bg">
        <div class="home_content wrapper">
            <div class="character">
                <div>
                    <img src="images/pipo-enemy041b.png" alt="">
                </div>
                <div>
                    <img src="images/pipo-enemy033.png" alt="">
                </div>
            </div>
            <h1 class="top_title" id="fight_title">FIGHT!!</h1>
            <?php if (empty($end_msg)) : ?>
                <div class="attack_q">
                    <p class="q_name"><?= h($player_name) ?>さん</p>
                    <?php "<img src=\"{$player_character}\">" ?>
                    <p class="q_skill">攻撃技は？</p>
                    <form action="" method="post" id="attack_form">
                        <select name="attack_pattern" id="attack_select">
                            <?php foreach ($attack_patterns as $key => $value) : ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" name="player_name" value="<?= $player_name ?>">
                            <input type="hidden" name="my_hp" value="<?= $my_hp ?>">
                            <input type="hidden" name="enemy_hp" value="<?= $enemy_hp ?>">
                            <input type="submit" value="攻撃" class="btn" id="attack_button">
                        </form>
                    </div>
            <?php else : ?>
                <p class="result_txt"><?= $end_msg ?></p>
                <a href="start.php" class="btn" id="back_btn">スタートへ戻る</a>
            <?php endif; ?>
            <div class="match_report">
                <p><?= $attack_msg ?></p>
                <p><?= $enemy_attack_msg ?></p>
            </div>
            <div class="heart_point">
                <p><?= $player_name ?>のHP :　<?= $my_hp ?></p>
                <p>敵のHP : <?= $enemy_hp ?></p>
            </div>
        </div>
    </div>
</body>

</html>