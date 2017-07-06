<?php
/*
 * Note: requires <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 */

function makeLayout()
{
  ?>
<script type="text/javascript" src="myFunction.js"> </script>

 <div id="topnav" > 
   <nav>
       <div id="topnav-left">
        <a class="topnav-icons fa fa-home" href="index.php" title="home"> </a>
        <a class="topnav-icons fa fa-anchor" title="anchor" href="profile.php"> </a>
       </div>
       <div id="topnav-right">
<?php
    if(array_key_exists('loggedIn', $_SESSION) && $_SESSION['loggedIn']==1)
    {
?>
    <a class="topnav-icons fa fa-leaf" href="myForm.php"></a>
    <a class="topnav-icons fa fa-cloud" id="profile"  
       title="profileDropdown" onclick="dropdown()">
        <div id="profileDropdown" class="dropdownContent">
            <a onclick="changePage()"> Link 1 </a>
        </div>
    </a>
<?php
    }
?>
       </div>
     </nav>
</div>


<div id="header">
        <header> I am a work in Progress </header>
</div>
<?php
}
?>