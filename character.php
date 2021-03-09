<?php
// if ($player_characters) {
//     foreach ($player_characters as $player_character) {
//         echo "<img src=\"{$player_character}\">";
//     }
// }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap | fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <title>VS-GAME</title>
    </head>
    <body>
        <div id="name_page" class="home_bg">
            <div class="home_content wrapper">
                <h1 class="name_title">キャラクターを選択してください。</h1>
                <form action="name_set.php" method="post" class="set_character">
                    <input type="image" src="images/pipo-boss004.png" alt="キャラ1"　name="character_pattern">
                    <input type="image" src="images/pipo-enemy018.png" alt="キャラ1"　name="character_pattern">
                    <input type="image" src="images/pipo-enemy033.png" alt="キャラ1"　name="character_pattern">
                    <input type="image" src="images/pipo-enemy037b.png" alt="キャラ1"　name="character_pattern">
                </form>
            </div>
        </div>
    </body> 
</html>