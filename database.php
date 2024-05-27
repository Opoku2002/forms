<?php
//connect to database
$server_name = "localhost";
$user_name = "root";
$password = "";
$DB_name = "cps_4";

  $connect = mysqli_connect ("localhost",  "root", "" , "cps_2");
//check wherether you are conected to Database

if(!$connect){
    #if not connected
    die("Not connected".mysqli_connect_error());

}

//connect to Databse
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    #insert into DB
    $insert_query = "INSERT INTO Login (username,email,password)
    VALUES('$username',' $email',' $password')";
    $result = mysqli_query($connect, $insert_query);
}


//check if data is inserted successfully or not
if($result){
    #if inserted
    echo "Insert successfully";
}else{
      #if not inserted
      echo "Not inserted";
}






