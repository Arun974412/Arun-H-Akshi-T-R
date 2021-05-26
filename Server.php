<?php
   $username ="";
   $email ="";
   $error =array();
   //connect to tha database
   $db = mysqli_connect("localhost","root","","registration");
   
   //if the registration button is clicked
   if(isset($POST["register"])){
      $username = mysql_real_escape_string($_POST["username"]);  
      $email = mysql_real_escape_string($_POST["email"]);  
      $password_1= mysql_real_escape_string($_POST["password_1"]); 
      $password_2= mysql_real_escape_string($_POST["password_2"]); 
    
    //ensure that form fields are filled properly
    if(empty($username)){
      array_push($error,"username is reuired");
      
    }
    
      if(empty($email)){
      array_push($error,"Email is reuired");
      
     }  
        if(empty($password_1)){
      array_push($error,"password_1 is reuired");
      }
      
      if ($password_1 != password_2){
        array_push($errors,"The two passwords do not match");
      }
      
      // if there is no error save data to database
      if(count($errors) == 0){
        $password = mds($password_1);//encrpt password before storing in database{security}
        
        $sql = "INSERT INTO user(username,email,password)VALUES ('$username','$email','$password')";
        
        mysqli_query($db, $sql);
        $_SESSION ['user name'] = $username
      }
      
      
      
      ?>
