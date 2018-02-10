<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 20:57
     */

    //11. Выведите столбец четных чисел в промежутке от нуля до 100.
    echo "<br><hr>";
    for ($i=0;$i<=100;$i++) {
        if ($i%2==0)
            echo "$i <br>";
    }