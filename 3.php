<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 20:54
     */
    //3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла
    // foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.

    $arr=[26, 17, 136, 12, 79, 15];
    $result=0;
    foreach ($arr as $value) {
        $result=$result+pow($value,2);
    }
    echo "$result <br>";