<?php

$addUsername = $_POST["Uname"];
$addPassword = $_POST["Pswd"];

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
    if ($addUsername ){ //add verification to confirm if the input has an @
        $sql = "INSERT INTO Users(Id, Username, Password) VALUES (null, '$addUsername', '$addPassword',)";
    }
    else{
        $sql = "INSERT INTO Users(Id, Username, Password) VALUES (null, '$addUsername', '$addPassword',)";
    }

    if ($conn->query($sql) === TRUE){
        header('Location: http://octestphp.great-site.net/index.php');
    }
    else{
        echo "Error: " . $sqlIn . "<br>" . $conn->error;
    }
}

$conn->close();
?>