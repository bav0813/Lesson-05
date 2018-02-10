<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 20:59
     */
    //17.Сосктавьте массив месяцев. С помощью цикла foreach
    // выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.


    $arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    foreach ($arr as $value){
        $month = date('F');
        if ($value == $month) {
            echo "<b>$value </b>";
        }
        else{
            echo "$value ";
        }
    }
