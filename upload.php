<?php
/**
 * uploadedfile: Es la referencia al archivo usada en el formulario.
 * $target_path: Es la ruta a la carpeta donde se almacenarán los archivos.
 * $_FILES['uploadedfile']['tmp_name']: Archivo subido y guardado de forma temporal por el servidor. Si no es movido a otra ubicación es destruido.
 * $_FILES['uploadedfile']['name']: Archivo finalmente guardado en la carpeta especificada.
 */

    $target_path = "images/"; // Al directorio que me interesa que entren mis archivos
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); // El nombre del archivo
    // Si va bien, lo mueve al directorio y muestra que ha ido ok, si no, mensaje de error.
    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
        echo "El archivo ".  basename( $_FILES['uploadedfile']['name']). 
        " ha sido subido";
    } else {
        echo "Ha ocurrido algún error!";
    }
?>