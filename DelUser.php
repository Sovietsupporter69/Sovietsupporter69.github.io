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

    $sqlDel = "DELETE FROM Users WHERE Id BETWEEN 9 AND 13";

    if ($conn->query($sqlDel) === TRUE){
        echo "<br>Data Removed";
    }
    else{
        echo "Error: " . $sqlDel . "<br>" . $conn->error;
    }
}

$conn->close();
?>