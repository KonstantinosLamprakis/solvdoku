<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/images/sudoku solution 500.png">
    <title>Sudoku Solution Calculator | Solvdoku</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
    if (array_key_exists("data", $_GET) && isset($_GET["submit"])) {
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
    <div class="video-container">
        <video autoplay muted id="myVideo">
            <source src="./assets/sudoku.mp4" type="video/mp4">
        </video>
    </div>
    <div id="sudoku-flex">
        <div class="table-container">
            <h2>Input Initial Sudoku Table</h2>
            <form id="sudoku-input-form" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <?php
                function printCellInput(int $y, int $x): void
                {
                    if (!empty($_GET['data'][$y * 9 + $x])) {
                        echo $_GET['data'][$y * 9 + $x];
                    }
                }
                ?>
                <div id="grid"><input class="top left" type="number" min="1" max="9" autocomplete="off" maxlength="1"
                        name="data[]" inputmode="numeric" value="<?php printCellInput(0, 0); ?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(0, 1) ?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(0, 2) ?>"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(0, 3) ?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(0, 4) ?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(0, 5) ?>"
                        inputmode="numeric"><input class="top left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(0, 6) ?>"
                        inputmode="numeric"><input class="top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(0, 7) ?>"
                        inputmode="numeric"><input class="right top" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(0, 8) ?>"
                        inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(1, 0) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(1, 1) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(1, 2) ?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(1, 3) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(1, 4) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(1, 5) ?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(1, 6) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(1, 7) ?>"
                        inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(1, 8) ?>"
                        inputmode="numeric"><br> <input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(2, 0) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(2, 1) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(2, 2) ?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(2, 3) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(2, 4) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(2, 5) ?>"
                        inputmode="numeric"><input class="left" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(2, 6) ?>"
                        inputmode="numeric"><input class="" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(2, 7) ?>"
                        inputmode="numeric"><input class="right" type="number" min="1" max="9" autocomplete="off"
                        maxlength="1" name="data[]" inputmode="numeric" value="<?php printCellInput(2, 8) ?>"
                        inputmode="numeric"><br> <input class="top left" type="number" min="1" max="9"
                        autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(3, 0) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(3, 1) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(3, 2) ?>" inputmode="numeric"><input class="top left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(3, 3) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(3, 4) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(3, 5) ?>" inputmode="numeric"><input class="top left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(3, 6) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(3, 7) ?>" inputmode="numeric"><input class="right top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(3, 8) ?>" inputmode="numeric"><br> <input class="left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(4, 0) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(4, 1) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(4, 2) ?>" inputmode="numeric"><input class="left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(4, 3) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(4, 4) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(4, 5) ?>" inputmode="numeric"><input class="left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(4, 6) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(4, 7) ?>" inputmode="numeric"><input class="right" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(4, 8) ?>" inputmode="numeric"><br> <input class="left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(5, 0) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(5, 1) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(5, 2) ?>" inputmode="numeric"><input class="left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(5, 3) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(5, 4) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(5, 5) ?>" inputmode="numeric"><input class="left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(5, 6) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(5, 7) ?>" inputmode="numeric"><input class="right" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(5, 8) ?>" inputmode="numeric"><br> <input class="top left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(6, 0) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(6, 1) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(6, 2) ?>" inputmode="numeric"><input class="top left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(6, 3) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(6, 4) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(6, 5) ?>" inputmode="numeric"><input class="top left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(6, 6) ?>" inputmode="numeric"><input class="top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(6, 7) ?>" inputmode="numeric"><input class="right top" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(6, 8) ?>" inputmode="numeric"><br> <input class="left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(7, 0) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(7, 1) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(7, 2) ?>" inputmode="numeric"><input class="left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(7, 3) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(7, 4) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(7, 5) ?>" inputmode="numeric"><input class="left" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(7, 6) ?>" inputmode="numeric"><input class="" type="number" min="1"
                        max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(7, 7) ?>" inputmode="numeric"><input class="right" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(7, 8) ?>" inputmode="numeric"><br> <input class="bottom left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(8, 0) ?>" inputmode="numeric"><input class="bottom" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(8, 1) ?>" inputmode="numeric"><input class="bottom" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(8, 2) ?>" inputmode="numeric"><input class="bottom left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(8, 3) ?>" inputmode="numeric"><input class="bottom" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(8, 4) ?>" inputmode="numeric"><input class="bottom" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(8, 5) ?>" inputmode="numeric"><input class="bottom left"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(8, 6) ?>" inputmode="numeric"><input class="bottom" type="number"
                        min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(8, 7) ?>" inputmode="numeric"><input class="bottom right"
                        type="number" min="1" max="9" autocomplete="off" maxlength="1" name="data[]" inputmode="numeric"
                        value="<?php printCellInput(8, 8) ?>" inputmode="numeric"><br>
                </div>
                <!-- <input type="submit" name="submit" value="Submit"><br> -->
            </form>
        </div>
        <form class="center-form" action="index.php">
            <input class="button" type="submit" name="submit" form="sudoku-input-form" value="Solve It!" />
            <input class="button" type="submit" value="Reset">
            <p class="info-box">
                <?php if (isset($result)) {
                    echo $result;
                } ?>
            </p>
        </form>
        <div class="table-container">
            <h2>Result Sudoku</h2>
            <form>
                <?php
                function printCell(int $y, int $x): void
                {
                    if (isset($_GET['data']) && $GLOBALS["grid"][$y][$x] != 0) {
                        echo $GLOBALS["grid"][$y][$x];
                    }
                }
                function blueIfCalculated(int $y, int $x): void
                {
                    if (isset($_GET['data']) && $_GET['data'][$y * 9 + $x] === "") {
                        echo "solution-cell-calculated";
                    }
                }
                ?>
                <div id="result-grid"><input inputmode="numeric" type="number" maxlength="1" min="1" max="9"
                        value="<?php printCell(0, 0); ?>" autocomplete="off"
                        class="top left <?php blueIfCalculated(0, 0); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(0, 1); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(0, 1); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(0, 2); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(0, 2); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(0, 3); ?>" autocomplete="off"
                        class="top left <?php blueIfCalculated(0, 3); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(0, 4); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(0, 4); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(0, 5); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(0, 5); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(0, 6); ?>" autocomplete="off"
                        class="top left <?php blueIfCalculated(0, 6); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(0, 7); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(0, 7); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(0, 8); ?>" autocomplete="off"
                        class="top right <?php blueIfCalculated(0, 8); ?>" disabled><br><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(1, 0); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(1, 0); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(1, 1); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(1, 1); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(1, 2); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(1, 2); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(1, 3); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(1, 3); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(1, 4); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(1, 4); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(1, 5); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(1, 5); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(1, 6); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(1, 6); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(1, 7); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(1, 7); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(1, 8); ?>" autocomplete="off"
                        class="right <?php blueIfCalculated(1, 8); ?>" disabled><br><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(2, 0); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(2, 0); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(2, 1); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(2, 1); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(2, 2); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(2, 2); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(2, 3); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(2, 3); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(2, 4); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(2, 4); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(2, 5); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(2, 5); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(2, 6); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(2, 6); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(2, 7); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(2, 7); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(2, 8); ?>" autocomplete="off"
                        class="right <?php blueIfCalculated(2, 8); ?>" disabled><br><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(3, 0); ?>" autocomplete="off"
                        class="top left <?php blueIfCalculated(3, 0); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(3, 1); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(3, 1); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(3, 2); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(3, 2); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(3, 3); ?>" autocomplete="off"
                        class="top left <?php blueIfCalculated(3, 3); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(3, 4); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(3, 4); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(3, 5); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(3, 5); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(3, 6); ?>" autocomplete="off"
                        class="top left <?php blueIfCalculated(3, 6); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(3, 7); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(3, 7); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(3, 8); ?>" autocomplete="off"
                        class="top right <?php blueIfCalculated(3, 8); ?>" disabled><br><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(4, 0); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(4, 0); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(4, 1); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(4, 1); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(4, 2); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(4, 2); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(4, 3); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(4, 3); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(4, 4); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(4, 4); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(4, 5); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(4, 5); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(4, 6); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(4, 6); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(4, 7); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(4, 7); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(4, 8); ?>" autocomplete="off"
                        class="right <?php blueIfCalculated(4, 8); ?>" disabled><br><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(5, 0); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(5, 0); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(5, 1); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(5, 1); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(5, 2); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(5, 2); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(5, 3); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(5, 3); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(5, 4); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(5, 4); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(5, 5); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(5, 5); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(5, 6); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(5, 6); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(5, 7); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(5, 7); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(5, 8); ?>" autocomplete="off"
                        class="right <?php blueIfCalculated(5, 8); ?>" disabled><br><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(6, 0); ?>" autocomplete="off"
                        class="top left <?php blueIfCalculated(6, 0); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(6, 1); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(6, 1); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(6, 2); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(6, 2); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(6, 3); ?>" autocomplete="off"
                        class="top left <?php blueIfCalculated(6, 3); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(6, 4); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(6, 4); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(6, 5); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(6, 5); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(6, 6); ?>" autocomplete="off"
                        class="top left <?php blueIfCalculated(6, 6); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(6, 7); ?>" autocomplete="off"
                        class="top <?php blueIfCalculated(6, 7); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(6, 8); ?>" autocomplete="off"
                        class="top right <?php blueIfCalculated(6, 8); ?>" disabled><br><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(7, 0); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(7, 0); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(7, 1); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(7, 1); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(7, 2); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(7, 2); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(7, 3); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(7, 3); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(7, 4); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(7, 4); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(7, 5); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(7, 5); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(7, 6); ?>" autocomplete="off"
                        class="left <?php blueIfCalculated(7, 6); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(7, 7); ?>" autocomplete="off"
                        class="<?php blueIfCalculated(7, 7); ?>" disabled><input inputmode="numeric" type="number"
                        maxlength="1" min="1" max="9" value="<?php printCell(7, 8); ?>" autocomplete="off"
                        class="right <?php blueIfCalculated(7, 8); ?>" disabled><br><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(8, 0); ?>" autocomplete="off"
                        class="bottom left <?php blueIfCalculated(8, 0); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(8, 1); ?>" autocomplete="off"
                        class="bottom <?php blueIfCalculated(8, 1); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(8, 2); ?>" autocomplete="off"
                        class="bottom <?php blueIfCalculated(8, 2); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(8, 3); ?>" autocomplete="off"
                        class="bottom left <?php blueIfCalculated(8, 3); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(8, 4); ?>" autocomplete="off"
                        class="bottom <?php blueIfCalculated(8, 4); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(8, 5); ?>" autocomplete="off"
                        class="bottom <?php blueIfCalculated(8, 5); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(8, 6); ?>" autocomplete="off"
                        class="bottom left <?php blueIfCalculated(8, 6); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(8, 7); ?>" autocomplete="off"
                        class="bottom <?php blueIfCalculated(8, 7); ?>" disabled><input inputmode="numeric"
                        type="number" maxlength="1" min="1" max="9" value="<?php printCell(8, 8); ?>" autocomplete="off"
                        class="bottom right <?php blueIfCalculated(8, 8); ?>" disabled><br>
                </div>
            </form>
        </div>
    </div>
    <input type="submit" form="sudoku-input-form" value="[Keep Input]">
    <footer>
        created by Konstantinos Lamprakis and Arthur Zhu I think
    </footer>
</body>

</html>