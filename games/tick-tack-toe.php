<?php
// <!--    when I don't define exit at bottom, it will return entire html tag.-->
session_start();
$btnList = ["bt1", "bt2", "bt3", "bt4", "bt5", "bt6", "bt7", "bt8", "bt9"];
$winner = "";
if (!isset($_SESSION["userMove"])) {
    $_SESSION["userMove"] = [];
}

if (!isset($_SESSION["aiMove"])) {
    $_SESSION["aiMove"] = [];
}

if (isset($_POST["clear"])) {
    session_destroy();
}


if (count($_SESSION["userMove"]) < 3 || count($_SESSION["aiMove"]) < 3) {
    if ((isset($_POST["button"]))) {
        $btName = $_POST["button"];
        if (!isset($_SESSION[$btName])) {
            $_SESSION[$btName] = "X";
            $_SESSION["userMove"][] = (int)substr($btName, 2);
            $btNpc = "";
            do {
                $npcMove = rand(1, 9);
                $btNpc = "bt" . $npcMove;
            } while (isset($_SESSION[$btNpc]));
            $_SESSION[$btNpc] = "O";
            $_SESSION["aiMove"][] = (int)substr($btNpc, 2);
        }
        if (count($_SESSION["userMove"]) >= 3 || count($_SESSION["aiMove"]) >= 3){
            endGame();
        }
    }
} else {
    endGame();
}


function endGame(){
    global $winner;
    $userMove = $_SESSION["userMove"];
    rsort($userMove);
    for ($i = 0; $i < count($userMove) - 1; $i++) {
        if (!($userMove[$i] - $userMove[$i + 1] == 1)) {
            $winner = "";
            continue;
        }
        $winner = "User";
    }
}

?>
<!DOCTYPE html>
<html>
<head>

    <title>Tic-Tac-Toe</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: column;
        }

        .container {
            height: 400px;
            width: 400px;
            grid-template-columns: 30% 30% 30%;
            grid-template-rows: 30% 30% 30%;
            grid-gap: 15px;
            background-color: #c4c4c4;
            display: grid;
            padding: 10px;

        }

        .container > button {
            border-radius: 10%;
            display: flex;
            align-items: center;
            border: none;
            justify-content: center;
            place-self: stretch;
            background-color: palevioletred;
            background-image: linear-gradient(
                    to right,
                    #f897b6,
                    transparent 10%
            ),
            linear-gradient(
                    to bottom,
                    #f897b6,
                    transparent 10%);
            transition: 1s;
        }

        .container > button:hover {
            background-color: #ff36a8;
            background-image: radial-gradient(#ffa2d4, #ff36a8 90%);
        }

        .container > button:active {
            box-shadow: 0 0 9px 3px rgba(255, 248, 120, 1);
        }

        .container > button {
            transition: 0.05s;
            font-size: 50px;
            font-family: "Lato Light", serif;
            color: azure;
        }
    </style>
</head>
<body>
<form action="" method="post" class="container">
    <?php foreach ($btnList as $bt): ?>
        <?php if ($winner === "User"): ?>
            <button type="submit" name="button" disabled value="<?= $bt ?>"><?= $_SESSION[$bt] ?></button>
        <?php else: ?>
            <button type="submit" name="button" value="<?= $bt ?>"><?= $_SESSION[$bt] ?></button>
        <?php endif ?>
    <?php endforeach; ?>
</form>
<form action="" method="post">
    <button type="submit" name="clear">Clear</button>
</form>
<?php if ($winner === "User"): ?>
    <div id="result">Winner is User</div>
<?php else: ?>
    <div id="result"></div>
<?php endif; ?>
<?php var_dump($_SESSION["userMove"]) ?>
</body>
</html>
