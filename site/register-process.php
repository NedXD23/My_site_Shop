<?php

require ('helper.php');
// error variable.
$error = array();

$firstName = validate_input_text($_POST['firstName']);
if (empty($firstName)){
    $error[] = "You forgot to enter your first Name";
}
if (strlen($firstName)<=3)
{
    $error[] = "Min value first Name is 3";
}
$lastName = validate_input_text($_POST['LastName']);
if (empty($lastName)){
    $error[] = "You forgot to enter your Last Name";
}
if (strlen($lastName)<3)
{
    $error[] = "Min value last Name is 3";
}
$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}
if (strlen($password)<6){
    $error[] = "Min value for password is 6 characters";
}
$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "You forgot to enter your Confirm Password";
}

$files = $_FILES['profileUpload'];
$profileImage = upload_profile('./assets/profile/', $files);

if(empty($error)){
    
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require ('mysqli_connect.php');
    $q = mysqli_stmt_init($con);

                $check_query = "SELECT * FROM users WHERE email=?";
                $q = mysqli_stmt_init($con);
                mysqli_stmt_prepare($q, $check_query);
            
                // bind parameter
                mysqli_stmt_bind_param($q, 's', $email);
                //execute query
                mysqli_stmt_execute($q);
            
                $result = mysqli_stmt_get_result($q);
            
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
                if (!empty($row)){
                // if user exists
                if ($row['email'] === $email) {
                    array_push($error, "Username already exists");
                   
                }
            }
        }
            


            if(empty($error)){
    // make a query
    $query = "INSERT INTO users (userID, firstName, lastName, email, password, profileImage, registerDate )";
    $query .= "VALUES(' ', ?, ?, ?, ?, ?, NOW())";

    // initialize a statement
   
    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'sssss', $firstName, $lastName, $email, $hashed_pass, $profileImage);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

        // start a new session
        session_start();

        // create session variable
        $_SESSION['userID'] = mysqli_insert_id($con);

        header('location: Log.php');
        exit();
    }else{
        print "Error while registration...!";
    }

}else{
    echo
     "<script>
    alert('$error[0];');
   
    </script>";   
     
  
}


















