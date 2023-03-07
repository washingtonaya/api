<?php
header('Content-Type: application/json');

$dni=$_GET['dni'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://zonasegura.onp.gob.pe/ONP.PortalONP.Web/tap/recurso_apelacion_datos_reniec?dni='.$dni,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Cookie: ASP.NET_SessionId=iwos5gd5f1vuszgrahxwj5dw; BIGipServerpool-zonasegura-cdn-portal-https=2987135404.47873.0000; _gid=GA1.3.328185750.1678123444; _ga_VWGDV02EH3=GS1.1.1678132977.1.1.1678133184.0.0.0; _ga=GA1.3.107978513.1674440984',
    'Content-Type: application/json',
   'Content-Length: 0',
  ),
));

$response = curl_exec($curl);
print_r($response);
curl_close($curl);


?>
