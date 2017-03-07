
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
    $query = $db->query("SELECT DISTINCT Destination FROM route WHERE Destination LIKE '%".$searchTerm."%' ORDER BY Destination ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['Destination'];
    }
    
    //return json data
    echo json_encode($data);
?>