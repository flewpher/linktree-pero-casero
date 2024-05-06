<?php 
$status = isset($_GET['status']) ? $_GET['status'] : 'landing';

$accion = match ($status) {
    'landing' => require_once 'landingPage.php'
};

?>