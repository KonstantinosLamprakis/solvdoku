<?php declare(strict_types = 1);

define("SIZE", 9);

// $grid = [   [3, 0, 6, 5, 0, 8, 4, 0, 0],
//             [5, 2, 0, 0, 0, 0, 0, 0, 0],
//             [0, 8, 7, 0, 0, 0, 0, 3, 1],
//             [0, 0, 3, 0, 1, 0, 0, 8, 0],
//             [9, 0, 0, 8, 6, 3, 0, 0, 5],
//             [0, 5, 0, 0, 9, 0, 6, 0, 0],
//             [1, 3, 0, 0, 0, 0, 2, 5, 0],
//             [0, 0, 0, 0, 0, 0, 0, 7, 4],
//             [0, 0, 5, 2, 0, 6, 3, 0, 0] ];


if (isset($grid)) {
    
    $mygrid = &$grid;

    checkGrid($grid);
    if (isset($GLOBALS["faultyCells"])) {
        $result = "&#129488; Hmmm... Bad input. Make sure you didn't insert same number twice in a row/column.";
    } else {
        if (solveSudoku()) {
            $result = "We Found multiple solutions. This is one of them &#128521; &#128073; .";
        } else if (!isset($grid2)) {
            $result = "No solution exists.";
        }
    }
}

function checkGrid(array &$grid) : void {
    for ($y = 0; $y < SIZE; $y++) {
        for ($x = 0; $x < SIZE; $x++) {
            if ($grid[$y][$x] === 0) {
                continue;
            }
            $num = $grid[$y][$x];
            $grid[$y][$x] = 0;
            $isSafe = isSafe($y, $x, $num);
            if (!$isSafe) {
                findFaulty($y, $x, $num);
                $GLOBALS["faultyCells"][] = ["x" => $x, "y" => $y];
            }
            $grid[$y][$x] = $num;
            if (!$isSafe) {
                return;
            }
        }
    }
}

// marks all faulty cells with the current one in the first rule found
function findFaulty(int $row, int $col, int $num) : void {
    for ($i = 0; $i < SIZE; $i++) {
        if ($GLOBALS["mygrid"][$row][$i] === $num) {
            $GLOBALS["faultyCells"][] = ["x" => $i, "y" => $row];
        }
    }
    if (isset($GLOBALS["faultyCells"])) { return; }

    for ($i = 0; $i < SIZE; $i++) {
        if ($GLOBALS["mygrid"][$i][$col] === $num) {
            $GLOBALS["faultyCells"][] = ["x" => $col, "y" => $i];
        }
    }
    if (isset($GLOBALS["faultyCells"])) { return; }
    $startRow = $row - $row % 3;
    $startCol = $col - $col % 3;

    for ($y = 0; $y < 3; $y++) {
        for ($x = 0; $x < 3; $x++) {
            if ($GLOBALS["mygrid"][$startRow + $y][$startCol + $x] === $num) {
                $GLOBALS["faultyCells"][] = ["x" => $startCol + $x, "y" => $startRow + $y];
            }
        }
    }
}

function isSafe(int $row, int $col, int $num) : bool {
    for ($i = 0; $i < SIZE; $i++) {
        if ($GLOBALS["mygrid"][$row][$i] === $num) {
            return false;
        }
    }
    for ($i = 0; $i < SIZE; $i++) {
        if ($GLOBALS["mygrid"][$i][$col] === $num) {
            return false;
        }
    }
    $startRow = $row - $row % 3;
    $startCol = $col - $col % 3;

    for ($y = 0; $y < 3; $y++) {
        for ($x = 0; $x < 3; $x++) {
            if ($GLOBALS["mygrid"][$startRow + $y][$startCol + $x] === $num) {
                return false;
            }
        }
    }

    return true;
}

// return value specifies whether to halt execution
function solveSudoku(int $row = 0, int $col = 0) : bool {
    if ($col === SIZE) {
        $row++;
        $col = 0;
    }
    if ($row === SIZE) {
        if (isset($GLOBALS["grid2"])) {
            return true;
        }
        $GLOBALS["grid2"] = $GLOBALS["grid"];
        $GLOBALS["mygrid"] = &$GLOBALS["grid2"];
        return false;
    }

    if ($GLOBALS["mygrid"][$row][$col] > 0) {
        return (solveSudoku($row, $col + 1));
    }

    for ($num = 1; $num <= SIZE; $num++) {
        if (isSafe($row, $col, $num)) {
            $GLOBALS["mygrid"][$row][$col] = $num;
            if (solveSudoku($row, $col + 1)) {
                return true;
            }
        }

        $GLOBALS["mygrid"][$row][$col] = 0;
    }
    return false;
}