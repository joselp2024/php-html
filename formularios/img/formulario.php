<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILES</title>
</head>
<body>
    <form action="./server2.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="image">IMAGEN</label>
        <input type="file" name="image" id="image">
        
        <button type="submit">Mandar Formulario</button>

        

    </form>
</body>
</html>