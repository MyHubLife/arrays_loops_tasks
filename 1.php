<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>
<?php
$arr =['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $value):
echo $value.'<br/>';
endforeach;
