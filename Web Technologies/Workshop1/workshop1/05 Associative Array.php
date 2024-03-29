<!DOCTYPE html>  
	<html>  

	<body>  	
	<h3>Average Temperature in Edinburgh</h3>

	<table align = "left" width = "25%"> 
	<tr>  
		<td> Month </td>  
		<td> High </td>  
		<td> Low </td>  
	</tr>  
<?php    
	$summer = "July-Aug";  
	$winter = "Jan-Feb";
	$temperature = array("summerHigh" => 19, "summerLow" => 11, "winterHigh" => 7, "winterLow" => 1);

//look at Superscript 
	echo "<tr>";  
		echo "<td>$summer</td>";  
		echo "<td>" . $temperature['summerHigh'] . "<sup> o</sup>C</td>";  
		echo "<td>" . $temperature['summerLow'] . "<sup> o</sup>C</td>";  
	echo "</tr>";  
	echo "<tr>";  
		echo "<td>$winter</td>";  
		echo "<td>" . $temperature['winterHigh'] . "<sup> o</sup>C</td>";  
		echo "<td>" . $temperature['winterLow']. "<sup> o</sup>C</td>";  
	echo "</tr>";  
	?>    
	</table>  
	</body>  
</html>  