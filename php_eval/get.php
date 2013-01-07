<a href="?input=stuff">I'm vulnerable</a>

<?php

$input = $_GET['input'];

include 'vuln.php';

