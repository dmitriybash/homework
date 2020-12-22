<?
//Число ПИ
define("PI", M_PI);
echo "<div class='pi'>";
echo "<p> Число Пи: " . PI . "</p>";
echo "</div>";

//картинка от времени суток
$time = date("H");
if (($time >= 8) || ($time < 20))
    $img = 'sun';
elseif (($time >= 20) || ($time < 8))
    $img = 'moon';

//Первая задача ДЗ 21.12
$i = 5;
while ($i <= 13) {
    echo $i++;
}

//Вторая задача
$num = 1000;
$amount = 0;

while ($num >= 50) {
    $num /= 2;
    $amount++;
}
echo "Полученное число - {$num}<br>\n";
echo "Количество итераций - {$amount}<br>\n";

//Третюю не осилил
?>