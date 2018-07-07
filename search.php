<?php
 if(isset($_POST['studentid']))
                        {
 $id = $_POST['studentid'];
 $qu = mysql_query("SELECT studentid FROM student WHERE condition1 LIKE '%{$id}%' OR condition2 LIKE '%{$id}%' 
 OR condition3 LIKE '%{$id}%' OR condition4 LIKE '%{$id}%' ");
 //selects the row that contains ANYTHING like the submitted string
 while($row = mysql_fetch_array($qu))
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
  echo "</tr></td>";
  }
}
?>
