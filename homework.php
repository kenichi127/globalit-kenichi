<!DOCTYPE html>
<html lang="en">
<style type="text/css">
.chess {
    width: 640px;
    height: 640px;
    margin: 20px;
    border: 25px solid #333;
}
.b {
    float: left;
    width: 80px;
    height: 80px;
    background-color: #999;
    font-size:50px;
    text-align:center;
    display: table-cell;
    vertical-align:middle;
}
.w {
    float: left;
    width: 80px;
    height: 80px;
    background-color: #fff;
    font-size:50px;
    text-align:center;
    display: table-cell;
    vertical-align:middle;
}
.sequence{
    width: 1200px;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_homework</title>
    
</head>
<body>
<p>1. Chess Board</p>
    <div class="chess">
        <?php
        for ($chess_cont=1; $chess_cont <= 8 ; $chess_cont++) { 
            $chess_remainder = $chess_cont % 2;
            if ($chess_remainder == 1) {
                for ($chess_chil=1; $chess_chil <= 4 ; $chess_chil++) { 
                    echo "<div class='w'></div>";
                    echo "<div class='b'></div>";
                }
            }else{
                for ($chess_chil=1; $chess_chil <= 4 ; $chess_chil++) { 
                    echo "<div class='b'></div>";
                    echo "<div class='w'></div>";
                }
            }
        }
        ?>
    </div>

    <br>
    <br>

<p>2. Calculator</p>
    <?php
    if (isset($_REQUEST['button'])) {
        $x = $_POST["value_1"];
        $y = $_POST["value_2"];
    }
    //関数の定義
    function sum(){
        global $x, $y;
        $z = $x + $y;
        return $z;  
    }
    function minus(){
        global $x, $y;
        $z = $x - $y;
        return $z;  
    }
    function product(){
        global $x, $y;
        $z = $x * $y;
        return $z;  
    }
    function quotient(){
        global $x, $y;
            if ($y == 0) {
                $z = "Zero Divide";
                return $z;
            }else{
            $z = $x / $y;
            return $z;
        }
    }
    ?>

<form action="" method="post">
    <p><input type="number" name="value_1" value="1"></p>
    <select name="Arithmetic" class="selectpicker form-control">
        <option>+</option>
        <option>-</option>
        <option>÷</option>
        <option>×</option>
    </select>
    <p><input type="number" name="value_2" value="1"></p>
    <input type="submit" name="button" value="Calculate">
    <?php
    $Arithmetic = $_POST["Arithmetic"];
    switch ($Arithmetic) {
        case "+":
            $result = sum();
            break;
        case "-":
            $result = minus();
            break;
        case "÷":
            $result = quotient();
            break;
        default:
            $result = product();
            break;
    }
    echo "<p>Result : ".$result.".</p>"
    ?>
</form>

<p>3. Colored Sequence</p>
    <div class="sequence">
        <p>
    <?php
    for ($sq = 1; $sq <= 500 ; $sq++) { 
        if ($sq <= 10) {
            echo "<span style='color:red;'>".$sq." </span>";
        }elseif ($sq > 10 && $sq <= 50) {
            echo "<span style='color:yellow;'>".$sq." </span>";
        }elseif ($sq > 50 && $sq <= 100) {
            echo "<span style='color:green;'>".$sq." </span>";
        }elseif ($sq > 100 && $sq <= 500) {
            echo "<span style='color:blue;'>".$sq." </span>";
        }
    }
    ?>
        </p>
    </div>

<p>4. Triangle</p>
    <?php
    for ($Triangle = 1; $Triangle <= 6; $Triangle++) { 
       for ($Triangle_ast = 6; $Triangle_ast >= 0 ; $Triangle_ast--) { 
           if ($Triangle_ast > $Triangle ) {
                echo "&nbsp;&nbsp;";
           }elseif ($Triangle_ast > 0 && $Triangle_ast <= $Triangle) {
               echo "*";
           }else{
               echo "<br>";
           }
       }
    }
    ?>

<p>5. Square</p>
<?php
    for ($square = 1; $square <= 5; $square++) {
        if ($square == 1 || $square == 5 ) {
            echo "※※※※※";
        }else{
            echo "※　　　※";
        }
        echo "<br>";
    } 
?>

</body> 
</html>