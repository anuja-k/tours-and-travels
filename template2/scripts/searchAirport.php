
<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'flights';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT DISTINCT Airport FROM route WHERE Airport LIKE '%".$searchTerm."%' ORDER BY Airport ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['Airport'];
    }
    
    //return json data
    echo json_encode($data);
?>