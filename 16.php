<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 20:59
     */

    //16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
    // выведите на экран столбец элементов массива, как показано на картинке. 1, 2, 3 4, 5, 6 7, 8, 9

    $arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
    echo "<br><hr>";
    foreach ($arr as $value){
        if ($value==3 || $value==6 || $value==9) {
            echo "$value ";
        }
        else
            echo "$value, ";
    }
