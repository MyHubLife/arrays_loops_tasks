<p>27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
    Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
    Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета,
    выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. <br>
<?php
$colors = array('red','yellow','blue','gray','maroon','brown','green');
    $rows = rand(2,8); //<tr>
    $cols= rand(2,8);  // <td>
echo '<table border="1">';
    for ($tr=0; $tr<=$rows; $tr++){
        echo '<tr>';
        for ($td=0; $td<=$cols; $td++){
            $color=$colors[array_rand($colors)];
            $digit = rand();
          echo "<td style='background-color:{$color}'>{$digit}</td>";  
        };
        echo '<tr>';
    };
    echo '</table>';