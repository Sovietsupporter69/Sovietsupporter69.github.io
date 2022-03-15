<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title> Fill in the form! </title>
</head>
<body BGcolor="#232389">
    <form action="SimpleActions\AddUser.php" method="post">
        <table border=0 width=100%>
            <tr>
                <td style="background-color:#232367"><a href="index.php"><p align="center"><font size="6" color="white"> Back </font></p></a></td>
                <td colspan="20" style="background-color:#232367"></td>
            </tr>
            <tr>
                <td><font size="4" color="white">Username:</font></td><td><input type="Username" name="Uname"></td>
            </tr>
            <tr>
                <td><font size="4" color="white">Account email:</font></td><td><input type="email" name="Email"></td>
            </tr>
            <tr>
                <td><font size="4" color="white">Password:</font></td><td><input type="Password" name="Pswd"></td>
            </tr>
            <tr>
                <td><font size="4" color="white">Confirm password:</font></td><td><input type="Password" name="CfmPswd"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center"><input type="submit" value="Submit"><input type="Reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>    
</html>