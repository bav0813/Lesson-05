<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 21:02
     */

    //26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
// Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
// После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
    echo "<br><hr>";
    $arr = array();
    for ($a=1; $a<=100; $a++){
        $arr[] = rand(1, 100);
    }
    echo "<pre>";
    // print_r($arr);
    echo "<pre>";
    $res=1;
    foreach ($arr as $m => $value) {
        if ($value > 0 && $m % 2 == 0) {
            $res = $value * $res;
            echo "Произведение элементов $res<br>";

        }
    }
    foreach ($arr as $m => $value) {
        if ($value >0 && $m % 2 != 0){
            echo "Нечетный индекс: $m=>$value, <br>";

        }
    }
    echo "<pre>";
    //print_r($arr1);
    echo "<pre>";
    //$result = array_product($arr1);
    // echo $result;