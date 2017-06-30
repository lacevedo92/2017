<?php
    include 'connSess.php';
    #referencing tutorial https://code.tutsplus.com/tutorials/user-membership-with-php--net-1523
    if(!empty($_SESSION['loggedIn']) && !empty($_SESSION['uname']))
    {
           //let user access main page
        ?>
        <h1> Welcome in,</h1>
        <p> <?=$_SESSION['uname'] ?>
        </p>
        
        <p> <a href="logout.php"> Logout </a> </p>
    
    <?php    
    }
    elseif(!empty($_POST['uname']) && !empty($_POST['pwd']))
    {
        //let user login
        $uname = mysqli_real_escape_string($db, $_POST['uname']);
        $pwd = md5(mysqli_real_escape_string($db, $_POST['pwd']));
                
        $checkLogin = mysqli_query($db, "SELECT * FROM users WHERE uname = '".$uname."' AND pwd ='".$pwd."'");
        
        if(mysqli_num_rows($checkLogin) == 1)
        {
            $row = mysqli_fetch_array($db, $checkLogin);
            $email = $row['emailAddy'];
            
            $_SESSION['uname'] = $uname;
            $_SESSION['emailAddy'] = $email;
            $_SESSION['loggedIn'] = 1;
            
            echo "<h1>Success</h1>";
            echo "<p>Now redirecting inside </p>";
            echo "<meta http-equiv='refresh' content='=2;index.php' />";
        }
        else {
            echo "<h1> Error - not found </h1>";
        }
        ?>
        <h1> Logging in </h1>
        
        <?php
    }
    else
    {   
        ?>
        <h1> Login </h1>

        <?php
        //display login form
        require_once("login.php");
        ?>
        
        <p> <a href="register.php"> New User </a> </p>
        
        
        
        <?php
    }
?>