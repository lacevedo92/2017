<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Work in Progress</title>
        <?php
        require_once 'layout.php';
        ?>
        <link href="newcss.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <?php makeLayout(); ?>
        <div id="body">
        <form action="index.php" method="post" class="fluid">
            <label> Label </label> <input type="text" id="thing"/>
            <input type="submit" value="submit"/> 
        </form>
        

        <p> <a href="logout.php"> Logout </a> </p>
        </div>
    </body>
</html>