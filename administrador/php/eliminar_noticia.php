<?php
include("../class/database.php");
$objData = new Database();

$id=$_GET['id'];

$sth = $objData->prepare("DELETE FROM cat_nacional WHERE id=$id");

$sth->execute();