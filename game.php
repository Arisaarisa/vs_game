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
            $attack = rand(500, 3000);
            $enemy_hp = max($enemy_hp - $attack, 0);

            $msg = "${player_name} は ${attack_name}の攻撃をした！！";
            if ($attack > 2000) {
                $msg .= "<br>クリティカルヒット！！！";
            }
            $msg .= "<br>攻撃力: ${attack}の攻撃！<br>敵のHP: ${enemy_hp}";

            break;
        defalut:
            $msg = "攻撃に失敗";
    }

    // 敵の攻撃
    $damage = rand(500, 3000);
    $my_hp = max($my_hp - $damage, 0);

    $msg .= "<br>敵は攻撃をした！！！";
    if ($damage > 2000) {
        $msg .= "<br>クリティカルヒット！！！";
    }
    $msg .= "<br>攻撃力: ${damage}の攻撃！<br>${player_name}のHP: ${my_hp}";

    // それぞれのHP確認
    if ($my_hp === 0 && $enemy_hp > 0) {
        $end_msg = "<br>${player_name} は負けた。。。";
    } elseif ($my_hp === 0 && $enemy_hp === 0) {
        $end_msg = "<br>引き分け！！！";
    } elseif ($my_hp > 0 && $enemy_hp === 0) {
        $end_msg = "<br>${player_name} は敵を倒した！！！";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <title>VS-GAME</title>
</head>

<body>
    <div id="game_page" class="home_bg">
        <div class="home_content wrapper">
            <h1 class="name_title">FIGHT!!</h1>
            <?php if (empty($end_msg)): ?>
                <p><?= h($player_name) ?>さん</p>
                <p>攻撃技は？</p>
                <form action="" method="post">
                    <select name="attack_pattern" id="">
                        <?php foreach ($attack_patterns as $key => $value) : ?>
                            <option value="<?= $key ?>"><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" name="player_name" value="<?= $player_name ?>">
                    <input type="hidden" name="my_hp" value="<?= $my_hp ?>">
                    <input type="hidden" name="enemy_hp" value="<?= $enemy_hp ?>">
                    <input type="submit" value="攻撃">
                </form>
            <?php else: ?>
                <p><?= $end_msg ?></p>
            <?php endif; ?>
            <p><?= $msg ?></p>
        </div>
    </div>
</body>

</html>