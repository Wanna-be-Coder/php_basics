<?php
echo "hello world";

 $x=1;
 $y=2;
echo "</br><hr>";
//Addition
echo $x+$y;
echo "add";
?>
<!DOCTYPE hmtl>
<head>
		<title>Practice</title>
</head>
<body>
</br><hr>
<?php
//Multiplication
echo $x*$y;
echo "multiply";
?>	
</br><hr>
<?php
//Subtraction
echo $y-$x;
echo "sub";
?>	
</br><hr>
<?php
//Division
echo $x/$y;
echo "div";
?>

</br><hr>
<?php
//For Loop
for($i=1;$i<=100;$i++)
{
	echo $i;
	
}
echo "For loop";
?>
</br><hr>
<?php
//While Loop
while($x<$y)
{
 echo	$x++;
}
echo "While loop";
?>
</br><hr>
<?php
//Do while
do{
	echo "THIS IS DO WHILE LOOP";
}while($x>$y);
echo "Do While loop";
?>
</br><hr>
<?php
//If else
if($x>$y)
{
	
echo "x is greater than y";	
}
else
{
	echo "x is not greater than y";
	
}
?>
</br><hr>
<?php
//Array
$name=array("Linkin Park","Slipnot","Green Day","Pink F");

foreach($name as $n)
{
	echo $n;
	echo "</br>";
}
?>
</br><hr>
<?php
//Function
function yolo()
{
	echo "THIS IS A FUNCTION";
}

yolo();//calling function
?>
</br><hr>
<?php
//Switch
$num=rand(0,10);

switch($num)
{
	
	case 1: echo $num;break;
	case 2: echo $num;break;
	case 3: echo $num;break;
	case 4: echo $num;break;
	case 5: echo $num;break;
	case 6: echo $num;break;
	case 7: echo $num;break;
	case 8: echo $num;break;
	case 9: echo $num;break;
	case 10: echo $num;break;
	default : echo $num;break;
}
?>

	
</body>







