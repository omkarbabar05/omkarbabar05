<?php

   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);
   
   if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
   }
   //echo "success connecting to the db";


   $Name = $_POST['Name'];
   $Address = $_POST['Address'];
   $Category = $_POST['Category'];
   $Product = $_POST['Product'];


   $sql = "INSERT INTO `ecominfo`.`basicinfo`(`Name`, `Address`, `Category`, `Product`) VALUES ('$Name', '$Address', '$Category', '$Product')";

   echo $sql;  

   if($con->query($sql) == true)
   {
     echo "Successfully Created";
   }
   else
   {
     echo "ERROR: $sql <br> $con->error";
   }

   $con->close();

?>

