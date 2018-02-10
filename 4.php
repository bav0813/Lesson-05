<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 20:54
     */
    //4. Дан массив $arr. С помощью первого цикла
    // foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.

    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

    echo "<hr>Ключи: <br>";

    foreach ($arr as $key=>$value) {

        echo "$key <br>";
    }
    echo "<hr> Значения: <br>";

    foreach ($arr as $key=>$value) {

        echo "$value <br>";
    }