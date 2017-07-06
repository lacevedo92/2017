
<?php
    $validEmail=filter_var($email, FILTER_VALIDATE_EMAIL);
if ($validEmail) {
    echo "This ($email) email address is considered valid.\n";
    
} else {
    echo "This ($email) email address is considered invalid.\n";
}
?>


