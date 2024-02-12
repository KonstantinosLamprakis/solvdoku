<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/images/sudoku solution 500.png">
    <title>Sudoku Solution Calculator | Solvdoku</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
    if (array_key_exists("data", $_GET)) {
        $i = 0;
        for ($y = 0; $y < 9; $y++) {
            for ($x = 0; $x < 9; $x++) {
                $grid[$y][$x] = (int) $_GET["data"][$i++];
            }
        }
    }
    ?>
    <?php include("solvdoku-core.php"); ?>
</head>

<body>
    <div id="sudoku-flex">
        <div class="table-container">
            <h2>Input Initial Sudoku Table</h2>
            <form id="sudoku-input-form" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div id="grid"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1"
                        name="data[]" inputmode="numeric"><input class="top" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="top"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="top" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="top"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="top" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="right top"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input
                        class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="right" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><br> <input
                        class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="right" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><br> <input
                        class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="top" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="top left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="top" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="top left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="right top" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><br> <input
                        class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="right" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><br> <input
                        class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="right" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><br> <input
                        class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="top" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="top left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="top" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="top left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="right top" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><br> <input
                        class="left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input class="left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="right" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><br> <input
                        class="bottom left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="bottom" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input
                        class="bottom left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="bottom" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><input
                        class="bottom left" type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]"
                        inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric"><input class="bottom right" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"><br>
                </div>
                <!-- <input type="submit" name="submit" value="Submit"><br> -->
            </form>
        </div>
        <form action="index.php">
            <input class="button" type="submit" form="sudoku-input-form" value="Solve It!" />
            <input class="button" type="submit" name="reset" value="Reset">
        </form>
        <div class="table-container">
            <h2>Result Sudoku</h2>
            <form>
                <?php
                    function printCell(int $y, int $x) : void {
                        if (isset($_GET['data']) && $GLOBALS["grid"][$y][$x] != 0) {
                            echo $GLOBALS["grid"][$y][$x];
                        }
                    }
                ?>
                <div id="result-grid"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(0, 0)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(0, 1)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(0, 2)?>"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(0, 3)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(0, 4)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(0, 5)?>"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(0, 6)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(0, 7)?>"
                        inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(0, 8)?>"
                        inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(1, 0)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(1, 1)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(1, 2)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(1, 3)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(1, 4)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(1, 5)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(1, 6)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(1, 7)?>"
                        inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(1, 8)?>"
                        inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(2, 0)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(2, 1)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(2, 2)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(2, 3)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(2, 4)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(2, 5)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(2, 6)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(2, 7)?>"
                        inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(2, 8)?>"
                        inputmode="numeric"><br> <input class="top left" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" value="<?php printCell(3, 0)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(3, 1)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(3, 2)?>"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(3, 3)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(3, 4)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(3, 5)?>"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(3, 6)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(3, 7)?>"
                        inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(3, 8)?>"
                        inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(4, 0)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(4, 1)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(4, 2)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(4, 3)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(4, 4)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(4, 5)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(4, 6)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(4, 7)?>"
                        inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(4, 8)?>"
                        inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(5, 0)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(5, 1)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(5, 2)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(5, 3)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(5, 4)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(5, 5)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(5, 6)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(5, 7)?>"
                        inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(5, 8)?>"
                        inputmode="numeric"><br> <input class="top left" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" value="<?php printCell(6, 0)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(6, 1)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(6, 2)?>"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(6, 3)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(6, 4)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(6, 5)?>"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(6, 6)?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(6, 7)?>"
                        inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(6, 8)?>"
                        inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(7, 0)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(7, 1)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(7, 2)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(7, 3)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(7, 4)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(7, 5)?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(7, 6)?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(7, 7)?>"
                        inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(7, 8)?>"
                        inputmode="numeric"><br> <input class="bottom left" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" value="<?php printCell(8, 0)?>"
                        inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(8, 1)?>"
                        inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(8, 2)?>"
                        inputmode="numeric"><input class="bottom left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(8, 3)?>"
                        inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(8, 4)?>"
                        inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(8, 5)?>"
                        inputmode="numeric"><input class="bottom left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(8, 6)?>"
                        inputmode="numeric"><input class="bottom" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(8, 7)?>"
                        inputmode="numeric"><input class="bottom right" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" value="<?php printCell(8, 8)?>"
                        inputmode="numeric"><br>
                </div>
            </form>
            <!-- @Konstantinos change the position of this -->
            <p><?php if (isset($result)) { echo $result; }?></p>
        </div>
    </div>
</body>

</html>