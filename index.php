<?php

// For ouotput using:

// 1.echo
// 2.var_dump()
// 3.print
// 4.printf() using for function


$str = "Hello world.";
$year = 2023;
$bol = true;
$name = "Fatema";
$birth = 1999;

echo "$str <br>";
echo strtoupper($str);


var_dump("$str");
var_dump($year);
var_dump($bol);

print ($str);
print ($year);
printf("<br> My name is %s. My birth year is %d.<br><br>", strtoupper($name), $birth);

// operating system:

// 1.Arithmatic operator.
// Example:+,-,*,/,%-Moduls,**-Exponention
echo "Arithmatic Operator:";
$a = 10;
$b = 30;
$c = 2;
echo "<br>Let,<br>a = 10,b = 30,c = 2<br>";
echo "1.Addition a+b = ", $a + $b;
echo "<br> 2.Subtraction a-c = ", $a - $c;
echo "<br> 3.Multiplication a*c = ", $a * $c;
echo "<br> 4.Division a/c = ", $a / $c;
echo "<br> 5.Modulus a-b = ", $a % $b;
echo "<br> 6.Exponentiation a**c = ", $a ** $c;

// 2.Assignment operator.
// Example:=,+=,-=,*=,/=,%=
echo "<br><br>Assignment Operator:";
$a = 10;
$b = 30;
$c = 2;
echo "<br>Let,<br>a = 10,b = 30,c = 2<br>";
echo "1.a = b = ", $a = $b;
echo "<br> 2. a += c = ", $a += $c;
echo "<br> 3. a -= c = ", $a -= $c;
echo "<br> 4.a *= c = ", $a * $c;
echo "<br> 5. a /= b = ", $a /= $b;
//  [56,57 line b er manta kivabe aslo]
echo "<br> 6. a %= b = ", $a %= $b;

// 3.Comparison operator.
// Example:
echo "<br><br>Comparison operator:";
$a = 10;
$b = 10;
$c = 2;
echo "<br>Let,<br>a = 10,b = 10,c = 2<br>";
echo "1. a == b = ", var_dump($a == $b);
echo "<br> 2. a ===  c = ", var_dump($a === $c) ;
echo "<br> 3. a != c = ", var_dump($a != $c);
echo "<br> 4. a > b = ", var_dump($a > $b);
echo "<br> 5  a >= b = ", var_dump($a >= $b);
echo "<br> 6. a <= c = ", var_dump($a <= $c);
// 4.Increment/Decrement operator.
// Example:
echo "<br><br>Increment/Decrement operator:";
$a = 10;
$b = 10;
$c = 2;
echo "<br>Let,<br>a = 10,b = 10,c = 2<br>";
echo  "1.Post increment, a++ = ", $a++ ,"<br>",$a;
echo  "<br>2.Pre increment, a++ = ", ++$a ,"<br>";
echo  "1.Post decrement, a-- = ", $a-- ,"<br>",$a;
echo  "<br>2.Pre decrement, a-- = ", --$a ,"<br>";
// 5.Logical operator.
// Example:
echo "<br><br>Logical operator operator:<br>";
$a = 10;
$b = 10;
$c = 2;
echo  "1.And, a == 10 && b ==10 Ans: ", var_dump($a == 10 && $b ==10),"<br>";
echo  "2.And, a == 10 Or c !=10 Ans: ",var_dump($a == 10 || $c !=10 ) ,"<br>";
echo  "1.And, a == 10 && b !=10 Ans: ",var_dump($a == 10 && $b !=10 ) ,"<br>";
// 6.String operator.
// Example:
// 7.Array operator.
// Example:
// 8.Conditional Assignment operator.
// Example:

// Function
// user,math,eng,bangl,finance

function getresult ( $math, $eng, $bang,$finance,$user) {

    $result = ( $math + $eng + $bang + $finance) /4 ;
    echo "Congratulations, $user you have got $result <br>";
}

getresult (80,80,70,85,'Fatema');

// conditions
// numbering condition
$num = 1;

if ( $num > 0 ) {
    echo "Positive";
}
else if ( $num < 0) {
    echo " Negetive";
}
else {
    echo " Nutral ";
}


// marking condition
$marks = 70;

if ($marks >= 80 && $marks <= 100) {
    echo " <br>You have got A+";
} else if ( $marks >= 70 && $marks <= 79) {
    echo "<br>You have got A";
}
else if ( $marks >= 60 && $marks <= 69) {
    echo "<br>You have got A- ";
}
else if ( $marks >= 50 && $marks <= 59) {
    echo "<br>You have got B ";
}
else if ( $marks >= 33 && $marks <= 49) {
    echo "<br>You have got C ";
}
else if ( $marks >= 0 && $marks <= 33) {
    echo "<br>You have got F ";
} else {
    echo "Invalid";
}

?>