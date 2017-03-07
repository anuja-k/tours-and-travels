
<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bus';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT DISTINCT BusStation FROM route WHERE BusStation LIKE '%".$searchTerm."%' ORDER BY BusStation ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['BusStation'];
    }
    
    //return json data
    echo json_encode($data);
?>