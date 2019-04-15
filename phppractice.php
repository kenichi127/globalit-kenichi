<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>My first php page</h1>
   
   <?php
   $name = "Iwasaki Kenichi";
   echo "My name is $name !";
   $color="yello";
   echo "My favorite color is $color .";
   $x = 10;
   $y = 15;
   $ans = $x + $y ;
   echo "there are $ans fruits";
   echo "<h2>PHP is Fun!</h2>";
   echo "Hello world!<br>";
   echo "I am about to learn PHP!<br>";
   echo "This ", "string ", "was ", "made ", "with multiple parameters.";

   print "<h2>PHP is Fun!</h2>";
   print "Hello world!<br>";
   print "I'm about to learn PHP!";
   $age = 21;
   echo "<h3 text-style='bold' font='Arial'>Personal Details</h3><br>";
   echo "Name:$name<br>";
   echo "Age:$age<br>";
   $_2030 = $age + 11;
   echo "In 2030, My age will be $_2030 .";
   $string1 = "This is a text!";
   $string2 = 'This is a text!';

   echo $string1;
   echo "<br>";
   echo $string2;
   echo "<br>";
   $int = 19980127;
   var_dump($int);
   var_dump($string1);
   $fl = 1998.0127;
   var_dump($fl);
   $fl_1 = "99.99.99";
   var_dump($fl_1);
   $car = array("Toyota","Honda","Nissan");
   var_dump($car);
   echo "<br>";
   $hi = "hello!";
   $hi = null;
   var_dump($hi);
   echo "<br>";
   echo strlen("Hello world!");
   echo "<br>";
   echo str_word_count("Hello Cebu Philippines!");
   echo "<br>";
   echo strrev("I want to reverse");
   $answer = "This answer is";
   $_bank = 5000;
   $_web = 15000;
   $_online = 25000;
   echo "<br>";
   $all = $_bank + $_web + $_online;
   echo "answer is $all .";
   $ipod = 20800;
   $nokori = $all - $ipod;
   echo"$answer $nokori";
   echo "<br>";
   $work = 30000;
   $a = $work * 12;
   echo "$answer $a .";
   $mom = $work/2;
   echo "$answer $mom .";
?>
<br>
<?php
   $x = 8;
   $y = 8;
   var_dump($x==$y);
   var_dump($x===$y);
   var_dump($x!=$y);
   var_dump($x!==$y);
   var_dump($x>$y);
   var_dump($x<$y);
   var_dump($x>=$y);
   var_dump($x<=$y);
   $txt1 = "Hello";
   $txt2 = "Aubrey!";
   echo $txt1 . $txt2;
   echo $txt1 .= $txt2;
   echo "<br>";
   echo "<br>";
   $my_name = "Kenichi";

if ( $my_name == "Kenichi" ) {
	echo "Your name is Kenichi! <br>";
	}

echo "Welcome to PHP Basics!";
echo "<br>";
$input1 = "5";
$input2 = "5";
if ( $input2 == $input1 ) {
	echo "It is the same. <br>";
    }
$number = 123;

if ( $number == 3 ) {
        echo "The number is 3";
    } else {
        echo "The number is $number it is not 3";
    }
