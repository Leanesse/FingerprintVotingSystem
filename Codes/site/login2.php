<?php
$page="Fingerprint";
include("inc/head.php");
?>

<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fvs";

if(!($con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))){
    echo '<script>alert("Failed to connect")</script>';
    include("login.php");
}
$name =$_POST["name"];
$id = $_POST["id"];
$vote = $_POST["vote"];

$change_vote_query = "UPDATE `users` SET `vote` = '$vote' WHERE `users`.`id` = $id";
mysqli_query($con,$change_vote_query);


$query = "select * from users where id=$id";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);

if($id == $data["id"] && $vote < 7 && $vote > 0){
    header("location:fingerprint.php");
}else{
    
    echo '<script>alert("Your information does not match.")</script>';
    include("login.php");
    
}









?>



