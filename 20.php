<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 21:00
     */

   //20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.

    echo "<br><hr>";
    for ($a = 0; $a<=20; $a++) {
        for ($b = 0; $b < $a; $b++) {
            echo "x";
        }
        echo "<br>";
    }