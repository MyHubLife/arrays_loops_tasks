<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
    рядов, а не 5.<br><br>
    x<br>
    xx<br>
    xxx<br>
    xxxx<br>
    xxxxx</p>
<?php
$i=0;
$str = "x";
for ($i=0; $i<19; $i++):
    echo "{$str}<br>";
    $str.="x";
endfor;
