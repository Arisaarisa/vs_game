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
        <div id="name_page" class="home_bg">
            <div class="home_content wrapper">
                <h1 class="name_title">名前を入力してください。</h1>
                <form action="game.php" method="post" class="set_game">
                    <input type="text" maxlength='12' name="player_name">
                    <input type="submit" class="btn" id="set_btn" value="対戦開始">
                </form>
            </div>
        </div>
    </body> 
</html>