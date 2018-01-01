<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.</p>
<?php
$arr = array();
for ($i = 0; $i < 10; $i++) {
    $arr[]=rand(1,100);
}
print_r($arr);
$min = array_search(min($arr), $arr);
$max = array_search(max($arr), $arr);
echo "<br>";
echo "Min - {$arr[$min]} <br> Max - {$arr[$max]}<br>";
list($arr[$min], $arr[$max]) = [$arr[$max], $arr[$min]];
echo "<br>";
echo "Масив с измененными элементами<br>";
print_r($arr);
