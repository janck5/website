<?php

//Database variables
$host = "host";
$user = "user";
$pw = "password";
$db = "database";

//Database Connection
$con=mysqli_connect($host,$user,$pw,$db);
if(mysqli_connect_errno()) {
	echo "Failed to Connect: " . mysqli_connect_error();
}

//Query for password
$result = mysqli_query($con, "SELECT FROM table password WHERE username = '$_POST["username"]'");

//check password
if(mysqli_fetch_array($result)==$_POST["password"]) {
	header('Location: http://NEXTPAGE/');
}
else//Wrong Login/password or null
{
	header('Location: http://BADLOGIN/');
}

<?>


<html>
<body>

</body>
</html>
