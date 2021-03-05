<?php
$hp = 10000;
function attack($attack,$hp){
}
while ($hp > 0) {
    $technique = [1 => "パンチ", 2 => "キック", 3 => "投げ技", 4 => "気功", 5 => "爆弾", 6 => "投げキッス"];
    echo "攻撃技は？" . PHP_EOL . "1.パンチ 2.キック 3.投げ技 4.気功 5.爆弾 6.投げキッス" . PHP_EOL;
    $attack = trim(fgets(STDIN));
    switch ($attack) {
        case 1:
                if ($attack = trim($attack) == 1) {
                    echo $technique[1] . "の攻撃!!" . PHP_EOL;
                }
        case 2:
                if (trim($attack) == 2) {
                    echo $technique[2] . "の攻撃!!" . PHP_EOL;
                }
        case 3:
                if (trim($attack) == 2) {
                    echo $technique[2] . "の攻撃!!" . PHP_EOL;
                }
        case 4:
                if (trim($attack) == 2) {
                    echo $technique[2] . "の攻撃!!" . PHP_EOL;
                }
        case 5:
                if (trim($attack) == 2) {
                    echo $technique[2] . "の攻撃!!" . PHP_EOL;
                }

            $attack = rand(500, 3000);
            if ($attack >= 2000) {
                echo "クリティカルヒット！！" . PHP_EOL;
            }
            if ($hp - $attack > 0) {
                $hp -= $attack;
            } else {
                $hp = 0;
            }
            echo  "攻撃力" . $attack . " の攻撃！" . PHP_EOL . "HP: " . $hp . PHP_EOL . PHP_EOL;
            break;

        case 6:
                echo "投げキッスの攻撃！";
            $attack = rand(-1, 1) * 10000;
            if ($attack >= 2000) {
                echo "クリティカルヒット！！" . PHP_EOL;
            }
            if ($hp - $attack > 0) {
                $hp -= $attack;
            } else {
                $hp = 0;
            }
            echo "攻撃力" . $attack . " の攻撃！" . PHP_EOL . "HP: " . $hp . PHP_EOL;
            break;
        default:
            echo "攻撃に失敗" . PHP_EOL;
    }
};

echo '敵を倒した!!';