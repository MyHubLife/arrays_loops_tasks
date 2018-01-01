<p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
    выведите на экран столбец элементов массива, как показано на картинке.
    1, 2, 3
    4, 5, 6
    7, 8, 9</p>
<?php
echo "<h1>Вариант №1 </h1>";
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $item) {
 if ($item == 4 || $item == 7)
    echo "<br>";
    echo "{$item},";
};

echo "<h1>Вариант №2 </h1>";

foreach ($arr as $key => $value) {
    echo $value;
    if (($key + 1) % 3) {
        echo ', ';
    } else {
        echo "<br>\n";
    }
}