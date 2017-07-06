<?php require_once 'config.php'; 
/* 
 * Purpose: Reset and email new password 
 * Requires email input associated with the account
 * Requires change password on login
 */
?>




 
 <?php
 $subject = "password reset";
 $message="Your new password is: ";
 $from="From: postmaster@localhost";
 $length=9;
 $randomString='';
 $characters='0123456789abcdefghijklmonpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $charactersLength = strlen($characters);
 if(!empty($_POST['email']))
 {
     #query db for the email
     $email = mysqli_real_escape_string($db,$_POST['email']);
     $validateQuery="SELECT * FROM users WHERE emailAddy = '".$email."'";
     $updateQuery="UPDATE users SET pwd";
     $checkEmail= mysqli_query($db, $validateQuery);
             if(mysqli_num_rows($checkEmail)==1)
             {
                 #generate random password
                 for($ii=0; $ii<$length; $ii++)
                 {
                     $randomString.=$characters[rand(0, $charactersLength-1)];
                 }
                 #send an email with a new password
                 $send=mail($email, $subject, $message.$randomString, $from);
                 if($send==1)
                 {
                     ?>
                    <p> email sent. </p>
                    <?php
                    #update email in db
                    mysqli_query($db, $updateQuery."'".$randomString."' WHERE EMAIL='".$email."'");
                 }
                else {
                ?> <p> email failed. please try again later. </p> <?php
                }
             }
             else
             {
                 ?> <p> no such email found</p> 
                    <p> <a href="index.php"> Go Back </a> </p>
                <?php
             }
 }
 else
 {
     ?>
 <fieldset> <legend> Reset Password </legend>
<form action="" method="post" >
    <label> Email: </label> <input type="text" name="email" class="box"/>
    <input type="submit" value="Submit"/>
    <p> <a href="index.php"> Go Back </a> </p>
</form>
 </fieldset>

     <?php }
?>