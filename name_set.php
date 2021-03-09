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
        <div id="name_page" class="home_bg">
            <div class="home_content wrapper">
                <h1 class="name_title">名前を入力してください。</h1>
                <form action="game.php" method="post" class="set_game">
                    <!-- <input type="image" src="images/pipo-boss004.png" alt="キャラ1"　name> -->
                    <input type="text" name="player_name">
                    <input type="submit" class="button" id="set_btn" value="対戦開始">
                </form>
            </div>
        </div>
    </body> 
</html>