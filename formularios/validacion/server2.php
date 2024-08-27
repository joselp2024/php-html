<?php

    // $nombre = $_POST["nombre"];

    // if(!empty($nombre)){
    //     echo"Hola $nombre";
    // }else{
    //     echo"bno mandaste nada";
    // };


// -----------------------------------------------------------
   
    // if(isset($_POST["form"])){
    //     echo"todo el formulario fue enviado";
    // }else{
    //     echo "formulario no eviado";
    // }


// -----------------------------------------------------------




$username = $_POST["username"];
$name= $_POST["name"];
$email = $_POST["email"];   
$age = $_POST["age"];

$htmlenities = htmlentities($name);

$onlywords= preg_replace("/\d/","",$username);
$onlynumbers= preg_replace("/\D/","",$age);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
//    var_dump($_REQUEST)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Nombre:</p>
    <?php echo $htmlenities ?>

    <p>Username:</p>  
    <?php echo $onlywords ?>

    <p>Age::</p>  
    <?php echo $onlynumbers ?>

    <p>Email::</p>  
    <?php echo $email ?>

</body>
</html>
