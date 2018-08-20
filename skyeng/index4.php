<?php

function add($number_1 ='', $number_2 = '')
{
    $result = '';
    if ($number_1 && $number_2) {
        $add = 0;
        $sum_array = [];
        $number_1_array = array_reverse(str_split($number_1));
        $number_2_array = array_reverse(str_split($number_2));
        $max_len = (count($number_1_array) > count($number_2_array)) ? count($number_1_array) - 1: count($number_2_array) - 1;
        for ($i =0 ; $i <= $max_len; $i++) {
            $sum = $add;
            $sum +=  (isset($number_1_array[$i])) ? intval($number_1_array[$i]) : 0;
            $sum +=  (isset($number_2_array[$i])) ? intval($number_2_array[$i]) : 0;
            $add = ($sum > 10) ? ($sum - $sum % 10) / 10 : 0;
            $sum_array[$i] = $sum % 10;
        }
        $result = ($add > 0) ? strval($add) . implode(array_reverse($sum_array)) : implode(array_reverse($sum_array));
    }
    return $result;
}
//пример использования
echo add('1225245345345345245345454352245235422999','8884524523453445245243534525424525345345345');