<?php
$city = $_GET['city'];

?>

<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php echo $city; ?> Medical Stores</title>
<style>
	body{
		color: cyan;
		text-align: center;
}
#corner{
	background-color: red;
}
a{
	background-color: rgb(214, 214, 247);
	text-decoration: none;
	border: 3px solid red;
}
#list{
	margin: auto;
}
p{
	color: black;
}
</style>
</head>
<body background="../back.jpg" style="background-repeat: no-repeat;background-size: 100% 100%;">
	<table id="corner" border="4px">
		<thead>
		<th><a href="../html/index.html">HOME</a></th>
		<th><a href="../html/volnteer.html">JOIN US A VOLUNTEER</a></th>
		
		<td><a href="../html/FAQ.html">FAQ</a></td>
	</thead>
	<tr>
		<th><a href="">RESEARCHES</a></th>
		<th><a href="../html/covid-19&symptoms.html">SYMPTOMS OF COVID-19</a></th>
		<th><a href="">RESOURCES</a></th>
	
</table>
<img src="../site logo.png" alt="image loading" width="350px" height="180px">
<h2>Welcome To Covid Help</h2>
<h1><?php echo $city; ?> Medical Stores</h1>
<div>
	<table border ="3p" id="list">
	<thead>
<th>CONTACT</th>
<th>NAME</th>
<th>AVAILABILITY</th>
<td>LAST VERIFIED</td>
</thead>

<?php 
include 'Link.php';

$query = "SELECT * FROM medical WHERE city = '";
$query .= $city."'";


if($result = mysqli_query($link, $query)){
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row['contact']."</td>";
				echo "<td>".$row['hname']."</td>";
				echo "<td>".$row['bed']."</td>";
				echo "<td>".$row['updtime']."</td>";
			echo "</tr>";
		}
	}
} else {
	echo "Error ".mysqli_error($link);
}

mysqli_close($link);
?>

</table>
</div>
<h4>Important Link</h4>
<ul>

<li><a href="https://www.cowin.gov.in/"> Vaccination Registration</a></li>
<p></p>
<li><a href="https://www.who.int/"> WHO Official Website</a></li>
<p></p>
<li><a href="https://www.mohfw.gov.in/"> Health Ministry Of India</a></li>
<p></p>
<li><a href="mailto:gby2304@gmail.com"> Contact Us</a></li>
<p></p>
<li><a href=""> About Us</a></li>
<p></p>
</ul>
</ul>
<p><span>DISCLAMER</span>:This site is hosted and governed by team tech-worrior and data displaced on this taken by various sites of helping authorities</p>


</body>
</html>