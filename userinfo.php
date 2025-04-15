<?php

$con = mysqli_connect('localhost', 'root');
if ($con) { 
    echo "Connection Successful<br>";
} else {
    echo "Connection Failed";
}

mysqli_select_db($con, 'contactusinfo');

$user = $_POST['uame'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "INSERT INTO contactinfodata (Name, Email, Mobile, Comments) 
          VALUES ('$Name','$Email','$Mobile','$Comments')";

mysqli_query($con, $query);

echo "Query executed: $query";

?>
