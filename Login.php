
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
// echo"run";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
    $uname=$_POST['text'];
    $password=$_POST['password'];
    
    $sql="select * from user where username='".$uname."'AND Password='".$password."' limit 1";
    
	$result = mysqli_query($conn,$sql);
    
    if($result->num_rows==1){
		echo '<script>alert("Successfully uploaded")</script>';
        exit();
    }
    else{
		echo '<script>alert("failed")</script>';
        exit();
    }
        
?>
