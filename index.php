<meta charset="utf-8">
Для реализации возможности загрузки файлов на сервер можно использовать простую форму:
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile">
<input type="submit" value="Загрузить">
</form>


<?php
$array = array('Zero', 'One', 'Two');
$reversed = array_reverse($array);
print_r($reversed);echo '<br>';
//error_reporting(E_ALL);
//ini_set('display_errors','0');

//print $x[0];
//dddxxxx();

//получение последнего символа элемента
$rew='this my room';
echo $l=$rew{strlen($rew)-1};
echo ' - получение последнего символа элемента'.'<br>';

//получение первого символа элемента
$rew='this my room';
echo $l=$rew{0};
echo ' - получение первого символа элемента'.'<br>';

//сумма масива
$mass=array(1, 3, 76, -56);
echo 'syma massiva - '.array_sum($mass).'<br>';

//обьединение строк
echo '<h2>обьединение строк: </h2>'.implode("|",$mass).'<br>';

// разбиение строк
//echo '<h3> разбиение  строк: </h3>'.explode($rew,6).'<br>';

//9
$r=4;
$r+=5;
echo $r.'<br>';

$r='kitten';
$r.=' - ted';
echo $r.'<br>';
//header('location://vk.com');

$x = 1;
if ($x == '1') {
echo 'a';
}
if ($x == true) {
echo 'b';
}
if((bool)$x === true){
echo 'e';
}
if ($x === true) {
echo 'c';
}
if((int)$x === true){
echo 'd';
}
echo '<br>';

//12245
$a='12345';
$a[$a[1]]='2';
echo $a;
echo '<br>';

function func(&$r){
  $r++;
}
$r=1;
func(func($r));
echo $r;
echo '<br>';

class A {
  public function __construct(){
    echo 'hello world';
  }
}
class B extends A {
  public function __construct(){}
}
$c=new B();
echo '<br>';

echo 'количество символов - '.strlen('bazar').'<br>';
echo '<br>';

$a=array('c','b','a');
$b=(array) $a;
var_dump($b).'<br>';
echo '<br>';

echo sprintf('"%04d"',1);
echo '<br>';

ob_start();
echo 'Test';
$output=ob_end_clean();
echo $output;
echo '<br>';



$array = array('Zero', 'One', 'Two');
$reversed = array_reverse($array);
print_r($reversed);
echo '<br>';
echo '<br>';

/*
$uploadfile = './upload/'.basename($_FILES['uploadfile']['name']);
// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else {echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit;
}
*/
// элементы массива,которые делятся на 5
$arr = array(3,8,15,25,16,11,10,5,7,30);
foreach($arr as $v)
if($v % 5 == 0) echo $v.'</br>';
echo '<br>';


//Пример создания двумерного массива.
// массив Машины  
$m = array('Honda','Hummer','BMW','Toyota');  
// массив Самолёты  
$s = array('AH','TU-144','Boing','СУ');  
// массив Танки  
$t = array('Тигр','Пантера','Т-34','Аль Халид');  
// массив Корабли  
$k = array('Кузнецов','Ямато','Ясень','Петропавловск');  
// двумерный массив Техника  
$tr = array($m, $s, $t, $k); 
print_r($tr);
echo '<br>';
echo '<br>';

//Ассоциативный двумерный массив.
// массив Машины 
$mw = array('Honda','Hummer','BMW','Toyota'); 
// массив Самолёты 
$sw = array('AH','TU-144','Boing','СУ'); 
// массив Танки 
$tw = array('Тигр','Пантера','Т-34','Аль Халид'); 
// массив Корабли 
$kw = array('Кузнецов','Ямато','Ясень','Петропавловск'); 
// двумерный массив Техника 
$tg = array('Машины'=>$mw, 'Самолёты'=>$sw, 'Танки'=>$tw, 'Корабли'=>$kw); 
print_r($tg);
echo '<br>';
echo '<br>';



// обход двумерного массива 
for($i=0; $i < count($tr); $i++)   
{  
   for($q=0; $q < count($tr[$i]); $q++)  
   {  
     echo  " » ".$tr[$i][$q];     
   }  
   echo "<br>";  
}  
echo '<br>';
echo '<br>';

// Подсчитываем количество элементов в массиве 
$sum = count($tg); 
// Ассоциативный массив следует обходить, при помощи конструкции foreach  
foreach($tg as $key => $vol)  
{ 
   // выводим название массива 
   echo $key ." -- "; 
   // обход 
   for($q=0; $q <= $sum; $q++) 
   { 
     echo " || ".$tg[$key][$q];    
   } 
   echo "<br>"; 
} 
echo '<br>';
echo '<br>';

//Обход двумерного массива и вывод в таблице.
// массив Машины 
$m = array('Honda','Hummer','BMW','Toyota'); 
// массив Самолёты 
$s = array('AH','TU-144','Boing','СУ'); 
// массив Танки 
$t = array('Тигр','Пантера','Т-34','Аль Халид'); 
// массив Корабли 
$k = array('Кузнецов','Ямато','Ясень','Петропавловск'); 
// двумерный массив Техника 
$tg = array('Машины'=>$m, 'Самолёты'=>$s, 'Танки'=>$t, 'Корабли'=>$k); 


