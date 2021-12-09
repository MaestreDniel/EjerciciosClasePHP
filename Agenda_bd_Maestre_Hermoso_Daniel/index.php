<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Agenda de contactos</h1>
        <form name="formulario" method="get" action="">
        <label><h2>Nombre:</h2></label>
        <input type="text" name="name" placeholder="Gerundio González" required/><br>
        <label><h2>Teléfono:</h2></label>
        <input type="text" maxlength="9" name="telephone" placeholder="611222333"/><br><br>
        <input type="submit" name="submit" value="Enviar"/></label><br>
        <h2>Instrucciones: </h2>
        - Rellena ambos campos para que se añada el contacto a la agenda.<br>
        - Para actualizar el nº tel de un contacto debes poner su nombre y un nuevo nº tel.<br>
        - Si solo pones el nombre, se elimina ese contacto.<br>
        <h2>Contactos</h2>
        
        <?php
            /**
             * @author: Daniel Maestre Hermoso
             * Fecha Inicio: 02/12/2021
             * Fecha Fin: 09/12/2021
             * Curso: 2º FP DAW
             * Modulo: Programación en Entorno Servidor
             * Practica Agenda con B.D. y clases
             * @version: 1.0
             */
    
            include_once 'objects/contactos.php';
            
            include_once 'config/database.php';
            
            $database = new Database();
            $db = $database->getConnection();
            $contactos = new contactos($db);
    
            function mostrarTabla($contactos) {
                echo "<table class='table table-hover table-responsive table-bordered'>";
                echo "<tr>";
                    echo "<th> Nombre </th>";
                    echo "<th> Teléfono </th>";
                echo "</tr>";
                $stmt = $contactos->readAllContactos();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    echo "<tr>";
                        echo "<td> {$name} </td>";
                        echo "<td> {$telephone} </td>";
                    echo "</tr>";
                };
                echo "</table>";
            }
            
            if (!empty($_GET)) {
                try {
                    
                    $contactos->name = $_GET['name'];
                    $contactos->telephone = $_GET['telephone'];
                    
                    if (empty($contactos->telephone)) {
                        if ($contactos->CountRows()) {
                            $contactos->DropRow();
                        }
                    } else {
                        if ($contactos->CountRows() > 0) {
                            if($contactos->UpdateRow()){
                                echo "<div class='alert alert-success'>Has actualizado el contacto.</div>";
                            } else {
                                echo "<div class='alert alert-danger'>No se pudo actualizar el contacto.</div>";
                            }
                        } else {
                            if($contactos->create()){
                                echo "<div class='alert alert-success'>Has creado un nuevo contacto.</div>";
                            } else {
                                echo "<div class='alert alert-danger'>No se pudo crear el contacto.</div>";
                            }
                        }
                    }
                    if ($contactos->CountAllRows() > 0) {
                        mostrarTabla($contactos);
                    }
                // show Error
                } catch (PDOException $exception) {
                    die('ERROR: ' . $exception->getContactos());
                }
            } else {
                if ($contactos->CountAllRows() > 0) {
                    mostrarTabla($contactos);
                }
            }
        ?>

    </form>
    <!-- <br><a href="./">Volver al índice</a> -->
</body>
</html>