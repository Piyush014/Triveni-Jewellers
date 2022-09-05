<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";
    
    // Create connection
    $conn = new mysqli($server, $username, $password,$dbname);

    if(isset($_POST['submit'])){
    // Check connection
   if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) ){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $subject=$_POST['password'];

    $query ="INSERT INTO `values`(`Username`, `E-mail`, `Password`) VALUES ('  $name','$email',' $subject')";

    $run =mysqli_query($conn,$query);

    if($run){
      echo"Form submited successfully";
    }
    else{
      echo"Form not submitted";

    }
   }
   else{
    echo"all fields required";
   }  

}
?>
