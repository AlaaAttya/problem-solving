<?php


// Complete the hourglassSum function below.
function hourglassSum($arr)
{
    $sumsArray = [];
    for ($i = 0; $i < 4; $i++) {
        $columnIndexNumber = $i;
        for ($x = 0; $x < 4; $x++) {
            $rowIndex = $x;

            $sum = $arr[$columnIndexNumber][$rowIndex] +
                $arr[$columnIndexNumber][$rowIndex + 1] +
                $arr[$columnIndexNumber][$rowIndex + 2] +
                $arr[$columnIndexNumber + 1][$rowIndex + 1] +
                $arr[$columnIndexNumber + 2][$rowIndex] +
                $arr[$columnIndexNumber + 2][$rowIndex + 1] +
                $arr[$columnIndexNumber + 2][$rowIndex + 2];
            $sumsArray[] = $sum;
        }


    }

    return max($sumsArray);
}

$testArr = [];
$testArr[] = [-9, -9, -9, 1, 1, 1];
$testArr[] = [0, -9, 0, 4, 3, 2];
$testArr[] = [-9, -9, -9, 1, 2, 3];
$testArr[] = [0, 0, 8, 6, 6, 0];
$testArr[] = [0, 0, 0, -2, 0, 0];
$testArr[] = [0, 0, 1, 2, 4, 0];


echo "result is => " . hourglassSum($testArr);
