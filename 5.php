<p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
долларов.'.</p>
<?php
echo '<br>';
$arr = ["Kolya"=>200, 'Vasya'=>300, 'Petya'=>400];
foreach ($arr as $key => $value):
    echo $key." - sallary ".$value." dollars<br>";
endforeach;
//print_r($arr);