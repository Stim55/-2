<?php
if (isset($_POST['a'])) ;
if (empty($_POST['a'])) {
    echo "Заполните поле number A!";
}
echo "<br/>";
if (isset($_POST['b'])) ;
if (empty($_POST['b'])) {
    echo "Заполните поле number B!";

}
echo "<br/>";
if (isset($_POST['c'])) ;
if (empty($_POST['c'])) {
    echo "Заполните поле number C!";
    echo "<br/>";
}


echo "Наибольшее число:";
echo max($_POST);
echo "<br/>";

echo "Наименьшее число:";
echo min($_POST);
echo "<br/>";


if ($_POST['a'] == 0) {
    echo 'Число A равно 0';
}
echo "<br/>";
if ($_POST ['b'] == 0) {
    echo 'Число B равно 0';
}
echo "<br/>";
if ($_POST ['c'] == 0) {
    echo 'Число С равно 0';
}
echo "<br/>";


if ($_POST['a'] <= $_POST ['b']) {
    echo 'Число B больше числа A';
}
echo "<br/>";
if ($_POST['a'] <= $_POST['c']) {
    echo 'Число C больше числа A';
}







echo "<br/>";
$summa = $_POST['a'] + $_POST['b'] + $_POST['c'];
echo "Сумма чисел равна:";
echo $summa;
echo "<br/>";

$s = ($_POST['a'] + $_POST['b'] + $_POST['c']) / 3;
echo "Cреднее арифметическое число:";
echo $s;
echo "<br/>";


if($_POST['a']%2==0){
    echo "Число A кратно 2";
}
echo"<br/>";
if($_POST['b']%2==0){
    echo "Число B кратно 2";
}
echo"<br/>";
if($_POST['c']%2==0){
    echo "Число С кратно 2";
}
echo "<br/>";


if($_POST['a']%3==0){
    echo "Число A кратно 3";
}
echo"<br/>";
if($_POST['b']%3==0){
    echo "Число B кратно 3";
}
echo"<br/>";
if($_POST['c']%3==0){
    echo "Число С кратно 3";
}


echo "<br/>";


?>


