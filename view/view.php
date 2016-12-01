<?php
 class dataOutputClass
{
    
    function dataOutputFnc($dataOut) {

		echo "<table>";
		echo "<th><strong>Name</strong></th>";
		echo "<th><strong>Comment</strong></th>";    

		while ($dataOut) {
		    
			$tableData = $dataOut;
			
			if ($dataOut <> "NULL") {
			echo "<tr><td>$tableData[0]</td><td>$tableData[1]</td></tr>";
		    }
			
			else { echo "NO DATA FOUND!!!!!";
			}
		
		}
		
	    echo "</table>";
	}	
	

}

?>