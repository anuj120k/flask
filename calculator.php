
<input type="text" id="n1" placeholder="Enter first number"><br>
<input type="text" id="n2" placeholder="Enter second number"><br><br>
<input type="button" value="Sum" id="sum" onclick="add()">
<input type="button" value="Substract" id="sub" onclick="sub()">
<input type="button" value="Multiply" id="mul" onclick="mul()">
<input type="button" value="Divide" id="div" onclick="div()">
<input type="button" value="Modulas" id="mod" onclick="mod()">
<input type="button" value="Fcatorial" id="fact" onclick="fact()">
<br>




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
<h3>Finally calculated developed</h3>
