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
  	  echo "Your food is $food !";
}
?>
</body>
</html>