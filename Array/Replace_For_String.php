<?php
/**
 * Created by PhpStorm.
 * User: helei01
 * Date: 8/19 0019
 * Time: 15:04
 * replace splace for string
 * 请实现一个函数，将一个字符串中的空格替换成“%20”。例如，当字符串为We Are Happy.则经过替换之后的字符串为We%20Are%20Happy
 * move for splace '' -> '%20'  1. find splace count 2. move it
 */
function replaceSpace($str){
    //1. find splace count
    $count = 0;
    for($i = 0; $i < strlen($str); $i++) {
        if($str[$i] == ' ' | $str[$i] == " "){
            $count ++;
        }
    }
    //2.move for 2*count number;when meets '',a:count-1 b: 0\2\% for it space
    for($j = strlen($str)-1 ; $j >= 0; $j -- ) {
        if( $str[$j] != ' ') {
            $num = ($j+2*$count);
            $str[$j+2*$count] = $str[$j];
        }else{
            $str[$j+2*$count] = '0';
            $str[$j+2*$count-1] = '2';
            $str[$j+2*$count-2] = '%';
            $count--;
        }
    }
    return $str;
}
echo replaceSpace("hello world");