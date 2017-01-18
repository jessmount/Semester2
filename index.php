<?php 

    $firstName= "";
    $lastName = ""; 
    $phone = "";
    $email = ""; 
    $confirm_e = ""; 
    $password =""; 
    $con_pass = ""; 
    
    if(isset($_POST['send'])) {
       
        $firstName = $_POST['f_name']; 
        $lastName = $_POST['l_name']; 
        $phone = $_POST['phone']; 
        $email = $_POST['email']; 
        $confirm_e = $_POST['confirm_e']; 
        $password = $_POST['password']; 
        $con_pass = $_POST ['confirm_pass']; 
        $name_pattern = "/[a-z]i/";
        $phone_pattern = "/^[0-9]{10}/";
        $pass_pattern = "/[0-9a-z]{8,14}i/";
        
        
        
        if(empty($firstName)){
            
            echo "Please enter first name"; 
            
        }else if (!preg_match($name_pattern, $firstName)){
            echo "Please enter a valid name.";
        }else{
            echo "Thank-you!";
        }
        
       /* if(empty($lastName)) {
            echo "Please enter last name"; 
        
        }else if (!preg_match($name_pattern, $lastName)) {
            
            echo "please enter valid name"; 
        }else{ 
            echo "Thank-you!"; 
        }
            
        if(empty($phone)) {
            echo "Please enter a phone number"; 
            
        }else if (!preg_match($phone_pattern, $phone)){
            echo "Please enter a valid phone number"; 
            
        }else{
            echo "Thank-you"; 
        }
            
        if(empty($email)) {
            echo "Please enter an email";
            
        }else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Thank-you"; 
        }else{
            echo "Please enter a valid email"; 
        }
            
        if(empty($confirm_e)) {
            echo "Please enter an email"; 
        }else if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Thank-you"; 
        }else{
            echo "Please enter a valid email";
        }
            
        if(empty($password)) {
            echo "Please enter a password"; 
        }else if (!preg_match($pass_pattern, $password)) {
            echo "Please enter a vaild password"; 
        }else {
            echo "Thank-you";
        } */

    }


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>Sign-up Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       
        <link href="style.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    
    </head>
    <body>
    <?php
        include "header.php";
    ?>
  
    <main>
         
             <h2>Sign-up for a free account!</h2>
       
            <form action="confirmation.php" method="post" id="signUpForm" name="signUp" >
                <div id="first_n" class="field">
                    <label for="f_name">First Name:</label>
                    <input type="text" name="f_name" id="f_name">
                </div>
                <div id="last_n" class="field">
                    <label for="l_name">Last Name:</label>
                    <input type="text" name="l_name" id="l_name">
                </div>
                <div id="p_num" class="field">
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" id="phone">
                </div>
                <div id="em" class="field">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email">
                </div>
                <div id="cem" class="field">
                    <label for="confirm_e">Confirm Email:</label>
                    <input type="text" name="confirm_e" id="confirm_e">
                </div>
                <div id="pass" class="field">
                    <label for="password">Password:</label>
                    <input type="text" name="password" id="password">
                </div>
                <div id="c_pass" class="field">
                    <label for="confirm_pass">Confirm Password:</label>
                    <input type="text" name="confirm_pass" id="confirm_pass">
                </div>
                <button type="submit" id="submit_btn" name="send">Submit</button>
                </form>
      
        </main>
        <?php 
            include "footer.php";
        ?>
    </body>


</html>