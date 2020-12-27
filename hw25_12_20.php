<?php
//Задача 1
$stroka1 = "Sessia";
$stroka2 = "bad";
if (mb_strlen($stroka1) > 5)
{
echo mb_substr($stroka1, 0, 5) . '...';
}
else {
echo $stroka1;
}
echo '<br>';
if (mb_strlen($stroka2) > 5)
{
echo mb_substr($stroka2, 0, 5) . '...';
}
else {
echo $stroka2;
}

//Задача 2
$stroka3 = "hello mr babaca ababac cabacac";
echo str_replace(array('a', 'b', 'c'), array(1, 2, 3), $stroka3);

//Задача 3
$stroka4 = 'abc abc abc';
echo  '<br>' . substr_count($stroka4, 'b');

//Задача 4
$stroka5 = 'html css php';
$arr = explode(' ', $stroka5);
print_r($arr);
?>