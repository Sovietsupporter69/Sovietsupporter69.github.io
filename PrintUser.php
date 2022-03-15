<?php

echo "Connecting...";
$serverName = "sql201.epizy.com";
$dataBaseName = "epiz_30958690_TestDatabase";
$username = "epiz_30958690";
$password = "285gCSO1aSjz";

$conn = new mysqli($serverName, $username, $password, $dataBaseName);

if ($conn->connect_error) {
    die("<br>Connection failed: " . $conn->connect_error);
}
else{
    echo "<br>Connected successfully";

    echo "<br>Outputing Data";
    $sqlOut = "SELECT Id, Username, Password, Email FROM Users";
    $result = $conn->query($sqlOut);

    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo "<br>Id: " . $row["Id"]. ", Username: " . $row["Username"]. ", " . $row["Password"];
        }
    }
    else{
        echo "Table is empty";
    }
}

$conn->close();
?>