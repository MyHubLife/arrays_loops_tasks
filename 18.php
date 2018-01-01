<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    выходные дни следует вывести жирным.</p>
<?php
$day_off1 = 'Sat';
$day_off2 = 'Sun';
$arr = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
foreach ($arr as $item) {
    if ($item == $day_off1 || $item == $day_off2){
        echo "<b>{$item}</b><br>";
    }else {
        echo "{$item}<br>";
    }
};