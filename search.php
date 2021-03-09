<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root",12345678,"mock_test_db");
if(count($_POST)>0) {
$Email=$_POST[Email];
$result = mysqli_query($conn,"SELECT * FROM mock_test_tbl where Email='$Email' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
th, td {
    border: 1px solid black;
    
}
table.center{
margin-left:auto;
margin-right:auto;
}
</style>
</head>
<body style="text-align:center;">
<table class="center">
<tr>

<th width="10%">ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Gender</th>


</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["Id"]; ?></td>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Phone"]; ?></td>
<td><?php echo $row["Gender"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>

