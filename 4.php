<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
    помощью второго — столбец элементов.</p>
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
<?php
echo "<br>";
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo "Столбец ключей"."<br>";
foreach ($arr as $key => $value):
    echo $key."<br>";
endforeach;
echo "Столбец значений"."<br/>";
foreach ($arr as $key):
    echo $key."<br>";
endforeach;