<?php


$newFile = fopen("DataEntry.html","w+") or die("Unable to open file!");
$txt = '

<!DOCTYPE HTML>

<html>

<head>

	<title>Data Entry</title>
	
	<style>
	.textlabel {
		display:block;
		float:left;
		clear:left;
		width:70px;
	}
	.textbox {
		display:block;
		float:left;
	}
	.text {
		height:30px;
	}
	.col {
		display:block;
		float:left;
		width:20px;
	}
	</style>

</head>


<body>

<form name = "files" method = "POST" action = "Admin.php">


	<fieldset>
		<legend>Select City</legend>
	
		<input type = "radio" name = "city" value = "Agra" id = "Agra" class = "radiobutton" />
			<label for = "Agra" class = "radio label">Agra</label><br />
		<input type = "radio" name = "city" value = "Prayagraj" id = "Prayagraj" class = "radiobutton" />
			<label for = "Prayagraj" class = "radio label">Prayagraj</label><br />
		<input type = "radio" name = "city" value = "Varanasi" id = "Varanasi" class = "radiobutton" />
			<label for = "Varanasi" class = "radio label">Varanasi</label><br />
		<input type = "radio" name = "city" value = "Lucknow" id = "Lucknow" class = "radiobutton" />
			<label for = "Lucknow" class = "radio label">Lucknow</label><br />
		<input type = "radio" name = "city" value = "Patna" id = "Patna" class = "radiobutton" />
			<label for = "Patna" class = "radio label">Patna</label><br />
		<input type = "radio" name = "city" value = "Kanpur" id = "Kanpur" class = "radiobutton" />
			<label for = "Kanpur" class = "radio label">Kanpur</label><br />
		<input type = "radio" name = "city" value = "Delhi" id = "Delhi" class = "radiobutton" />
			<label for = "Delhi" class = "radio label">Delhi</label><br />
		<input type = "radio" name = "city" value = "Ayodhya" id = "Ayodhya" class = "radiobutton" />
			<label for = "Ayodhya" class = "radio label">Ayodhya</label><br />
		<input type = "radio" name = "city" value = "Mathura" id = "Mathura" class = "radiobutton" />
			<label for = "Mathura" class = "radio label">Mathura</label><br />
		<input type = "radio" name = "city" value = "Chennai" id = "Chennai" class = "radiobutton" />
			<label for = "Chennai" class = "radio label">Chennai</label><br />
		<input type = "radio" name = "city" value = "Mumbai" id = "Mumbai" class = "radiobutton" />
			<label for = "Mumbai" class = "radio label">Mumbai</label><br />
		<input type = "radio" name = "city" value = "Ahmedabad" id = "Ahmedabad" class = "radiobutton" />
			<label for = "Ahmedabad" class = "radio label">Ahmedabad</label><br />
		
	
	</fieldset>

	<fieldset>
		<legend>Entry Type</legend>
	
		<input type = "radio" name = "datatype" value = "hospital" id = "Hospital" class = "radiobutton" />
			<label for = "Hospital" class = "radio label">Covid Hospital Detail</label><br />
		<input type = "radio" name = "datatype" value = "plasma" id = "Plasma" class = "radiobutton" />
			<label for = "Plasma" class = "radio label">Plasma Donor Details</label><br />
		<input type = "radio" name = "datatype" value = "oxygen" id = "Oxygen" class = "radiobutton" />
			<label for = "Oxygen" class = "radio label">Oxygen Refilling Center Details</label><br />
		<input type = "radio" name = "datatype" value = "ambulance" id = "Ambulance" class = "radiobutton" />
			<label for = "Ambulance" class = "radio label">Ambulance Servise Details</label><br />
		<input type = "radio" name = "datatype" value = "test" id = "Test" class = "radiobutton" />
			<label for = "Test" class = "radio label">Covid Test Center Details</label><br />
		<input type = "radio" name = "datatype" value = "medical" id = "Medical" class = "radiobutton" />
			<label for = "Medical" class = "radio label">Medical Store Details</label><br />
	
	</fieldset>



<fieldset>
<legend>Upload Data</legend>
';

fwrite($newFile,$txt);

for ($i = 1; $i <= 100; $i++) {
		$input[$i] = '
		<div class = "text"><label><span class = "textlabel">Name '.$i.'</span><span class = "col"> : </span>
			<input type = "text" class = "textbox" name = "Name'.$i.'" size = "50" />
			</label>
		</div>
		<div class = "text"><label><span class = "textlabel">Contact '.$i.'</span><span class = "col"> : </span>
			<input type = "text" class = "textbox" name = "Cont'.$i.'" size = "50" />
			</label>
		</div>
		<div class = "text"><label><span class = "textlabel">Property '.$i.'</span><span class = "col"> : </span>
			<input type = "text" class = "textbox" name = "Prop'.$i.'" size = "50" />
			</label>
		</div>
		';
		fwrite($newFile,$input[$i]);
}


$txt = ' <br />
<input type = "submit" class = "sub" value = "Upload" />
<input type = "reset" />
</fieldset>

</form>

</body>

</html>
';

fwrite($newFile,$txt);

fclose($newFile);

echo "file created";

?>