<?php
session_start();
session_destroy();

$msg = "logout feito!";

header("location:index.php?msg=" . $msg);

?>