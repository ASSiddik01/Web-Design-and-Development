<?php 
/*Echo use for show value
  ''/" " use for string value
  for number value not need to ''/""
  echo is familiour
*/
	echo 'Welcome to world';
	echo '<br>';

/*print use for show value and value must be  store in first barcket (....)
  ''/" " use for string value
  for number value not need to ''/""
*/
	print ('Welcome to Bangladesh');
	echo '<br>';
	echo '<br>';

/*Variable declearation
	1. Variable must be start in doller sign $
	2. After doller sign $ first letter not use any numaric key must use a alphabetic key 
	3. After given the variable name declearation use  equal sign =
	4. Equal sign =  is called  assignment operator.
*/

	$welcome_text = 'Welcome to Khulna';

	echo $welcome_text;
	echo '<br>';

	$welcome_text = 'Welcome to Chuadanga';

	echo $welcome_text;
	echo '<br>';

	/*Homework*/

	$name = 'Abu Shama.';
	$address = '121,Bangoss Para,Doulatdiar,Chuadanga.';
	$age = '24';

	echo $name.'<br>',$address.'<br>',$age.'<br>';

	echo $name.'<br>';
	echo $address.'<br>';
	echo $age.'<br>'.'<br>';




/*Conostant declearation
	1. For conostant declearation use define function define('','');
	2. In the define function quatetion sign '' called peramitter.
	3. First peramitter use for name and second peramitter use for value
	4. In the two peramitters use a comma , sign 
	5. Standar conostant name decleartion rule is first letter use a capital letter
*/


	define('PI','3.1416');


	echo PI.'<br>';

	/*Homework*/
	define('Name','Abu Shama');
	define('Adderss','Chuadanga');
	define('Age','24');


	echo Name.'<br>';
	echo Adderss.'<br>';
	echo Age.'<br>'.'<br>';


/*PHP Expression & Mathematical Operation
	1. Mathmatical Operator = +,-,*,/
	2. Modules Operator = %  .It use for vagses
	3. For two the power use dubble star sign **
*/

	$number1 = 100;
	$number2 = 3;

	echo $number1+$number2.'<br>';
	echo $number1-$number2.'<br>';
	echo $number1*$number2.'<br>';
	echo $number1/$number2.'<br>';
	echo $number1%$number2.'<br>';
	echo $number1**$number2.'<br>'.'<br>';







?>