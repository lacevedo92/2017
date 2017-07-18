<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Work in Progress</title>
        <?php
        require_once 'layout.php';
        ?>
        <!-- Note - I might need Sharon's Normalize CSS down the road. -->
        <link href="newcss.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        
<?php
/*
 * Purpose: Create profile page
 */

    makeLayout();
    $uname=$_SESSION["login_user"];
    ?>
<div id="body">   
    <div id="content">
<h1> Your Name: <?php echo $uname; ?> </h1>

<p> Your details </p>
<p> Member since </p>
<p> <a href="logout.php"> Logout </a> </p>


<?php
//}
?>
    </div>
</div>
    </body>
</html>