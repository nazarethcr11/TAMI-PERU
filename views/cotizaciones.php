<?php
$conexion = new mysqli("localhost", "root", "", "tami");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];
    $eliminarConsulta = "DELETE FROM cotizaciones WHERE id = $idEliminar";
    $conexion->query($eliminarConsulta);
}

if (isset($_GET['buscar'])) {
    $terminoBusqueda = $_GET['buscar'];
    $consulta = "SELECT * FROM cotizaciones WHERE producto LIKE '%$terminoBusqueda%' OR nombre LIKE '%$terminoBusqueda%' OR email LIKE '%$terminoBusqueda%' ORDER BY fecha_cotizacion DESC";
} else {
    $consulta = "SELECT * FROM cotizaciones ORDER BY fecha_cotizacion DESC";
}

$result = $conexion->query($consulta);

if (isset($_GET['mostrar'])) {
    $idMostrar = $_GET['mostrar'];
    $detalleConsulta = "SELECT * FROM cotizaciones WHERE id = $idMostrar";
    $detalleResult = $conexion->query($detalleConsulta);
    $detalleCotizacion = $detalleResult->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted
    if (isset($_POST['id'])) {
        // Process form data and update the database
        $id = $_POST['id'];
        $producto = $_POST['producto'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $cantidad = $_POST['cantidad'];
        $mensaje = $_POST['mensaje'];
        $estado = $_POST['estado'];

        $actualizarConsulta = "UPDATE cotizaciones SET producto = '$producto', nombre = '$nombre', telefono = '$telefono', email = '$email', cantidad = $cantidad, mensaje = '$mensaje', estado = '$estado' WHERE id = $id";
        $conexion->query($actualizarConsulta);

        // Redirect to the same page after updating the database
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    }
}
$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../public/images/TAMILOGOtransparente.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | TAMI</title>
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../public/css/contacto.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }

    .main {
        flex: 1;
        padding-top: 100px;
    }

    .container {
        max-width: 96%;
        margin: 20px 2%;
        overflow-x: auto;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
    }

    table {
        width: 98%;
        border-collapse: collapse;
        background-color: #fff;
        border: 1px solid #ddd;
        margin-left: 1%;
        margin-bottom: 20px;
    }

    thead {
        color: #7e7a7a;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tbody tr:hover {
        cursor: pointer;
        background-color: #f5f5f5;
    }

    a {
        color: #e74c3c;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .footer {
        width: 100%;
        margin-top: auto;
        padding: 10px 0;
        text-align: center;
    }

    .search-container {
        width: 98%;
        margin-left: 1%;
        display: flex;
        gap: 1%;
        text-align: right;
        margin-top: 20px;
        margin-bottom: 5px;
        margin-right: 1%;
    }

    .search-box {
        padding: 8px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
        width: 88%;
    }

    .btn_search {
        padding: 8px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
        width: 14%;
        background-color: var(--color-secundario2);
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 0.8rem;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .btn_search:hover {
        color: #fff;
        background-color: rgb(4 126 126);
        transform: scale(1.1);
    }

    .modal {
        width: 500px;
        display: none;
        position: fixed;
        top: 50%;
        right: 0;
        /* Ajusta la posición derecha */
        height: 100%;
        transform: translate(0, -50%);
        padding: 90px 25px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        display: none;
        opacity: 0;
        /* Establece la opacidad inicial en 0 */
        transition: opacity 0.5s ease;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
        opacity: 0;
        /* Establece la opacidad inicial en 0 */
        transition: opacity 0.5s ease;
    }

    .modal-inner {
        max-height: 80vh;
        overflow-y: auto;
    }

    .cont_title {
        display: flex;
        justify-content: center;
        /* Centra el contenido horizontalmente */
        align-items: center;
        border-bottom: 2px solid #ddd;
        margin-bottom: 10px;
        position: relative;
        /* Agregado para posicionar correctamente el botón */
    }

    .title {
        text-align: center;
        margin: 0;
        color: #626262;
        color: #009f9d;
        flex-grow: 1;
        /* Hace que el título ocupe el espacio disponible */
    }

    .close-btn {
        cursor: pointer;
        font-size: 30px;
        color: #c9c9c9;
        position: absolute;
        /* Permite posicionar el botón */
        left: 0px;
        /* Alinea el botón a la derecha con un margen de 10px */
    }

    .cont_btn {
        margin-top: 25px;
        display: flex;
        align-items: center;
        justify-items: center;
        justify-content: center;
        gap: 20px;

    }

    .btn_editar {
        padding: 8px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
        width: 150px;
        background-color: #3470BC;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 0.8rem;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s ease;
        height: 40px;
    }

    .btn_editar:hover {
        color: #fff;
        background-color: #0E5DC2;
        transform: scale(1.1);
    }


    .btn_guardar {
        padding: 8px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
        width: 150px;
        background-color: #5EC643;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 0.8rem;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s ease;
        height: 40px;
    }

    .btn_guardar:hover {
        color: #fff;
        background-color: #3BA52C;
        transform: scale(1.1);
    }

    .btn_eliminar {
        padding: 8px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
        width: 150px;
        background-color: #E34D58;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 0.8rem;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s ease;
        height: 40px;
    }

    .btn_eliminar:hover {
        color: #fff;
        background-color: #EE2A38;
        transform: scale(1.1);
    }

    .receipt {
        margin-top: 20px;
    }

    .receipt .subtitulo {
        color: #c9c9c9;
    }

    .receipt .subtitul_cont {

        border-bottom: 1px solid #ddd;
        margin-bottom: 20px;
    }

    #email {
        color: #6EADFF;
        text-decoration: underline;
    }
    p.subtitulo {
    display: grid;
}
.subtitulo{
    margin-top: 8px;
}
strong {
    font-family: 'poppins', sans-serif;
    color: cadetblue;
     color: #aab2b3;
}   
input{
    font-size: 17px;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom:2px solid #DDDDDD ;
}
</style>
<body>
    <?php include_once "header.php"; ?>
    <main class="main">
        <div class="container">
            <div>
                <form class="search-container" action="" method="GET">
                    <input type="text" class="search-box" name="buscar" placeholder="Buscar...">
                    <button type="submit" class="btn_search">Buscar</button>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Fecha de Cotización</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr class="show-modal" data-id="<?= $row['id'] ?>">
                            <td><?= $row['producto'] ?></td>
                            <td><?= $row['nombre'] ?></td>
                            <td><?= $row['telefono'] ?></td>
                            <td style="display: none;"><?= $row['email'] ?></td>
                            <td><?= $row['cantidad'] ?></td>
                            <td style="display: none;"><?= $row['mensaje'] ?></td>
                            <td ><?= $row['estado'] ?></td>
                            <td><?= $row['fecha_cotizacion'] ?></td>
                            <td><a href="?eliminar=<?= $row['id'] ?>">Eliminar</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>
    <div class="overlay" id="overlay"></div>
    <div class="modal" id="modal">
        <div class="modal-inner">
            <div class="cont_title">
                <h2 class="title">Boleta de Cotización</h2>
                <span class="close-btn" id="close-btn">&times;</span>
            </div>
            <form class="formulario" id="cotizacion-form" class="boleta" action="" method="POST">
                <input type="hidden" name="id" id="cotizacion-id">
                <p class="subtitulo"><strong>Producto:</strong> <input type="text" name="producto" id="cotizacion-producto" readonly value="<?= $row['producto'] ?>"></p>
                <p class="subtitulo"><strong>Nombre:</strong> <input type="text" name="nombre" id="cotizacion-nombre" readonly value="<?= $row['nombre'] ?>"></p>
                <p class="subtitulo"><strong>Teléfono:</strong> <input type="text" name="telefono" id="cotizacion-telefono" readonly value="<?= $row['telefono'] ?>"></p>
                <p class="subtitulo"><strong>Email:</strong> <input type="text" name="email" id="cotizacion-email" readonly value="<?= $row['email'] ?>"></p>
                <p class="subtitulo"><strong>Cantidad:</strong> <input type="text" name="cantidad" id="cotizacion-cantidad" readonly value="<?= $row['cantidad'] ?>"></p>
                <p class="subtitulo"><strong>Mensaje:</strong> <input type="text" name="mensaje" id="cotizacion-mensaje" readonly value="<?= $row['mensaje'] ?>"></p>
                <p class="subtitulo"><strong>Estado:</strong> <input type="text" name="estado" id="cotizacion-estado" readonly value="<?= $row['estado'] ?>"></p>
                <p class="subtitulo"><strong>Fecha de Cotización:</strong> <input type="text" name="fecha" id="cotizacion-fecha" readonly value="<?= $row['fecha_cotizacion'] ?>"></p>
            </form>
            <div class="cont_btn">
                <button class="btn_eliminar" id="eliminar-btn">Eliminar</button>
                <button class="btn_editar" id="editar-btn">Editar</button>
                <button class="btn_guardar" id="guardar-btn" style="display: none;">Guardar</button>
            </div>
        </div>
    </div>
    <?php include_once "footer.php"; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showModalButtons = document.querySelectorAll('.show-modal');
            const modal = document.getElementById('modal');
            const overlay = document.getElementById('overlay');
            const closeBtn = document.getElementById('close-btn');
            const cotizacionForm = document.getElementById('cotizacion-form');
            const eliminarBtn = document.getElementById('eliminar-btn');
            const editarBtn = document.getElementById('editar-btn');
            const guardarBtn = document.getElementById('guardar-btn');

            showModalButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const id = button.getAttribute('data-id');

                    const rowData = document.querySelector(`.show-modal[data-id="${id}"]`).children;
                    document.getElementById('cotizacion-id').value = id;
                    document.getElementById('cotizacion-producto').value = rowData[0].textContent;
                    document.getElementById('cotizacion-nombre').value = rowData[1].textContent;
                    document.getElementById('cotizacion-telefono').value = rowData[2].textContent;
                    document.getElementById('cotizacion-email').value = rowData[3].textContent;
                    document.getElementById('cotizacion-cantidad').value = rowData[4].textContent;
                    document.getElementById('cotizacion-mensaje').value = rowData[5].textContent;
                    document.getElementById('cotizacion-estado').value = rowData[6].textContent;
                    document.getElementById('cotizacion-fecha').value = rowData[7].textContent;

                    modal.style.display = 'block';
                    overlay.style.display = 'block';

                    setTimeout(() => {
                        modal.style.opacity = '1';
                        overlay.style.opacity = '1';
                    }, 50);
                });
            });

            closeBtn.addEventListener('click', () => {
                modal.style.opacity = '0';
                overlay.style.opacity = '0';
                setTimeout(() => {
                    modal.style.display = 'none';
                    overlay.style.display = 'none';
                }, 500);
            });

            overlay.addEventListener('click', () => {
                modal.style.opacity = '0';
                overlay.style.opacity = '0';
                setTimeout(() => {
                    modal.style.display = 'none';
                    overlay.style.display = 'none';
                }, 500);
            });

            eliminarBtn.addEventListener('click', () => {
                const idEliminar = document.getElementById('cotizacion-id').value;
                window.location.href = `?eliminar=${idEliminar}`;
            });

            editarBtn.addEventListener('click', () => {
                cotizacionForm.querySelectorAll('input').forEach(input => {
                    input.removeAttribute('readonly');
                });
                guardarBtn.style.display = 'block';
                editarBtn.style.display = 'none';
            });

            guardarBtn.addEventListener('click', () => {
                cotizacionForm.submit();
            });
        });
    </script>
</body>

</html>
