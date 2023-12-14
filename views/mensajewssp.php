<?php
//obtener los datos del post
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$producto = $_POST['producto'];
//procesar numero
$telefono = str_replace(" ", "", $telefono);
//agregarle el +51 al inicio
$telefono = "+51".$telefono;
//crear el mensaje
$mensajealusuario = "Hola ".$nombre.", aqui tienes la información que solicitaste, para el producto: ".$producto;
//switch para determinar el link segun el producto
$linkimagen = "";
switch ($producto) {
    case 'SBotellas 1_1':
        $linkimagen="https://i.ibb.co/4szkT7x/f9b36728-917b-4c60-a50f-ee2e0a73c92f.jpg";
        break;
    case 'Máquina de embalaje':
        $linkimagen="https://i.ibb.co/qMP435v/Flyer-M-quina-de-embalaje.webp";
        break;
    case 'Sellador de vasos':
        $linkimagen="https://i.ibb.co/XLTz0vb/Flyer-Selladora-de-vasos.webp";
        break;
    case 'Selladora de bolsas':
        $linkimagen="https://i.ibb.co/VHyrXQQ/Flyer-Sellador-de-Bolsas.webp";
        break;
    case 'Soldadora LINGBA 5':
        $linkimagen="https://i.ibb.co/dWZHL7J/Flyer-Soldadora-Lingba.webp";
        break;
    case 'Soldadora SPARK 3':
        $linkimagen="https://i.ibb.co/g4LX9ZF/Flyer-Soldadora-Spark.webp";
        break;
    case 'Panel de Fibra de Bambo':
        $linkimagen="https://i.ibb.co/vHsdwh5/Flyer-Bamboo-Fiber-Wallboard.webp";
        break;
    case 'Ventilador Holográfico':
        $linkimagen="https://i.ibb.co/44S7Xv7/Flyer-Ventilador-Hologr-fico.webp";
        break;
    case 'WPC FENCEPANEL':
        $linkimagen="https://i.ibb.co/84HZqz1/Flyer-WPC-Fence-Panel.webp";
        break;
    case 'WPC WALLPANEL':
        $linkimagen="https://i.ibb.co/hWZmvpk/Flyer-WPC-Wall-Panel.webp";
        break;
    default:
        $linkimagen="https://file-example.s3-accelerate.amazonaws.com/images/test.jpg";
        break;
}

//enviar el mensaje

$params=array(
    'token' => 'xi88070gbr4hef1b',
    'to' => $telefono,
    'image' => $linkimagen,
    'caption' => $mensajealusuario,
    );
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.ultramsg.com/instance67334/messages/image",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => http_build_query($params),
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
?>