<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title> Upload an image </title>
</head>
<body BGcolor="#232389">

    <form action="SimpleActions\ImageUpload.php" method="post" enctype="multipart/form-data">
        <table border=0 width=100%>
            <tr>
                <td style="background-color:#232367"><a href="index.php"><p align="center"><font size="6" color="white"> Back </font></p></a></td>
                <td colspan="20" style="background-color:#232367"></td>
            </tr>
            <tr>
                <td><font size="4" color="white">Select image:</font></td><td><input type="file" name="UploadedFile" id="UploadedFile"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center"><input type="submit"></td>
            </tr>
        </table>
    </form>

</body>    
</html>