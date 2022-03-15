<?php

$targetPath = "images/";
$imageName = basename($_FILES['UploadedFile']['name']);
$targetPath = $targetPath . basename($_FILES['UploadedFile']['name']);

echo "<br>" . $imageName;
echo "<br>" . $targetPath;

if (move_uploaded_file($_FILES['UploadedFile']['tmp_name'])

?>