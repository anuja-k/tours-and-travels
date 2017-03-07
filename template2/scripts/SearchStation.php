
<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'trains';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT DISTINCT StationName FROM Station WHERE StationName LIKE '%".$searchTerm."%' ORDER BY StationName ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['StationName'];
    }
    
    //return json data
    echo json_encode($data);
?>