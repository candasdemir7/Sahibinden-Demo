<?php
require_once 'db.php';
$id = $_GET["id"] ;

$stmt = $db->prepare("update motorbikes set status = 1 where id = ?") ;
$stmt->execute([$id]) ;

header("Location: index.php") ;