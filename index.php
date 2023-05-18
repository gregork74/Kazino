<!DOCTYPE html>
<html>
<head>
    <title>Dice Roll</title>
    <link rel="icon" type="image/x-icon" href="img/favicon3.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <div class="container">
        <div class="title-div">
            <h1 class="diceroll">Dice Roll<a href=""  style="text-decoration:none;text-decoration-color:white;"onclick="pika()" style="color: white;">.</a></h1>
            <script>
                function pika(msg){
                    Swal.fire({
                        title: 'Credits',
                        text: 'Gregor Krapež, 4. RA /17. 5. 2023',
                        confirmButtonColor: "black"
                    })
                    event.preventDefault();
                }
            </script>
        </div>
        <div class="parentdaddy">
            <form method="post" action="play.php">
                <div class="daddy">
                    <div class="user-input">
                        <label for="user1">PLAYER NAME:</label>
                        <input type="text" maxlength="12" id="user1" name="users[]" required>
                        <label for="dice1">Number of Dice:</label>
                        <select id="dice1" name="dice[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3" selected>3</option>
                        </select>
                    </div>
                    <div class="user-input">
                        <label for="user2">PLAYER NAME:</label>
                        <input type="text" maxlength="12" id="user2" name="users[]" required>
                        <label for="dice2">Number of Dice:</label>
                        <select id="dice2" name="dice[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3" selected>3</option>
                        </select>
                    </div>
                    <div class="user-input">
                        <label for="user3">PLAYER NAME:</label>
                        <input type="text" maxlength="12" id="user3" name="users[]" required>
                        <label for="dice3">Number of Dice:</label>
                        <select id="dice3" name="dice[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3" selected>3</option>
                        </select>
                    </div>
                </div>
                <div class="igraj-button">
                    <input type="submit" id="submit-button" value="PLAY">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
