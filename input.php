<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'reviews');
$name = $_POST["name"];
$email = $_POST["email"];
$club_name = $_POST["club_name"];
$review = $_POST["review"];

$query = "insert into information (fullName, email,clubName,review)
values ('$name', '$email', '$club_name', '$review')";

echo "$query";

mysqli_query($con,$query );

header('location:index.html');


?>