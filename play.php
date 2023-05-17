<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dice Roll</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["user1"]) && isset($_POST["user2"]) && isset($_POST["user3"])) {
                $_SESSION["users"] = [
                    $_POST["user1"],
                    $_POST["user2"],
                    $_POST["user3"]
                ];
            }
        }

        if (isset($_SESSION["users"])) {
            echo "<div class='users-container'>";

            foreach ($_SESSION["users"] as $user) {
                echo "<div class='user-wrapper'>";
                echo "<h2 class='user-heading'>Igralec: $user</h2>";
                echo "<div class='dice-container'>";

                $sum = 0;
                for ($i = 0; $i < 3; $i++) {
                    $number = rand(1, 6);
                    $sum += $number;
                    echo "<div class='dice'><img src='img/Dice$number.png' alt='Dice $number'></div>";
                }

                echo "</div>";
                echo "<p class='user-sum'>Seštevek: $sum</p>";
                echo "<hr>";
                echo "</div>";
            }

            echo "</div>";

            $winners = [];
            $maxSum = 0;

            foreach ($_SESSION["users"] as $user) {
                $sum = 0;

                for ($i = 0; $i < 3; $i++) {
                    $number = rand(1, 6);
                    $sum += $number;
                }

                if ($sum > $maxSum) {
                    $maxSum = $sum;
                    $winners = [$user];
                } elseif ($sum === $maxSum) {
                    $winners[] = $user;
                }
            }

            echo "<div class='winner-wrapper'>";
            echo "<h2 class='winner-heading'>Zmagovalec(i):</h2>";
            foreach ($winners as $winner) {
                echo "<p class='winner-name'>$winner</p>";
            }
            echo "<form method='get' action='index.php'>";
            echo "<input id='back-button' type='submit' value='BACK'>";
            echo "</form>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>