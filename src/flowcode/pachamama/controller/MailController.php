<?php

require_once '../service/MailService.php';

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$pais = (isset($_POST['pais'])) ? $_POST['pais'] : "";
$email = (isset($_POST['mail'])) ? $_POST['mail'] : "";
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "";
$consulta = (isset($_POST['consulta'])) ? $_POST['consulta'] : "";

/* config */
$to = "";
$templatePath = __DIR__ . '/../view/example.view.php';

/* prepare mail */
$params["nombre"] = $nombre;
$params["pais"] = $pais;
$params["telefono"] = $telefono;
$params["consulta"] = $consulta;

/* send mail */
$mailSrv = new MailService();
if ($mailSrv->sendHtmlMail($to, "Consulta", $params, $templatePath)) {
    $msg = "success";
} else {
    $msg = "error";
}

/* return value */
echo $msg;

