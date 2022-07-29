<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SICS</title>
    <link rel="stylesheet" type="text/css" href="http://sics.local/public/css/myStyles.php">
</head>

<body>
<?php
if(Messages::getMessage()){
    require('app/views/modules/messages.php');
}
?>