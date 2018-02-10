<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 21:02
     */
    //25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
// найти максимальное и минимальное значение и поменять их местами.
    $arr = array();
    for ($a=0; $a<=100; $a++){
        $arr[] = rand(0, 100);
    }
    echo "<pre>";
    print_r($arr);
    echo "<pre>";
    $min = min($arr);
    $max = max($arr);

    echo "Минимальное число массива: $min<br>";
    echo "Максимальное число массива: $max<br>";