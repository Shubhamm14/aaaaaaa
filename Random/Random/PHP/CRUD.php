<?php

    $server="localhost";
    $username="root";
    $password="";
    $database="student";

    $usern=$_POST['username'];
    $passw=$_POST['password'];

    $conn=new mysqli($server,$username,$password,$database);
    if($conn){
        $sql="insert into `login` (Username,Password)values('$usern','$passw')";
        if($conn->query($sql)){
            echo("Records inserted");
        }
        else{
            echo("Some Error occured");
        }
    }
?>
<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="student";

    $usern=$_POST['username'];
    $passw=$_POST['password'];

    $conn=new mysqli($server,$username,$password,$database);
    if($conn){
        $sql="update `login` set Password='$passw' where Username='$usern'";
        if($conn->query($sql)){
            echo("Records updated");
        }
        else{
            echo("Some Error occured");
        }
    }
?>
<?php

$server="localhost";
$username="root";
$password="";
$database="student";

$usern=$_POST['username'];
$passw=$_POST['password'];

$conn=new mysqli($server,$username,$password,$database);
if($conn){
    $sql="delete from `login` where Username='$usern' and Password='$passw'";
    if($conn->query($sql)){
        echo("Records Deleted");
    }
    else{
        echo("Some Error occured");
    }
}

?>
<?php

$server="localhost";
$username="root";
$password="";
$database="student";

$usern=$_POST['username'];
$passw=$_POST['password'];
$_SESSION['user']=$usern;

$conn=new mysqli($server,$username,$password,$database);
if($conn){
    $sql="select * from `login` where Username='$usern' and Password='$passw'";
    $result=$conn->query($sql);
    $rows=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1){
        echo("Successfully logged in ".$_SESSION['user']);
    }
    else{
        echo("Some Error occured");
    }
}

?>