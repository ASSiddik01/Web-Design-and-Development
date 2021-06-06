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


/*Assignment Concreatnation Operator 
	1. Concreatnation use for add two variable value
	2. For the use Concreatnation  is need to dot sign before the assignment operator .=
*/


	$name = 'Abu';
	$name .= ' Shama';


	echo $name.'<br>';


/*Comparison Operator*/

	var_dump(10 > 5);
	echo '<br>';
	var_dump(10 < 5);
	echo '<br>';
	var_dump(10 >= 5);
	echo '<br>';
	var_dump(10 >= 10);
	echo '<br>';
	var_dump(10 <= 10);
	echo '<br>';
	var_dump(10 <= 9);
	echo '<br>';
	var_dump(10 == 9);
	echo '<br>';
	var_dump(10 == 10);
	echo '<br>';
	var_dump(10 != 10);
	echo '<br>';
	var_dump(10 === 10);
	echo '<br>';
	var_dump('10' === 10);
	echo '<br>';
	var_dump('10' === '10');
	echo '<br>';
	var_dump('10' == 10);
	echo '<br>';
	var_dump('10' !== 10);
	echo '<br>';
	var_dump('10' !== '10');
	echo '<br>'.'<br>';




/*If & Else Condition
    // Logical Operator
	1. OR work in this sign  || 
	2. AND work in this sign  &&
*/

	$day =  'Monday';


	if ($day ===  'Friday' || $day ===  'Saturday' ) {
		echo 'Today is holliday';
	} elseif($day === 'Wednesday'){
		echo 'Today is half working day';
	} elseif($day === 'Sunday'){
		echo 'Today is week start day';
	} else {
		echo 'Today is full working day'.'<br>'.'<br>';   
	}



/*Array declearation
	1. Array use for multi value store in one variable
	2. Array declearation in two method first is $array = []; second one is $array = array();
	3. $array = array(); this method use before the php 5.6/5.4 version
	4. Use comma , between two value
*/

	$name = ['Abu','Shama',];

	echo $name[1].'<br>'.'<br>';

/*Associative Array*/

	$name = [
		'first_name' => 'Abu ',
		'last_name' => 'Shama ',
		'age' => '24 ',
		'hight' => '5.9"',
	];


	echo $name['age'].'<br>'.'<br>';















?>