<?php
$q = ($_GET['q']);
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "marvinvi_freenuvanaionos";
$date = date('Y-m-d h:i:s', time());
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* $sql = "SELECT EXISTS(SELECT * FROM Orders where Code='123-1234567-1234567')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
    } */
    $query = mysqli_query($conn, "SELECT code,CodeDate,Claimed FROM Orders WHERE Code='$q'");
    if (!$query)
    {
        die('Error: ' . mysqli_error($con));
    }
if(mysqli_num_rows($query) > 0){
$data = $query->fetch_array(MYSQLI_BOTH); /* Obtencion de los datos de la query */
/* echo $data[1]; */ /* Arreglo con los datos de la query */
$fechaactual =date('Y-m-d');
$fechastamp=strtotime($fechaactual);
$orderdate=strtotime($data[1]);
$result=$fechastamp-$orderdate;
if ($data[2]==1){
  echo "2";
  }
  else{
    if ($result>=604800) 
    echo "0"; 
else
    echo "3";
  }
}else{
  echo "1";
  }
?> 