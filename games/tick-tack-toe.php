<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tic-Tac-Toe</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        .container {
            height: 400px;
            width: 400px;
            grid-template-columns: 30% 30% 30%;
            grid-gap: 15px;
            background-color: #c0cfcc;
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
<div class="container">
    <button>X</button>
    <button>X</button>
    <button>X</button>
    <button>O</button>
    <button>O</button>
    <button>O</button>
    <button>O</button>
    <button>O</button>
    <button>O</button>
</div>
</body>
</html>
