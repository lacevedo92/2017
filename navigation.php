<?php

/* 
 * Purpose: Generate the forms that navigate the session
 */
function createNav(){
?>
<fieldset>
    <legend> Whatdya wanna do? </legend>
<form method="POST" action="<?=htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES)?>"
      class="select">
    <input type="radio" name="option_choice" value="Thing"/> Thing </br>
    <input type="submit" value="Go" class="go" />
    
</form>
</fieldset>
<?php
}
?>
