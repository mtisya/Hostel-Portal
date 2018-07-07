<?php
class orderClass {
    function connect($database = 'kaluworks') {
        $mssql_server = 'HP-PC';
        $mssql_data = array("UID" => 'sa',
                        "PWD" => 'mutisya',
                        "Database" => $database);
        if(! ISSET ($dbconnect)){
            $dbconnect = sqlsrv_connect($mssql_server, $mssql_data);
        }
        if(! $dbconnect){
            return 'Failed to connect to host';
        }
    }

    function getData ($query) {
        $result = sqlsrv_query($db->connect, $query);
        while ($row =  sqlsrv_fetch_array($result)) {

                    $this->data_array[] = $row;                                                    
        }
        $m = $this->data_array;                     
        return $m;
    } 
    function query($query) {           
        $result = sqlsrv_query($query) or die("Query didn't work.");
    }
}
?>