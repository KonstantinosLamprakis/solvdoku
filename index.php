<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/images/sudoku solution 500.png">
    <title>Sudoku Solution Calculator | Solvdoku</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="sudoku-flex">
    <form id="sudoku-input-form" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div id="grid"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><br> <input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><br> <input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><br> <input class="bottom left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="bottom left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="bottom left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><input class="bottom right" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                inputmode="numeric"><br>
        </div>
        <!-- <input type="submit" name="submit" value="Submit"><br> -->
        <!-- <?php #var_dump($_GET["data"]); ?> -->
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $i = 0;
            for ($y = 0; $y < 9; $y++) {
                for ($x = 0; $x < 9; $x++) {
                    $grid[$y][$x] = (int) $_GET["data"][$i++];
                }
            }
        } else {
            $grid = false;
        }
    ?>
    <?php include("solvdoku-core.php"); ?>
    <form method="POST" action="index.php">
        <input type="submit" form="sudoku-input-form" value="Solve It!"/>
        <input type="submit" name="reset" value="Reset">
    </form>
    <form>
        <div id="result-grid"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[0][0]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[0][1]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[0][2]?>"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[0][3]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[0][4]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[0][5]?>"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[0][6]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[0][7]?>"
                inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[0][8]?>"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[1][0]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[1][1]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[1][2]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[1][3]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[1][4]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[1][5]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[1][6]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[1][7]?>"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[1][8]?>"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[2][0]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[2][1]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[2][2]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[2][3]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[2][4]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[2][5]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[2][6]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[2][7]?>"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[2][8]?>"
                inputmode="numeric"><br> <input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[3][0]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[3][1]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[3][2]?>"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[3][3]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[3][4]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[3][5]?>"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[3][6]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[3][7]?>"
                inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[3][8]?>"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[4][0]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[4][1]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[4][2]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[4][3]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[4][4]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[4][5]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[4][6]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[4][7]?>"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[4][8]?>"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[5][0]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[5][1]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[5][2]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[5][3]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[5][4]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[5][5]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[5][6]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[5][7]?>"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[5][8]?>"
                inputmode="numeric"><br> <input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[6][0]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[6][1]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[6][2]?>"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[6][3]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[6][4]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[6][5]?>"
                inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[6][6]?>"
                inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[6][7]?>"
                inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[6][8]?>"
                inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[7][0]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[7][1]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[7][2]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[7][3]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[7][4]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[7][5]?>"
                inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[7][6]?>"
                inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[7][7]?>"
                inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[7][8]?>"
                inputmode="numeric"><br> <input class="bottom left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[8][0]?>"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[8][1]?>"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[8][2]?>"
                inputmode="numeric"><input class="bottom left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[8][3]?>"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[8][4]?>"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[8][5]?>"
                inputmode="numeric"><input class="bottom left" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[8][6]?>"
                inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[8][7]?>"
                inputmode="numeric"><input class="bottom right" type="number" min="1" max="9" autocomplete="off" maxlength="1" value="<?php if (isset($_GET['data'])) echo $grid[8][8]?>"
                inputmode="numeric"><br>
        </div>
    </form>
    </div>
</body>

</html>