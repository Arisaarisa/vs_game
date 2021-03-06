<?php
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

$name_is = h($_GET["name_is"]);
$attack = filter_input(INPUT_GET,"attack", FILTER_VALIDATE_INT);
$hp = 1000;
$techniques = [1 => "パンチ", 2 => "キック", 3 => "投げ技", 4 => "気功", 5 => "爆弾", 6 => "投げキッス"];
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
                <?php if (empty($attack)) : ?> 
                <?php while ($hp > 0) : ?>
                    <p><?= h($name_is)  ?>さん</p>
                    <p>攻撃技は？</p>
                    <form method="get">
                        <ol>
                            <li>パンチ</li>
                            <li>キック</li>
                            <li>投げ技</li>
                            <li>気功</li>
                            <li>爆弾</li>
                            <li>投げキッス</li>
                        </ol>
                        <input type="number" name="attack">
                        <input type="submit" value="OK">
                    </form>
                    <?php $attack = filter_input(INPUT_GET,"attack", FILTER_VALIDATE_INT); ?>
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
                        <p>敵を倒した！</p>
                    <?php endswitch; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </body> 
</html>