<?php
// echo basename($_SERVER["REQUEST_URI"]);
include 'clean.php';

if(basename($_SERVER["REQUEST_URI"])=='dashboard' || basename($_SERVER["REQUEST_URI"])=='categories' || basename($_SERVER["REQUEST_URI"])=='sub-categories'|| basename($_SERVER["REQUEST_URI"])=='settings' || basename($_SERVER["REQUEST_URI"])=='change-password' || basename($_SERVER["REQUEST_URI"])=='blog'){
    if(!isset($_SESSION['rixy']) AND $_SESSION['cream'] !=true){
        header("Location: control");
    }
}
$rixy =$conn->query("SELECT * FROM dsettings")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <title> Rixy Skin Care | Beauty Bubbles Whitening Black Soap</title>
    <?php include 'style.php'; ?>
<style>
    .activex a{
        color: red !important;
    }
</style>
</head>