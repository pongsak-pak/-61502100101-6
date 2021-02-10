<html lang='en-us'>

<head>
    <meta http-equiv="Content-type" connect="html/html; charset=utf-8" />
</head>
<body>
<?php
$servername = "localhost";
$username = "movie";
$password = "552120";
$dbname = "movie_test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<table border = "5">
<tr>
    <td>id_movie</td>
    <td>name_movie</td>
    <td>time_movie</td>
    <td>name_user</td>
    <td>pass_pin</td>
</tr>



    </table>

</body>

</html>