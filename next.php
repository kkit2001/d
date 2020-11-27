  
<?php
$Id=$_GET['Id'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'labtest01.mysql.database.azure.com', 'kkit@labtest01', 'Kitkit2001', 'itflaab', 3306);
$product=$_POST['Product'];
$price=$_POST['Price'];
$amount=$_POST['Amount'];
$total=$_POST['Total'];
$sql="UPDATE Work SET Product='$product',Price='$price',Amount='amount', Total='tatal'WHERE Id='$Id'";
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
