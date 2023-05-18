<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dice Roll</title>
    <link rel="icon" type="image/x-icon" href="img/favicon3.png">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if (isset($_POST["users"]) && is_array($_POST["users"])) {
                    $_SESSION["users"] = [];
                    $users = $_POST["users"];
                    $dice = $_POST["dice"];
                    $count = count($users);

                    for ($i = 0; $i < $count; $i++) {
                        $user = trim($users[$i]);
                        $numDice = intval($dice[$i]);

                        if (!empty($user)) {
                            $_SESSION["users"][] = [
                                "name" => $user,
                                "dice" => $numDice
                            ];
                        }
                    }
                }
            }
            if (isset($_SESSION["users"])) {
                echo "<div class='users-container'>";

                $winners = [];
                $maxSum = 0;

                foreach ($_SESSION["users"] as $user) {
                    $userName = $user["name"];
                    $numDice = $user["dice"];

                    echo "<div class='user-wrapper'>";
                    echo "<h2 class='user-heading'>PLAYER: $userName</h2>";
                    echo "<div class='dice-container'>";

                    $sum = 0;
                    for ($i = 0; $i < $numDice; $i++) {
                        $number = rand(1, 6);
                        $sum += $number;
                        echo "<div class='dice'><img src='img/Dice$number.png' alt='Dice $number'></div>";
                    }

                    if ($sum > $maxSum) {
                        $maxSum = $sum;
                        $winners = [$userName];
                    } elseif ($sum === $maxSum) {
                        $winners[] = $userName;
                    }

                    echo "</div>";
                    echo "<p class='user-sum'>Result: $sum</p>";
                    echo "<hr>";
                    echo "</div>";
                }

                echo "</div>";

                echo "<div class='winner-wrapper'>";
                echo "<h2 class='winner-heading'>Winner:</h2>";
                foreach ($winners as $winner) {
                    echo "<p class='winner-name'>$winner</p>";
                }
                echo "<form method='get' action='index.php'>";
                echo "<input id='back-button' type='submit' value='TRY AGAIN'>";
                echo "</form>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
