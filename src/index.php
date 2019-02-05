<html lang="en" class="h-100">
<?php include 'view/head.php'; ?>
<body class="container h-100">
<?php

include_once("controller.php");
session_start();

$controller = new Controller();
$controller->invoke();

?>
</body>
</html>
