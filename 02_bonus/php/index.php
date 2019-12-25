<h3>Hello Corrector !</h3>
<h4>Attempting MySQL connection from php...</h4>
<?php
if(!empty($_ENV['MYSQL_HOST']))
	   $host = $_ENV['MYSQL_HOST'];
if(!empty($_ENV['MYSQL_USER']))
	   $user = $_ENV['MYSQL_USER'];
if(!empty($_ENV['MYSQL_PASSWORD']))
	   $pass = $_ENV['MYSQL_PASSWORD'];
if(!empty($_ENV['MYSQL_DATABASE']))
	   $db_name = $_ENV['MYSQL_DATABASE'];
echo "Connecting to Database: $host $user $pass $db_name";
echo "<br><br>";

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";
echo "<br><br>";

$res = $conn->query("SELECT * FROM docker_test;");
for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
	    $res->data_seek($row_no);
		    $row = $res->fetch_assoc();
		    echo " UserName = " . $row['username'] . " id_user= " . $row['id'];
			    echo "<br>";
}
$res->close();
$conn->close();
?>
