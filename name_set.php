<?php
echo $_POST;
$player_characters = [
    1 =>'images/pipo-boss004.png',
    2 => 'images/pipo-enemy018.png',
    3 => 'images/pipo-enemy033.png',
    4 => 'images/pipo-enemy037b.png'
];

$character_pattern = filter_input(INPUT_POST, "character_pattern", FILTER_VALIDATE_INT);

if ($character_pattern) {
        switch ($character_pattern) {
        case 1:
        case 2:
        case 3:
        case 4:
            if ($player_characters) {
                foreach ($player_characters as $player_character) {
                    echo "<img src=\"{$player_character}\">";
                }
            }  
}
}
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
                <h1 class="name_title">名前を入力してください。</h1>
                <form action="game.php" method="post" class="set_game">
                    <input type="text" name="player_name">
                    <input type="submit" class="button" id="set_btn" value="対戦開始">
                </form>
            </div>
        </div>
    </body> 
</html>