// Подсчитываем количество элементов в массиве 
$sum = count($tg); 

echo "<table>"; 
foreach($tg as $key => $vol)  
{ 
   // выводим название массива 
   echo "<th>".$key ."</th>"; 
    
   // обход 
  
   for($q=0; $q <= $sum; $q++) 
   { 
     echo "<tr><td>  ".$tg[$key][$q]."<td></tr>";    
   }  
} 
echo "</table>"; 
echo '<br>';
echo '<br>';


$array = array(1, 2, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);
echo '<br>';
echo '<br>';

$firstquarter = array(1 => 'January', 'February', 'March');
print_r($firstquarter);
echo '<br>';
echo '<br>';


$foo = array('bar' => 'baz');
echo "Hello {$foo['bar']}!"; // Hello baz!
echo '<br>';
echo '<br>';

$info = array('coffee', 'brown', 'caffeine');
// Составить список всех переменных
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.";
echo '<br>';
// Составить список только некоторых из них
list($drink, , $power) = $info;
echo "$drink has $power.";
echo '<br>';
// Или только третья
list( , , $power) = $info;
echo "I need $power!";
echo '<br>';
echo '<br>';



$info = array('coffee', 'brown', 'caffeine');
list($a[0], $a[1], $a[2]) = $info;
var_dump($a);
echo '<br>';
echo '<br>';


$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
print_r($bar);
echo '<br>';
echo '<br>';


$foo = array("Robert" => "Bob", "Seppo" => "Sepi");
$bar = each($foo);
print_r($bar);
echo '<br>';
echo '<br>';


$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');
reset($fruit);
while (list($key, $val) = each($fruit)) 
{
  echo "$key => $val";
}
echo '<br>';
echo '<br>';


// array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
foreach (range(0, 12) as $number) 
{
  echo '  '.$number;
}
  echo '<br>';
// Параметр step был добавлен в 5.0.0
// array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
foreach (range(0, 100, 10) as $number) 
{
  echo ' '.$number;
}
 echo '<br>';
// Использование последовательности знаков было добавлено в версии 4.1.0
// array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
foreach (range('a', 'i') as $letter) 
{
  echo ' '.$letter;
}
 echo '<br>';
// array('c', 'b', 'a');
foreach (range('z', 'a') as $letter) 
{
  echo ' '.$letter;
}
echo '<br>';
echo '<br>';



$array = array('fruit1' => 'apple','fruit2' => 'orange','fruit3' => 'grape','fruit4' => 'apple','fruit5' => 'apple');
// этот цикл выведет все ключи ассоциативного массива,
// значения которых равны "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array);
}
echo '<br>';
echo '<br>';

//1
$x = 1;
while ($x <= 10):
     echo $x;
     $x++;
endwhile;
echo '<br>';

//2
$x=0;
while ($x<10)
{
$x++; // Увеличение счетчика
echo $x;
}
// Выводит 12345678910
echo '<br>';

//3
$x=0;
while ($x++<10) echo $x;
echo '<br>';

// do while 4
$x = 1;
do {
     echo $x;
} while ($x++<10);
echo '<br>';


for ($x=0; $x++<10;) echo $x;
echo '<br>';


for ($x=0, $y=0; $x<10; $x++, $y++) echo $x;
echo '<br>';


$names["Иванов"] = "Андрей";
$names["Петров"] = "Борис";
$names["Волков"] = "Сергей";
$names["Макаров"] = "Федор";
foreach ($names as $key => $value) 
{
  echo "<b>$value $key</b><br>";
}
echo '<br>';


$x=0;
while ($x++<10) {
  if ($x==3) break;
  echo "<b>Итерация $x</b><br>";
}
echo '<br>';
$x=0;
while ($x++<5) 
{
  if ($x==3) continue;
  echo "<b>Итерация $x</b><br>";
}
echo '<br>';


$x=1;
// Используем if-else
if ($x == 0) {
    echo "x=0<br>";
} elseif ($x == 1) {
    echo "x=1<br>";
} elseif ($x == 2) {
    echo "x=2<br>";
}



// Используем switch-case
switch ($x) {
case 0:
    echo "x=0<br>";
    break;
case 1:
    echo "x=1<br>";
    break;
case 2:
    echo "x=2<br>";
    break;
}
echo '<br>';




$x="Яблоко";
switch ($x) {
case "Яблоко":
    echo "Это Яблоко";
    break;
case "Груша":
    echo "Это Груша";
    break;
case "Арбуз":
    echo "Это Арбуз";
    break;
}
echo '<br>';
echo '<br>';


//выведет все так как нету брейка
$x=0;
switch ($x) {
case 0:
    echo "x=0<br>";
case 1:
    echo "x=1<br>";
case 2:
    echo "x=2<br>";
}
echo '<br>';
echo '<br>';


switch ($x) {
case 0:
case 1:
case 2:
     echo "x меньше, чем 3, но не отрицателен";
     break;
case 3:
     echo "x=3";
}
echo '<br>'.'<br>';


