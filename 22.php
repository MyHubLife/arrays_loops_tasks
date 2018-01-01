<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p>
<?php
$str = 'xx';
while (strlen($str) < 12) {
    echo "{$str}<br>";
    $str .= "xx";
}