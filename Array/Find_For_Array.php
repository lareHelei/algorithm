<?php
/**
 * Created by PhpStorm.
 * User: helei01
 * Date: 8/19 0019
 * Time: 14:33
 */
function Find($target, $array)
{
    // 二维数组获取 行数 和 列数
    $rows = count($array);
    $columns = count($array[0]);

    $rowVal = 0;
    $colVal = $columns-1;

    //row and columns c
    while( $rowVal <$rows && $colVal >= 0 ) {
        if($array[$rowVal][$colVal] > $target) {
            $colVal = $colVal - 1;
        }elseif($array[$rowVal][$colVal] < $target){
            $rowVal = $rowVal + 1;
        }elseif($array[$rowVal][$colVal] == $target){
            return true;
        }
    }

    return false;
}
echo "fei";