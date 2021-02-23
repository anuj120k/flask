
<input type="text" id="n1" placeholder="Enter first number"><br>
<input type="text" id="n2" placeholder="Enter second number"><br><br>
<input type="button" value="Sum" id="sum" onclick="add()">
<input type="button" value="Substract" id="sub" onclick="sub()">
<input type="button" value="Multiply" id="mul" onclick="mul()">
<input type="button" value="Divide" id="div" onclick="div()">
<input type="button" value="Modulas" id="mod" onclick="mod()">
<input type="button" value="Fcatorial" id="fact" onclick="fact()">
<br>


<?php
//SELECT name as EmployeeName, SUM(salary) as TotalSalary from employee as e INNER JOIN employeesalary as s on e.id = s.empid GROUP by name

/* An exception is an object that describes an error or unexpected behaviour of a PHP script.

Exceptions are thrown by many PHP functions and classes.

User defined functions and classes can also throw exceptions.

Exceptions are a good way to stop a function when it comes across data that it cannot use. */


/* The throw statement allows a user defined function or method to throw an exception. When an exception is thrown, the code following it will not be executed.

If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message. */

function divide($dividend, $divisor)
{
	if($divisor == 0){
		throw new Exception("Division by 0");
	}
	return $dividend/$divisor;
}

/* To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the 
process. */

try {
	
	echo divide(5,0);
}
catch(Exception $e) {
	echo "Enable to divide";
}


/* The try...catch...finally statement can be used to catch exceptions. Code in the finally block will always run 
regardless of whether an exception was caught. If finally is present, the catch block is optional. */

finally {
  echo "Process complete.";
}
?>



<script>

function add()
{
var val1 = parseInt(document.getElementById('n1').value);
var val2 = parseInt(document.getElementById('n2').value);

var sum = val1 + val2;
	
	alert('Result is ' + sum);
}

function sub()
{
var val1 = parseInt(document.getElementById('n1').value);
var val2 = parseInt(document.getElementById('n2').value);
var sub = val1 - val2;
	
	alert('Result is ' + sub);
}

function mul()
{
var val1 = parseInt(document.getElementById('n1').value);
var val2 = parseInt(document.getElementById('n2').value);
var mul = val1 * val2;
	
	alert('Result is ' + mul);
}

function div()
{
var val1 = parseInt(document.getElementById('n1').value);
var val2 = parseInt(document.getElementById('n2').value);
var div = val1 / val2;
	
	alert('Result is ' + div);
	
}

function mod()
{
var val1 = parseInt(document.getElementById('n1').value);
var val2 = parseInt(document.getElementById('n2').value);
var mod = val1 % val2;
	
	alert('Result is ' + mod);
}


</script>
