<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
    '­1­2­3­4­5­6­7­8­9­'.
    Циклы while и for</p>
<?php
$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = '-';
foreach ($arr as $value):
$str = $str.$value."-";
    endforeach;
    echo $str;