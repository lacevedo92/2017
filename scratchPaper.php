<?php session_start(); ?>

<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml"
<head>
    <meta charset="UTF-8">
    <title> Check one, two </title>    

<?php 
    require_once 'connSess.php';
?>
</head>
<body>
    <h1> Testing login </h1>
<?php
    if(!array_key_exists('uname', $_POST) and 
       !array_key_exists("next_page", $_SESSION))
    {
    ?>
        <form method="post"
              action="<?= htmlentities($_SERVER['PHP_SELF'],
                                       ENT_QUOTES) ?>">
            <?php require('loginFieldset.html');?>
                  <div class="submit">
                <input type="submit" value="log in" />
            </div>
        </form>
    <?php
        $_SESSION['next_page']='choose_dept';
    }
    elseif (array_key_exists('uname', $_POST) and 
            $_SESSION['next_page']=='choose_dept') {
            $uname = strip_tags($_POST['uname']);
            $pwd = $_POST['pwd'];
            $_SESSION['uname']=$uname;
            $_SESSION['pwd']=$pwd;
            echo'<h1> You in </h1>';
        // this happens to be the logical end of
        //    this session

        session_destroy();
}
 else {
    session_destroy();
    session_regenerate_id();
    session_start();
}
?>
        
</body>