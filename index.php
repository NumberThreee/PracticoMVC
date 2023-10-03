<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comentarios</title>
</head>
<body>
    <a href="router.php?action=mostrar"> Mostrar comentarios ultimo comentario </a>
    
    <form action="router.php" method="POST">
        <input type="text" name="usuario" required>
        <input type="text" name="comentario" placeholder="Deja tu comentario" required>
        <button type= "submit">Insertar comentario</button>
    </form>
    
    
</body>
</html>