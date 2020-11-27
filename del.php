<?php
$Id=$_GET['Id'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'labtest01.mysql.database.azure.com', 'kkit@labtest01', 'Kitkit2001', 'labtest01', 3306);
$sql="DELETE FROM Work WHERE Id='$Id'";
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>