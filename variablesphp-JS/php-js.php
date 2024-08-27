<?php
$usuarios = array(
    array(
        "id"=> 1,
        "nome"=> "A",
    ),
    array(
        "id"=> 2,
        "nome"=> "B",
    ),
    array(
        "id"=> 3,
        "nome"=> "C",
    ),
);

$edad = 4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        

        let edad = <?=$edad ?>;
       
    </script>
    <script src="./index.js"></script>
</body>
</html>