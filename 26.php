<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
    Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. 
    После вывести на экран элементы, которые больше ноля и у которых не парный
    индекс.</p>
<?php
$arr = array();
for ($i = 0; $i < 10; $i++) {
    $arr[]=rand(1,100);
};
print_r($arr);
echo "<br>";
foreach ($arr as $key => $value):
    if ($key > 0 && $key%2==0) {
        $value *= $value;
        echo "Произведение чисел = {$value}<br>";
        //echo "KEY => {$key} ----- VALUE => {$value}<br>";
    };
endforeach;
echo "<br>";
foreach ($arr as $key => $value):
    if ($key > 0 && $key%2 !=0){
        echo "Значение непарного индекса - {$value}<br>";
        //echo "KEY => {$key} ----- VALUE => {$value}<br>";
    };
endforeach;