echo"<br>";

    $_age = 300;

    if ( $_age > 30) {
        echo "You are old!!!";
    } else {
        echo "You are not yet old!";
    }
    echo"<br>";
    if ( $number == 3 ) {
        echo "The number is 3";
    } elseif ( $number == 123 ) {
    echo "The number is 123"; 
    } else {
        echo "The number is $number it is not 3 or 123";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $grade =101;
    if (is_string($grade)==true) {
        echo "This grade is nothing";
    }elseif ( $grade >= 80 && $grade <= 100) {
        echo "Your grade is $grade .It is Excellent.";
    }elseif ( $grade >= 70 && $grade <= 79) {
        echo "Your grade is $grade .It is Very Good.";
    }elseif ($grade >= 60 && $grade <= 69) {
        echo "Your grade is $grade .It is Good.";
    }elseif ($grade >= 0 && $grade <= 59 ) {
        echo "Your grade is $grade .It is Failure.";
    }
    
    $favcolor = "red";

switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
    	    break;
    case "blue":
  	  echo "Your favorite color is blue!";
        break;
    case "green":
  	  echo "Your favorite color is green!";
        break;
    default:
  	  echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
$food = "sushi";

switch ($food) {
    case "sushi":
      echo "Healthy and Good!";
    	    break;
    case "french fries":
  	  echo "Oily but Yummy!";
        break;
    case "salad":
  	  echo "No comment";
        break;
    case "nori":
  	  echo "Is it food?";
        break;
    default:
  	  echo "Your food is $food!";
}
echo "<br>";
echo "<br>";
$input3 = 2;
echo "<br>";
echo $input3;
$input4 = -8;
echo "<br>";
echo $input4;
$operater ="minus";
echo "<br>";
echo $operater;
echo "<br>";
if (is_numeric($input3)==true or is_numeric($input4)==true) {
    switch ($operater) {
    case "add":
      $add = $input3 + $input4;
      echo "Answer is $add.";
    	    break;
    case "minus":
      $minus = $input3 - $input4;
  	  echo "Answer is $minus.";
        break;
    case "multiphy":
      $multiphy = $input3 * $input4;
  	  echo "Answer is $multiphy";
        break;
    case "divide":
      $divide = $input3 / $input4;
  	  echo "Answer is $divide";
        break;
    default:
  	  echo "Operater is error!";
}}else{
echo "Input is error!";
}
echo "<br>";
$x = 1;
while($x <= 7){
    echo "The number is : $x <br>";
    $x++;
}
echo "<br>";
$_x = 1; 
do {
    echo "The number is : $x <br>";
    $_x++;
}while($_x <= 7);
echo "<br>";
echo "<br>";
for ($__x = 0; $__x <= 7; $__x++) {
    echo "The number is : $__x <br>";
}
$_colors = array("red" , "green" , "blue" , "yellow");
foreach ($_colors as $_value){
    echo "$_value <br>";
} 


for ($s = 1 ; $s <=10; $s++)
?>
<?php
$table = array(
    array("Number","Description"),
    array("1","This is Data1"),
    array("2","This is Data2"),
    array("3","This is Data3"),
    array("4","This is Data4")
);
?>
<table border=1>
    <?php foreach($table as $row){ ?>
    <tr>
        <?php foreach($row as $cel){ ?>
            <td><?= $cel?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</body>
</html>
<html>
<head>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
</table>
<table border="single">
    <tr>
        <th>Number</th>
        <th>Description</th>
    </tr>
    <?php
        for ($rows = 1 ; $rows <= 4; $rows++){
            echo "<tr>";
            echo "<td>$rows</td>";
            echo "<td>This is Data $rows</td>";
            echo "<tr>";
        }
    ?>
</table>
<?php
for($row = 1; $row <= 5; $row++){
    for($kome = 1; $kome <= $row; $kome++){
          echo "*";
    }
    echo "<br>";
}
function helloMsg() {
    echo "Hello world!";
}

helloMsg();
echo "<br>";
function famname($firstname, $year) {
    echo "$firstname Iwasaki. Born in $year.<br>";
}

famname("Kenichi","1998");
famname("Toshinori","1961");
famname("Yoshiko","1964");

function sum($x,$y){
    $z = $x + $y;
    return $z;
}
echo "5 + 10= " , sum(5, 10) . "<br>";
echo "7 + 13= " , sum(7, 13) . "<br>";
echo "2 + 4= " , sum(2, 4);
echo "<br>";
$x5 = 10;
function myCheck() {
    global $x5;
    echo "Variable x inside function is: $x5.<br>";
}
myCheck();

echo "Variable x outside function is: $x5";
?>
<?php
$cars = array("Toyota", "Nissan", "Honda");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo count($cars);
echo "<br>";

$arrlength = count($cars);

for($X=0; $X < $arrlength; $X++){
    echo $cars[$X];
    echo "<br>";
}

$_number = array("10", "17", "22", "2", "7", "1", "11");
    sort($_number);
    rsort($_number);
?>

</body>    
</html>