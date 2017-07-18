<?php
        require_once 'navigation.php';

    #Purpose: generate the main page
function makeHomePage()
{
    $today= date("D M j g:i:s T Y");
    echo $today;
  //  $anotherDay=date("Y-m-d");
  //  echo $anotherDay;
    $uname = $_SESSION['login_user'];

?>  

<script type="text/javascript" src="myFunction.js"> </script>

<h1> Welcome </h1>
<p> <?php echo $uname; ?> </p>

<!-- Home Page Menu -->
<form action="index.php" method="post">
    <button type="button"  onclick="run()"> Click me! </button>
    
</form>
<p id="demo"> Oh no... </p>
<p> A girl can dream...dream of everything</p>
<?php createNav(); ?>
<p> <a href="logout.php"> Logout </a> </p>


<?php    
}
?>