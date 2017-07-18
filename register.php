<?php 
    session_start();
    include "config.php";
    #include "connSess.php"; 
    #need to validate emails
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>Register</title>
<link rel="stylesheet" href="newcss.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php   
    require_once 'layout.php'; 
    require_once 'connSess.php';
?>
</head>  
<body>  
    <?php    makeLayout(); ?>
<div id="body">
    <div id="content">
<?php
$_POST["current"]="register";
if(!empty($_POST['uname']) && !empty($_POST['pwd']))
{
    $uname = mysqli_real_escape_string($db, $_POST['uname']);
    $pwd = md5(mysqli_real_escape_string($db, $_POST['pwd']));
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $regDate = date("Y-m-d");
    $registerQuery=false;
     
     $checkusername = mysqli_query($db, "SELECT * FROM users WHERE uname = '".$uname."'");
     $checkEmail = mysqli_query($db, "SELECT * FROM users WHERE emailAddy ='".$email."'"); 
     if(mysqli_num_rows($checkusername) == 1)
     {
         ?>
        <h1>Error</h1>
        <p>Sorry, that username is taken. Please go back and try again.</p>
        <p> <a href="index.php"> Go Back </a> </p>

     <?php
     }
     elseif(mysqli_num_rows($checkEmail)==1)
     {
         ?> <h1> Error </h1>
         <p> That email is already in use. Try again. </p>
         <p> <a href="index.php"> Go Back </a> </p>
    <?php
     }
     else
     {
        include 'validateEmail.php';
        if($validEmail){
        $registerQuery = mysqli_query($db, "INSERT INTO users (uname, pwd, emailAddy, dateReg) "
                . "VALUES('".$uname."', '".$pwd."', '".$email."', '".$regDate.")");
        }
        if($registerQuery)
        { ?>            
            <h1>Success</h1>
            <p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>
         <?php
        }
        else
        {
            ?>
            <h1>Error</h1>
            <p>Sorry, your registration failed. Please go back and try again.</p>
                    <p> <a href="index.php"> Go Back </a> </p>

            <?php
        }       
     }
}
else
{
    include ("register.html");
    ?>
         
    <?php
}
?>
    </div>
</div>
</body>
</html>