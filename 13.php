<p>13. Вывести таблицу умножения</p>
<?php
$a = 1;
$b = 1;
$res = 0;

for ($a=1; $a<10; $a++){
    echo "<h1>Таблица умножения на {$a}</h1>";
    for ($b=1; $b<10; $b++){
        $res = $a * $b;
        echo "{$a} * {$b} = {$res}<br>";
    };
};