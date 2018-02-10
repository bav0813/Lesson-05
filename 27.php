<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.02.18
     * Time: 21:03
     */

    //27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols -
// кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon',
//'brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
// в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно
// находиться случайное число.

    echo "<br><hr>";

    $row = rand(1,10);
    $cols = rand(1,10);
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    echo "<table border= '1'><br>";
    for ($a = 1; $a <= $row; $a++) {
        echo "<tr><br>";
        for ($b = 1; $b <= $cols; $b++) {
            $num = rand(1,50);
            $c = $colors[rand(0,count($colors)-1)];
            echo "<td style='background-color:{$c}'>$num</td>";
        }
        echo "</tr>";
    }
    echo "</table>";