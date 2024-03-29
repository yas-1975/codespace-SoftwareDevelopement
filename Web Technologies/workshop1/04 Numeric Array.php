<?php
//Numeric Array
# Create and initialise an array variable.
echo"<h3>Days of Week</h3>";
$day = array( 'Monday' , 'Tuesday' , 'Wednesday' , 'Thursday', 'Friday', 'Saturday', 'Sunday' ) ;

# Display the value in all elements as a bulleted list.
foreach( $day as $value ) { 
echo " <li> $value </li>\n";} 
?>