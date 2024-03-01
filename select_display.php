<?php
$servername="localhost";
$username="root";
$password = "";
$db="crud";
$conn = mysqli_connect($servername,$username,$password,$db);
if($conn){
    echo("db connected successfully");
}
else{
    die("problem in connecting db".mysqli_error());
    
}
$sql = "SELECT * FROM signup";
$result=mysqli_query($conn,$sql);
$num= mysqli_num_rows($result);
echo $num;
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "hello ".$row['name'] ;
    }
}
?>