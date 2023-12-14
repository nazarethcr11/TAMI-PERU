<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "tami");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Eliminar cotización si se ha enviado un ID para eliminar
if (isset($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];
    $eliminarConsulta = "DELETE FROM cotizaciones WHERE id = $idEliminar";
    $conexion->query($eliminarConsulta);
}

// Consultar cotizaciones
$consulta = "SELECT * FROM cotizaciones ORDER BY fecha_cotizacion DESC";
$result = $conexion->query($consulta);

// Cerrar conexión
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

        th, td {
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
  right: 0; /* Ajusta la posición derecha */
  height: 100%;
  transform: translate(0, -50%);
  padding: 90px 25px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  display: none;
    opacity: 0; /* Establece la opacidad inicial en 0 */
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
    opacity: 0; /* Establece la opacidad inicial en 0 */
    transition: opacity 0.5s ease;
}

.modal-inner {
  max-height: 80vh;
  overflow-y: auto;
}
.cont_title {
  display: flex;
  justify-content: center; /* Centra el contenido horizontalmente */
  align-items: center;
  border-bottom: 2px solid #ddd;
  margin-bottom: 10px;
  position: relative; /* Agregado para posicionar correctamente el botón */
}

.title {
  text-align: center;
  margin: 0;
  color: #626262;
  color:#009f9d ;
  flex-grow: 1; /* Hace que el título ocupe el espacio disponible */
}

.close-btn {
  cursor: pointer;
  font-size: 30px;
  color: #c9c9c9;
  position: absolute; /* Permite posicionar el botón */
  left: 0px; /* Alinea el botón a la derecha con un margen de 10px */
}

.cont_btn {
    margin-top: 20px;
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
            background-color:#3470BC;
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
        .btn_eliminar {
            padding: 8px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            width: 150px;
            background-color:#E34D58;
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
.receipt{
    margin-top: 20px;
}
.receipt .subtitulo{
    color: #c9c9c9;
}
.receipt .subtitul_cont{
   
    border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
}
#email{
    color: #6EADFF;
    text-decoration: underline;
}

    </style>
</head>
<body>
  <?php include_once "header.php";?>
  <main class="main">
    <div class="container">
      <div class="search-container">
        <input type="text" class="search-box" placeholder="Buscar...">
        <button class="btn_search">buscar</button>
      </div>
      <table>
        <thead>
          <tr>
            <th>Producto</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Cantidad</th>
            <th>Fecha de Cotización</th>
            <th>Acciones</th>
          </tr>
        </thead>
       
<tbody>
  <?php while ($row = $result->fetch_assoc()): ?>
    <tr class="show-modal" data-id="<?= $row['id'] ?>">
      <td><?= $row['producto'] ?></td>
      <td><?= $row['nombre'] ?></td>
      <td><?= $row['email'] ?></td>
      <td style="display: none;"><?= $row['telefono'] ?></td>
      <td ><?= $row['cantidad'] ?></td>
      <td style="display: none;"><?= $row['mensaje'] ?></td>
      <td><?= $row['fecha_cotizacion'] ?></td>
      <td><a href="?eliminar=<?= $row['id'] ?>">Eliminar</a></td>
    </tr>
  <?php endwhile; ?>
</tbody>
      </table>
    </div>
  </main><!-- Modal y fondo oscuro -->
<div class="overlay" id="overlay"></div>
<!-- Estructura HTML del modal -->
<div class="modal" id="modal">
  <div class="modal-inner">
    <div class="cont_title">
      <h2 class="title">Boleta de Cotización</h2>
      <span class="close-btn" id="close-btn">&times;</span>
    </div>
    <div id="modal-content" class="boleta"></div>
    <div class="cont_btn">
    <button class="btn_editar">Editar</button>
     <button class="btn_eliminar">Eliminar</button>
    </div>
  </div>
</div>


<?php include_once "footer.php"; ?>
<script type="application/javascript" src="../public/js/main.js" async></script>

<script>
 document.addEventListener('DOMContentLoaded', function () {
    const showModalButtons = document.querySelectorAll('.show-modal');
    const modal = document.getElementById('modal');
    const overlay = document.getElementById('overlay');
    const closeBtn = document.getElementById('close-btn');
    const modalContent = document.getElementById('modal-content');

    showModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');

            const rowData = document.querySelector(`.show-modal[data-id="${id}"]`).innerHTML;
            modalContent.innerHTML = formatDataForReceipt(rowData);

            modal.style.display = 'block';
            overlay.style.display = 'block';

            // Muestra lentamente el modal y la overlay ajustando la opacidad
            setTimeout(() => {
                modal.style.opacity = '1';
                overlay.style.opacity = '1';
            }, 50); // Retraso pequeño para permitir que se apliquen las propiedades de visualización antes de la transición
        });
    });

    closeBtn.addEventListener('click', () => {
        // Oculta lentamente el modal y la overlay ajustando la opacidad
        modal.style.opacity = '0';
        overlay.style.opacity = '0';
        setTimeout(() => {
            modal.style.display = 'none';
            overlay.style.display = 'none';
        }, 500); // La duración de la transición es de 0.5 segundos
    });

    overlay.addEventListener('click', () => {
        // Oculta lentamente el modal y la overlay ajustando la opacidad
        modal.style.opacity = '0';
        overlay.style.opacity = '0';
        setTimeout(() => {
            modal.style.display = 'none';
            overlay.style.display = 'none';
        }, 500); // La duración de la transición es de 0.5 segundos
    });

    function formatDataForReceipt(rowData) {
        const data = rowData.split('</td>');

        const formattedData = data.map(item => {
            return item.replace('<td>', '').trim();
        });

        const receiptHTML = `
            <div class="receipt">
                <p class="subtitulo"><strong>Producto:</strong> <p class="subtitul_cont">${formattedData[0]}</p></p>
                <p class="subtitulo"><strong>Nombre:</strong> <p class="subtitul_cont">${formattedData[1]}</p></p>
                <p class="subtitulo"><strong>Email:</strong> <p class="subtitul_cont" id="email">${formattedData[2]}</p></p>
                <p class="subtitulo"><strong>Teléfono:</strong> <p class="subtitul_cont">${formattedData[3]}</p></p>
                <p class="subtitulo"><strong>Cantidad:</strong> <p class="subtitul_cont">${formattedData[4]}</p></p>
                <p class="subtitulo"><strong>Mensaje:</strong> <p class="subtitul_cont">${formattedData[5]}</p></p>
                <p class="subtitulo"><strong>Fecha de Cotización:</strong> <p class="subtitul_cont">${formattedData[6]}</p></p>
            </div>
        `;

        return receiptHTML;
    }
});

</script>

</body>
</html>
