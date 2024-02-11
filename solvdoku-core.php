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
if ($grid !== false) {
    if (solveSudoku($grid)) {
        printGrid($grid);
    } else {
        echo "No solution exists.";
    }
}

function printGrid(array $grid) : void {
    for ($y = 0; $y < SIZE; $y++) {
        for ($x = 0; $x < SIZE; $x++) {
            echo $grid[$y][$x];
            if ($x !== SIZE - 1) {
                echo " ";
            }
        }
        echo "<br>";
    }
}

function isSafe(array $grid, int $row, int $col, int $num) : bool {
    for ($i = 0; $i < SIZE; $i++) {
        if ($grid[$row][$i] === $num) {
            return false;
        }
    }
    for ($i = 0; $i < SIZE; $i++) {
        if ($grid[$i][$col] === $num) {
            return false;
        }
    }
    $startRow = $row - $row % 3;
    $startCol = $col - $col % 3;

    for ($y = 0; $y < 3; $y++) {
        for ($x = 0; $x < 3; $x++) {
            if ($grid[$startRow + $y][$startCol + $x] === $num) {
                return false;
            }
        }
    }

    return true;
}

function solveSudoku(array &$grid, int $row = 0, int $col = 0) : bool {
    if ($col === SIZE) {
        $row++;
        $col = 0;
    }
    if ($row === SIZE) {
        return true;
    }

    if ($grid[$row][$col] > 0) {
        return (solveSudoku($grid, $row, $col + 1));
    }

    for ($num = 1; $num <= SIZE; $num++) {
        if (isSafe($grid, $row, $col, $num)) {
            $grid[$row][$col] = $num;
            if (solveSudoku($grid, $row, $col + 1)) {
                return true;
            }
        }

        $grid[$row][$col] = 0;
    }
    return false;
}

// print grid

// checks whether legal to assign to cell