<?php  
$conn = mysqli_connect("localhost","root",12345678,"mock_test_db");  
    if (! $conn) {  
die("Connection failed" . mysqli_connect_error());  
}  
    else {  
mysqli_select_db($conn, 'pagination');  
}  
?>