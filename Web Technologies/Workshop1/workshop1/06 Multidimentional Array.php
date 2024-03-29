<?php
//Multidimentional array
    
	$result = array( 
        "Aarron" => array (
			"Physics" => '74%',
			"English" => '69%',	
			"Maths" => '70%'
        ),
            
        "Jamie" => array (
			"Physics" => '64%',
			"English" => '79%',	
			"Maths" => '69%'
        ),
            
        "Harry" => array (
			"Physics" => '55%',
			"English" => '52%',	
			"Maths" => '57%'
        )
	);

echo "<h3>Student Results<br></h3>";
         /* Accessing multi-dimensional array values */
		echo "Result for Physics for Aarron : " ;
        echo $result['Aarron']['Physics'] . " <br>
"; 
         
        echo "Results for English for Jamie: ";
        echo $result['Jamie']['English'] . " <br>
"; 
         
        echo "Result for Maths for Harry : " ;
        echo $result['Harry']['Maths'] . "
"; 
?>