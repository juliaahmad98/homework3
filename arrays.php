<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="arrays.css">
	<title></title>
</head>
<body>

<b><h1><font face="Helvetica, sans-serif">Challenge: Book Lists</h1></font></b>
<font face="Helvetica,sans-serif">
<?php 

$bookdata = array(

'p' => array (
'Title' => "PHP and MySQL Web Development</br>",
'Author' => "Luke Welling</br>",
'Number Of Pages' => "144</br>",
'Type' => "Paperback</br>",
'Price' => "$31.63</br>",
), 

'p2' => array (
'Title' => "Web Design with HTML, CSS, JavaScript and jQuery</br>",
'Author' => "Jon Duckett</br>",
'Number Of Pages' => "135</br>",
'Type' => "Paperback</br>",
'Price' => "$41.23</br>",
),

'p3' => array (
'Title' => "PHP Cookbook: Solutions & Examples for PHP Programmers</br>",
'Author' => "David Sklar</br>",
'Number Of Pages' => "14</br>",
'Type' => "Paperback</br>",
'Price' => "$40.88</br>",
),


'p4' => array (
'Title' => "JavaScript and JQuery: Interactive Front-End Web Dev</br>",
'Author' => "Jon Duckett</br>",
'Number Of Pages' => "251</br>",
'Type' => "Paperback</br>",
'Price' => "$22.09</br>",
),

'p5' => array (
'Title' => "Modern PHP: New Features and Good Practices</br>",
'Author' => "Josh Lockhart</br>",
'Number Of Pages' => "7</br>",
'Type' => "Paperback</br>",
'Price' => "$28.49</br>",
),

'p6' => array (
'Title' => "Programming PHP</br>",
'Author' => "Kevin Tatro</br>",
'Number Of Pages' => "26</br>",
'Type' => "Paperback</br>",
'Price' => "$28.96</br>",
));

?>

<table>
	<tr>
	<th>Title</th>	
	<th>Author</th>
	<th>Number Of Pages</th>
	<th>Type</th>
	<th>Price</th>
</tr>

<?php

foreach($bookdata as $item => $description){

?>
<tr>
	<td><?=$bookdata[$item]["Title"]?></td>
	<td><?=$bookdata[$item]["Author"]?></td>
	<td><?=$bookdata[$item]["Number Of Pages"]?></td>
	<td><?=$bookdata[$item]["Type"]?></td>
	<td><?=$bookdata[$item]["Price"]?></td>

</tr>

<style>
table th, td{
	padding: 10px;
    table-layout:fixed;
    border: 2px solid blue;
    border-collapse: collapse;
    align:center;
}

</style>

<?php

}

?>
</table>

<?php
$total_price = array("a" => 31.63, "b" => 41.23, "c"=> 40.88, "d" =>22.09, "e" => 28.49, "f" => 28.96);
$sum = 0;

foreach ($total_price as $key => $value) {
$sum +=$value;
}

echo "<h2></br>Your Total Price is $$sum</h2>";
?>

<h1></br>Coin Toss - Part C</h2>
<?php


echo "</br>Beginning the coin flipping...</br>";


$head = 0;
$flipcount = 0;
$headsimg = '<img src="coinheads.png"/>';
$tailsimg = '<img src="cointails.png"/>';
while ($head < 3){
	$flip = rand(0,1);
	$flipcount ++;
	if ($flip) {
		$head ++;
		echo "$headsimg";

		

	} else {

$head = 0;
echo "$tailsimg"; 
}
	
	
}
echo "</br>";
echo "</br>Flipped three heads in a row, in {$flipcount} flips</br>";



?>






</body>
</html>