<?php
function createLoginForm(){
?>

<form method = "POST" action = "<?= htmlentities($_SERVER['PHP_SELF'],
                                       ENT_QUOTES) ?>" >
    <?php     require 'loginFieldset.html'; ?>
</form>
<?php }
?>
