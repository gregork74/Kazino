<!DOCTYPE html>
<html>
<head>
    <title>Dice Roll</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
</style>
<body>
    <div class="container">
        <div class="title-div">
        <h1 style="border: 4px solid rgb(62, 64, 128);padding: 13px; border-radius:7px;background-color:rgba(255, 255, 255, 0.445); ">Dice Roll</h1>
        </div>
        <div class="parentdaddy">
            <form method="post" action="play.php">
                <div class="daddy">
                    <div class="user-input">
                        <label for="user1">PLAYER NAME:</label>
                        <input type="text" id="user1" name="user1" required>
                    </div>
                    <div class="user-input">
                        <label for="user2">PLAYER NAME:</label>
                        <input type="text" id="user2" name="user2" required>
                    </div>
                    <div class="user-input">
                        <label for="user3">PLAYER NAME:</label>
                        <input type="text" id="user3" name="user3" required>
                    </div>
                </div>
                <div class="igraj-button">
                    <input type="submit" value="PLAY" style="height: 50px; width:170px; font-size: 23px;border: 3px solid rgb(62, 64, 128);border-radius:7px;font-family: 'Grand Casino', sans-serif;background-color:rgba(255, 255, 255, 0.445);">
                </div>
            </form>
        </div>
    </div>
</body>
</html>