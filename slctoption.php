
<select id="sid" name="sid">
        
            <?php
            
            $cdquery="SELECT studentid FROM student";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());
            
            while ($row=mysql_fetch_array($cdresult)) {
            $sid=$row["studentid"];
                echo "<option>
                    $sid
                </option>";
            
            }
                
            ?>
    
        </select>
        
