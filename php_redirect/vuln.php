<?php
/* Redirect browser */
header("Location: $input");
/* Make sure that code below does not get executed when we redirect. */
exit;
?>
