<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 20:59
     */

    //19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    // а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
    echo "<br><hr>";
    $arr = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday');
    foreach ($arr as $value){
        $days = date('l');
        if ($value == $days){
            echo "<i>$value </i>";
            $day=$value;
        }
        else {
            echo "$value ";
        }
    }