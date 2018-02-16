<?php
$date = date("d F ");
echo "Дата:";
echo "$date";
echo "<br/>";


switch ($date) {
    case ($date <= 10):
        echo "Первая декада";
        break;
    case ($date <= 20):
        echo "Вторая декада";
        break;
    case ($date <= 30):
        echo "Третья декада";
        break;
}
echo "<br/>";


switch (Chrome) {
    case Chrome;
        echo "Ваш браузер: Chrome";
        break;
    case Firefox;
        echo "Ваш браузер: Firefox";
        break;
    case Safari;
        echo "Ваш браузер: Safari";
        break;
    case Opera;
        echo "Ваш браузер: Opera";
        break;
    default:
        echo "Не известный браузер";


}



?>