<?php
include("../../class/database.php");

$objData = new Database();

$sth = $objData->prepare('DELETE FROM cat_nacional WHERE id = :id');

$id = $_GET['id'];

$sth->bindParam(':id',$id);
$sth->execute();

header('location:../../admin.php');