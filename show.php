<html>
<head>
    <title>ITF Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labtest01.mysql.database.azure.com', 'kkit@labtest01', 'Kitkit2001', 'itflaab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<br>
<div class="container">
    <table class = "table table-dark" width="1200" align="center" border="1">
        <thead class="thead-dark">
    <tr>
        <th width="300"> <div align="center">Id</div></th>
        <th width="300"> <div align="center">product</div></th>
        <th width="300"> <div align="center">price</div></th>
        <th width="300"> <div align="center">amount</div></th>
        <th width="300"> <div align="center">total</div></th>
    </tr>
    </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
        <tbody>
                <tr>
            <td><?php echo $Result['Id'];?></td>
            <td><?php echo $Result['Product'];?></td>
            <td><?php echo $Result['Price'];?></td>
            <td><?php echo $Result['Amount'];?></td>
            <td><?php echo $Result['Total'];?></td>
            <td>
                <a href="edit.php?ID=<?php echo $Result['Id']?>" class="btn btn-outline-light" >EDIT</a>
                <a href="del.php?ID=<?php echo $Result['Id']?>" class="btn btn-outline-warning"onclick="return confirm('Confirm data deletion?')">DELETE</a>
                </tr>
        </tbody>
<?php
}
?>
    </table>
    <button type="button" class="btn btn-dark" onclick ="window.location.href='test.html'">ADD</button> 
<?php
mysqli_close($conn);
?>
    </body>
</html>
