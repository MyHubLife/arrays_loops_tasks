<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
    русские — в массив $ru.
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en = array('green', 'red','blue');
    $ru = array('зеленый', 'красный', 'голубой');</p>
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
foreach ($arr as $item => $value):
$en[] = $item;
$ru[] = $value;
endforeach;
echo "English array"."<br>";
echo '<pre>';
print_r($en);
echo '</pre>';
echo '<br>';
echo "Russian array"."<br>";
print_r($ru);