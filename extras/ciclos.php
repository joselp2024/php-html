<?php
$usuarios = ["1","22","333"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php for ($i = 0; $i < 10; $i++): ?>
            <li><?= $i ?></li>    
        <?php endfor; ?>    

        <?php while($usuarios[0]=== 3): ?>
            <li><?= "s" ?></li>
        <?php endwhile; ?> 
        
        <h1>lista</h1>

        <ul>
            <?php foreach ($usuarios as $usuario): ?>
                
                <li><?= $usuario ?> </li>
                
            <?php endforeach; ?>

        </ul>
        
    </ul>

    
</body>
</html>