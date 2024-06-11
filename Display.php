

<?php 
 $conn = mysqli_connect("localhost","root","","TBM");
 if(!$conn){
    die("connection failure");
 } 
$query= "select * from Users";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello<h1>
        <table>
            <tr>

            <td>USER-ID</td>
            <td>Email</td>
            <td>Password</td>
            <td>Role_ID</td>
</tr>
<tr>
    <?php

    while($row=mysqli_fetch_array($result)){
        ?>
<td> <?php echo $row['User_ID']; ?> </td>
<td> <?php echo $row['Email']; ?> </td>
<td> <?php echo $row['Password']; ?> </td>
<td> <?php echo $row['Role_ID']; ?> </td>


</tr>
<?php
    }
    ?>
</table>
</body>
</html>