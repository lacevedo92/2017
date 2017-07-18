<?php require_once 'connSess.php'; ?>
<!DOCTYPE html>
<!--
http://localhost/PhpProject1/index.php
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Work in Progress</title>

    <?php
        require_once 'createLoginForm.php'; 
        require_once 'layout.php';
        require_once 'HomePage.php';
   #     require_once 'test.php';
        require_once 'connSess.php';
    ?>

    <!-- Note - I might need Sharon's Normalize CSS down the road. -->
    <link href="newcss.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <?php
        makeLayout();
    ?>
    <div id="body">
    <div id="content">
    <?php
    if (!array_key_exists("next_page", $_SESSION) and 
        !array_key_exists("uname", $_POST)) {
           createLoginForm();
           $_SESSION['next_page']='home';
    }
       
    elseif(array_key_exists('login_user', $_SESSION) and 
            $_SESSION['next_page'] =='home'){
        echo '<h2> good user </h2>';

        makeHomePage();
    }
        
    elseif(!empty($_SESSION['uname']) && $_SESSION['next_page']=='home')
    {
        echo 'It is going to be ok';
        
    //    makeHomePage();
    //    makeProfile();
        }
        elseif(!empty($_SESSION['uname'])&& $_SESSION['loggedIn']==1 && $_SESSION['next_page']='profile'){
  //      makeProfile(); 
        }
        elseif(!empty ($_SESSION['uname']) && $_POST['next_page']="Thing"){
            echo "howdy";
        }
        else
        {
      #  echo "weird";
        createLoginForm();
        session_destroy();
      #  session_regenerate_id(TRUE);
        session_start();
        }
        ?> 
    </div> <?php 
        include_once 'validationFooter.html';
        ?>
    </body>
</html>
