<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 20:56
     */
    //8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
    // '­1­2­3­4­5­6­7­8­9­'. Циклы while и for
    $arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
    $res='';
    echo "<hr>";
    foreach ($arr as $value) {
        $res=$res.'-'.$value;
    }
    $res=$res.'-';
    echo $res;