$x=3;
switch ($x) {
case 0:
    echo "x=0";
    break;
case 1:
    echo "x=1";
    break;
case 2:
    echo "x=2";
    break;
default:
    echo "x не равен 0, 1 или 2";
}
echo '<br>'.'<br>';



$x=3;
switch ($x):
case 0:
    echo "x=0";
    break;
case 1:
    echo "x=1";
    break;
case 2:
    echo "x=2";
    break;
default:
    echo "x не равен 0, 1 или 2";
endswitch;
echo '<br>'.'<br>';



function retfunct()
{
     return 7;
}
echo retfunct(); 
echo '<br>'.'<br>';

function numbers()
{
     return array (0, 1, 2);
}
list ($zero, $one, $two) = numbers();
echo $zero;
echo $one;
echo $two;
// Выводит '012'
echo '<br>'.'<br>';



function &returns_reference()
{
     return $someref;
}

$newref =& returns_reference();
echo '<br>';


// Создаем цикл, в теле которого конструкция include
//for($i=1; $i<=10; $i++) {
//include "$i.txt";
//}


$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
print_r($bar);
echo '<br>';


$foo = array("Robert" => "Bob", "Seppo" => "Sepi");
$bar = each($foo);
print_r($bar);
echo '<br>'.'<br>';


$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');
reset($fruit);
while (list($key, $val) = each($fruit)) {
    echo ' '."$key => $val
";
}
echo '<br>'.'<br>';


$array = array('step one', 'step two', 'step three', 'step four');
// первначально указатель указывает на первый элемент  
echo current($array) . "<br />"; // "шаг один"
// пропускаем два шага    
next($array);                                 
next($array);
echo current($array) . "<br />"; // "шаг три"
// сбрасываем указатель, тем самым возвращаемся к первому шагу
reset($array);
echo current($array) . "<br />
"; // "шаг один"
echo '<br>'.'<br>';


$a=6;
$b=9;
if ($a > $b) {
     echo "a больше, чем b";
} elseif ($a == $b) {
     echo "a равен b";
} else {
     echo "a меньше, чем b";
}
echo '<br>'.'<br>';


$i = 'W';
for($n=0; $n<6; $n++)
   echo ++$i . "\n";
echo '<br>';
echo '<br>'.'<br>';




$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Объеденение $a и $b
echo "Union of \$a and \$b: \n";
var_dump($c);
echo '<br>'.'<br>';



$c = $b + $a; // Объединение $b и $a
echo "Union of \$b and \$a: \n";
var_dump($c);
echo '<br>';

//. Сгенерировать 3 случайных числа в диапазоне от 0 до 10. Если сумма этих чисел меньше 14, сгенерировать новую тройку.
do {
$a = mt_rand(0, 10);
$b = mt_rand(0, 10);
$c = mt_rand(0, 10);
$result = $a+$b+$c;
echo $result."</br>";
} while ($a + $b + $c < 14);
echo '<br>'; 


//12
$a = "1";
$a[$a] = "2";
echo $a;
echo '<br>'; 
echo '<br>'; 

//вивести мах число елемента
$arr = array(1,2,3,4,10,100,3,4987,6,7,8,9);
echo max($arr);
echo '<br>'; 
echo '<br>'; 
//2 variant
$arr = array(5,45,3,4,5,490,62);
$max = $arr[0];
foreach ($arr as $val)
if ($max < $val) 
  $max = $val;
echo ' '.$max;

echo '<br>'; 
echo '<br>'; 

$w=1;
$$b=2;
//echo $$w;

echo '<br>'; 
echo '<br>'; 

function foo($num) {
	switch($num) 
	{
		case "2":
		echo "Двойка";
		break;
		case "3":
		echo "Тройка";
		break;
		default:
		echo "Другое число";
		break;
	}
}
foo(2);
echo '<br>'; 
echo '<br>'; 


$a = 'true';
if( 0 == $a || $a )
{
echo 'yes';
}
echo '<br>'; 
echo '<br>'; 

/* Что будет выведено на экран?
$a = 10;
echo $a— — - — - — - — - — - —$a;
echo '<br>'; 
echo '<br>'; 
 */

/*
Что выведет скрипт? (запускается непосредственно)
*/
$a=4;
$a += $a;
echo $a.'<br>'; 


$a = 'Turn me baby';
$b = '';
for ($i = strlen($a)-1; $i>=0; $i--)
$b .= $a[$i];
$a = $b;
echo $a.'<br>';
echo '<br>';

function fac($x) {
if ($x === 0)
return 1;
else
return $x*fac($x-1);
}
echo fac(4).'<br>';


function fibonacci($n)
{
if ($n < 3) {
return 1;
}
else {
return fibonacci($n-1) + fibonacci($n-2);
}
}
for ($n = 1; $n <= 16; $n++) {
echo(fibonacci($n)).'<br>';
}
$a=0;
if($b=$a)
echo "One".'<br>';
else
echo "Two".'<br>';
$beer = "Chimay";
echo "$beer".'<br>';
echo '$beer'.'<br>';
$cars = array("BMW", "Audi", "Mercedes", "Porsche");
foreach ($cars as $car) {
echo $car . "<br />";
}