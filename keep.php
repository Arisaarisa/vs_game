<?php
$hp = 1000;
while ($hp > 0) {
    $techniques = [1 => "パンチ", 2 => "キック", 3 => "投げ技", 4 => "気功", 5 => "爆弾", 6 => "投げキッス"];
    echo "攻撃技は？" . PHP_EOL . "1.パンチ 2.キック 3.投げ技 4.気功 5.爆弾 6.投げキッス" . PHP_EOL;
    $attack = trim(fgets(STDIN));
    switch ($attack) {
        case 1:
                if ($attack == 1) {
                    echo $techniques[1] . "の攻撃!!" . PHP_EOL;
                }
        case 2:
                if ($attack == 2) {
                    echo $techniques[2] . "の攻撃!!" . PHP_EOL;
                }
        case 3:
                if ($attack == 3) {
                    echo $techniques[3] . "の攻撃!!" . PHP_EOL;
                }
        case 4:
                if ($attack == 4) {
                    echo $techniques[4] . "の攻撃!!" . PHP_EOL;
                }
        case 5:
                if ($attack == 5) {
                    echo $techniques[5] . "の攻撃!!" . PHP_EOL;
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
            if ($attack == 6) {
                echo $techniques[6] . "の攻撃!!" . PHP_EOL;
            }
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