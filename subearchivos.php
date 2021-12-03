<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sube un archivo</title>
</head>
<body>
    <form enctype="multipart/form-data" action="upload.php" method="POST"> 
        <!-- enctype="multipart/form-data": es necesario para subir archivos, 
        crea la forma que permite explorar en su búsqueda en el equipo local.
        action="upload.php": Especifica el script con su ruta que ejecutara la acción. -->
        <input name="uploadedfile" type="file" />
        <input type="submit" value="Subir archivo" />
    </form>
</body>
</html>
