<?php
include_once("controller.php");

session_start();

$controller = new Controller();
$controller->invoke();

