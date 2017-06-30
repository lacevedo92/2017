<?php include "connSess.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>User Management System (Tom Cameron for NetTuts)</title>
<link rel="stylesheet" href="newcss.css" type="text/css" />
</head>  
<body>  
<div id="main">
<?php
if(!empty($_POST['uname']) && !empty($_POST['pwd']))
{
    $uname = mysqli_real_escape_string($db, $_POST['uname']);
    $pwd = md5(mysqli_real_escape_string($db, $_POST['pwd']));
    $email = mysqli_real_escape_string($db, $_POST['email']);
     
     $checkusername = mysqli_query($db, "SELECT * FROM users WHERE uname = '".$uname."'");
      
     if(mysqli_num_rows($checkusername) == 1)
     {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
        $registerquery = mysqli_query($db, "INSERT INTO users (uname, pwd, emailAddy) VALUES('".$uname."', '".$pwd."', '".$email."')");
        if($registerquery)
        {
            echo "<h1>Success</h1>";
            echo "<p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>";
        }
        else
        {
            echo "<h1>Error</h1>";
            echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }       
     }
}
else
{
    ?>
     
   <h1>Register</h1>
     
   <p>Please enter your details below to register.</p>
     
    <form method="post" action="register.php" name="registerform" id="registerform">
    <fieldset>
        <label for="uname">Username:</label><input type="text" name="uname" id="username" /><br />
        <label for="pwd">Password:</label><input type="password" name="pwd" id="password" /><br />
        <label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />
        <input type="submit" name="register" id="register" value="Register" />
    </fieldset>
    </form>
     
    <?php
}
?>
 
</div>
</body>
</html>