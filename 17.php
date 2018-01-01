<p>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
    месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
<?php
$month = 'Dec';
$arr = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
foreach ($arr as $item) {
    if ($item == $month){
        echo "<b>{$item}</b><br>";
    }else {
        echo "{$item}<br>";
    }
};
//echo '<pre>';
//    print_r($arr);
//echo '</pre>';