<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 20:56
     */

    //7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
    // выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.

    echo "<hr>";
    $arr=[2, 5, 9, 15, 0, 4];

    foreach ($arr as $value) {
        if ($value>3 && $value<10)
            echo "$value ";

    }