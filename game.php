<?php
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

$name_is = $_GET["name_is"];
$hp = 1000;
$techniques = [1 => "パンチ", 2 => "キック", 3 => "投げ技", 4 => "気功", 5 => "爆弾", 6 => "投げキッス"];
$attack = filter_input(INPUT_POST,"attack", FILTER_VALIDATE_INT);
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
                    <?php while ($hp > 0) : ?>
                        <?php if (empty($attack)) : ?>
                            <p><?= h($name_is)  ?>さん</p>
                            <p>攻撃技は？</p>
                            <form method="post">
                                <ol>
                                    <li>パンチ</li>
                                    <li>キック</li>
                                    <li>投げ技</li>
                                    <li>気功</li>
                                    <li>爆弾</li>
                                    <li>投げキッス</li>
                                </ol>
                                <input type="number" name="attack">
                                <!-- <input type="submit" value="OK"> -->
                            </form>
                        <?php endif; ?>
                        <?php switch ($attack) :
                            case 1 : ?>
                                <?php if ($attack == 1) : ?>
                                    <p>
                                        <?= h($name_is) ?>は<?= h($techniques[1]) ?> の攻撃をした!!
                                    </p> 
                                <?php endif; ?>
                            <?php case 2 : ?>
                                <?php if ($attack == 2) : ?>
                                <p>
                                    <?= h($name_is) ?>は<?= h($techniques[2]) ?> の攻撃!!
                                </p>
                                <?php endif; ?>
                            <?php case 3 : ?>
                                <?php if ($attack == 3) : ?>
                                    <p>
                                        <?= h($name_is) ?>は<?= h($techniques[3]) ?>の攻撃!!
                                    </p>
                                <?php endif; ?>
                            <?php case 4: ?>
                                <?php if ($attack == 4) : ?>
                                    <p>
                                        <?= h($name_is) ?>は<?= h($techniques[4]) ?>の攻撃!!
                                    </p>
                                <?php endif; ?>
                            <?php case 5 : ?>
                                <?php if ($attack == 5) : ?>
                                    <?= h($name_is) ?>は<?= h($techniques[5]) ?>の攻撃!!
                                <?php endif ?>

                                <?php $attack = rand(500, 3000); ?>
                                <?php if ($attack >= 2000) : ?>
                                    <p>クリティカルヒット！！</p>
                                <?php endif; ?>
                                <?php if ($hp - $attack > 0) : ?>
                                    <?php $hp -= $attack; ?>
                                <?php else : ?>
                                    <?php $hp = 0; ?>
                                <?php endif ?>
                                <p>
                                    攻撃力: <?php h($attack) ?>の攻撃！ <br> HP: <?php h($hp) ?><br>
                                </p>
                                <?php break; ?>

                            <?php case 6: ?>
                                <?php if ($attack == 6) : ?>
                                    <?= h($name_is) ?>は<?= $techniques[6] ?> の攻撃をした!!
                                <?php endif ?>
                                <?php $attack = rand(-1, 1) * 10000; ?>
                                <?php if ($attack >= 2000) : ?>
                                    <p>
                                        クリティカルヒット！！
                                    </p>
                                <?php endif; ?>
                                <?php if ($hp - $attack > 0) : ?>
                                    <?php $hp -= $attack; ?>
                                <?php else : ?>
                                    <?php $hp = 0; ?>
                                <?php endif ?>
                                <p>
                                    攻撃力: <?= h($attack) ?>の攻撃！<br> HP: <?= h($hp) ?> 
                                </p>
                                <?php break; ?>
                            <?php default: ?>
                                <p>攻撃に失敗</p>
                                <?php break ?>
                        <?php endswitch; ?>
                    <p>敵を倒した！</p>
                <?php endwhile; ?>
            </div>
        </div>
    </body> 
</html>