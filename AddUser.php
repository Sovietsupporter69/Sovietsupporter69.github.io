<?php

$addUsername = $_POST["Uname"];
$addPassword = $_POST["Pswd"];
$addEmail = $_POST["Email"];

echo "Connecting...";
$serverName = "sql201.epizy.com";
$dataBaseName = "epiz_30958690_TestDatabase";
$adminUsername = "epiz_30958690";
$adminPassword = "285gCSO1aSjz";

$conn = new mysqli($serverName, $adminUsername, $adminPassword, $dataBaseName);

if ($conn->connect_error) {
    die("<br>Connection failed: " . $conn->connect_error);
}
else{
    echo "<br>Connected successfully";

    echo "<br>Inserting new data";
    $sqlIn = "INSERT INTO Users(Id, Username, Password, Email) VALUES (null, '$addUsername', '$addPassword', '$addEmail')";

    if ($conn->query($sqlIn) === TRUE){
        header('Location: http://octestphp.great-site.net/index.php');
    }
    else{
        echo "Error: " . $sqlIn . "<br>" . $conn->error;
    }
}

$conn->close();
?>