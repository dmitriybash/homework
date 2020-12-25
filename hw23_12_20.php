<?php
//Задание 1
$arr = array();
for ($i = 0; $i < 11; $i++)
{
    $arr[] = mt_rand(0, 100);
    if ($arr[$i] % 2 == 0)
    {
        echo '<strong>' . $arr[$i] . '</strong><br>';
    }
    else
    {
        echo $arr[$i] . '<br>';
    }
}
//Задание 2
$arr_a = [
    "Argentina",
    "Russia",
    "USA",
    "Greece",
    "Australia",
    "China",
    "Africa",
    "Norway"
];
foreach ($arr_a as $key => $value)
{
    if ($value[0] == 'A')
    {
        echo "$value";
    }
}
?>