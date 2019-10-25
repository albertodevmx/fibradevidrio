<?php error_reporting(E_ALL); ini_set('display_errors', 1); header('Access-Control-Allow-Origin:*');
require 'vendor/autoload.php';

$campos     = json_decode( $_POST['campos'], true );
$encabezado = json_decode( $_POST['encabezado'], true );

$subject                = $encabezado['subject']; 
$remitente_nombre       = $encabezado['remitente_nombre'];
$remitente_mail         = $encabezado['remitente_mail'];
$destinatario_nombre    = $encabezado['destinatario_nombre'];
$destinatario_mail      = $encabezado['destinatario_mail'];

    
// Armando el mensaje
$mensaje = "";

foreach ( $campos as $key => $item ) {
	if( $item != "" ) {
		$mensaje .= "<b>".ucfirst($key)."</b>: ".$item."<br>";
	}
}
 
    // echo "El mensaje";
    // echo $mensaje;
    // Armando el mensaje para envío
    
    $from = new \SendGrid\Email($remitente_nombre, $remitente_mail);
    
    
    $to = new \SendGrid\Email($destinatario_nombre, $destinatario_mail);
    
    $content = new \SendGrid\Content("text/html", $mensaje);
    
    $mail = new \SendGrid\Mail($from, $subject, $to, $content);
    
    $sg = new SendGrid('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');
    $response = $sg->client->mail()->send()->post($mail);
    echo $response->statusCode();

?>
