<?php
session_start();
require("routes/web.php");
$uri = isset($_GET['url']) ? '/'.$_GET['url'] : '/';
$router->dispatch($uri);
?>