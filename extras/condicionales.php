<?php
    $variable=false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    
    <?php 
        if($variable){ 
            echo "<p>AAA</p>";
        }else{
            echo "<b>BBB</b>";
        }; 
    ?>

    <h1>esto es como se deberia de hacer</h1>
    <!-- esto es mas compacto y es de mejor manera pues es mas estable para el propio sistema, por lo que es mas recomendable a la hora de compilar, ya que las llaves se cierran automaticamente y no habira problema en perderlas -->
        <?php if($variable): ?>
            <b>AAA</b>
        <?php else: ?>
            <b>BBB</b>
        <?php endif; ?>
        
</body>
</html>