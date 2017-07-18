<?php
 //   require_once("connSess.php");
/*
 * <form method = "POST" action = "<?= htmlentities($_SERVER['PHP_SELF'],
                                       ENT_QUOTES) ?>" >
 */
?>

<form method = "POST" action = "<?= htmlentities($_SERVER['PHP_SELF'],
                                       ENT_QUOTES) ?>" >
    <table>
    <tr> <th> Log in </th></tr>
    <tr>
        <td>   <label>Username </label><input type = "text" name = "uname" class = "box" autofocus /></td><br /><br />
    </tr> <tr>
        <td>   <label>Password </label><input type = "password" name = "pwd" class = "box" /></td><br/><br />
    </tr><tr>              
        <td>   <input type = "submit" value = " Submit "/></td><br />
    </tr><tr>
        <!--<td> <p> <a href="register.php"> New User? </a> </p> </td>-->
        <button class="forgotPwd" type="button" name="forgotPwd"></button>
    </tr><tr>
        <td> <button> </</td>
    </tr><tr>
        <!-- this button needs work -->
        <td> <p> <a href="forgotPassword.php"> Forgot Password? </a> </p> </td>
    </tr>
    
    </table>
</form>
