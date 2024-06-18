<?php


$num5 = 25; $num6 = 7;
if($num5 % $num6 == 0){
    echo "Нет остачи";
}
else{
    echo "Есть остача";
}



$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$num1 = (int)$num1;
$num2 = (int)$num2;

if ($num1 > $num2) {
    $larger = $num1;
} else {
    $larger = $num2;
}

$square = $larger * $larger;

echo "      Квадрат більшого з двох чисел: $square";


$month = $_POST['month'];

$year = 2024;

$days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);


echo "      Кількість днів у місяці $month року $year: '$days_in_month'      ";

echo "<br>  ";
if($num1 % 3 == 0 && $num2 % 3 == 0){
    echo $num1 + $num2;
}
else if($num2 != 0){
    echo $num1 / $num2;
}
else {
    echo "        Некоректный ввод";
}

echo "<br><a href='index.php'>Назад</a>.";