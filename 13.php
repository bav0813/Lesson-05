<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 20:57
     */
    //13. Вывести таблицу умножения

    for ($i=2;$i<10;$i++) {
        for ($j = 1; $j < 10; $j++) {
            $res = $i * $j;
            echo "$i x $j = $res <br>";
        }
        echo "<br>";
    }