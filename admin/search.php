<?php
 include_once("dbconnection.php");
 if(isset($_POST['ordernumber']))
                        {
		$id = $_POST['ordernumber'];
		
		$qu = sqlsrv_query("SELECT ordernumber FROM corders WHERE condition1 LIKE '%{$id}%' OR condition2 LIKE '%{$id}%' 
		OR condition3 LIKE '%{$id}%' OR condition4 LIKE '%{$id}%' ");
		 //selects the row that contains ANYTHING like the submitted string
		while ($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) )
				   {
				echo "<tr><td>";  
				echo $row['condition1'];
				echo "</td>";
				echo "<td>";
				echo $row['condition2'];
				echo "</td>";
				echo "<td>";
				echo $row['condition3'];
				echo "</td><td>";
				echo $row['condition4'];
                echo "</tr></td>";
                }
             }
?>
