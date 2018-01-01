<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
    текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
<?php
$day = 'Sat';
$arr = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
foreach ($arr as $item) {
    if ($item == $day){
        echo "<i>{$item}</i><br>";
    }else {
        echo "{$item}<br>";
    }
};