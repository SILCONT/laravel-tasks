<?php


$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/home/site/wwwroot/ssl/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'laraveltareas-server.mysql.database.azure.com', 'dlwcxerqai', 'Aeromontre2024', 'aeromontre_db', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}




if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Exitosamente";




$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["password_hash"]. $row["role_id"] . $row["username"] . "<br>";
  }
} else {
  echo "0 results";
}


/////

mysqli_close($conn);

?>

