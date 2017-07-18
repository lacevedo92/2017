<?php

# using http://www.tutorialspoint.com/php/php_mysql_login.htm
# and referencing http://users.humboldt.edu/smtuttle/s17cs328/328hw07/hsu_conn_sess_php.html
# tutorial calling this base.php
    require_once 'config.php';
    session_start();
    $error="";    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //uname and pwd sent from form
        $uname = mysqli_real_escape_string($db, $_POST['uname']);
        $pwd = mysqli_real_escape_string($db, $_POST['pwd']);
        $pwdSecure=md5($pwd);
           
        $sql = "SELECT userID FROM users WHERE uname='$uname' and pwd='$pwdSecure'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        //If result matched $uname and $pwd, table must be 1 row
        if($count == 1)
        {
            $_SESSION['login_user'] = $uname;
            
            header("location: index.php");
        }else {
            $error = "Invalid credentials";
        }
    }
    
    

?>