<?php

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

function createAttackMsg($player_name, $attack_name, $attack, $enemy_hp) {
    $msg = "${player_name} は ${attack_name}の攻撃をした！！";
    if ($attack > 2000) {
        $msg .= "<br>クリティカルヒット！！！";
    }
    $msg .= "<br>攻撃力: ${attack}の攻撃！<br>敵のHP: ${enemy_hp}";
    return $msg;
}

function createEnemyAttackMsg($damage, $player_name, $my_hp) {
    $msg = "敵は攻撃をした！！！";
    if ($damage > 2000) {
        $msg .= "<br>クリティカルヒット！！！";
    }
    $msg .= "<br>攻撃力: ${damage}の攻撃！<br>${player_name}のHP: ${my_hp}";
    return $msg;
}

function createEndMsg($player_name, $my_hp, $enemy_hp)
{
    // それぞれのHP確認
    if ($my_hp === 0 && $enemy_hp > 0) {
        $end_msg = "<br>${player_name} は負けた。。。";
    } elseif ($my_hp === 0 && $enemy_hp === 0) {
        $end_msg = "<br>引き分け！！！";
    } elseif ($my_hp > 0 && $enemy_hp === 0) {
        $end_msg = "<br>${player_name} は敵を倒した！！！";
    }
    return $end_msg;
}