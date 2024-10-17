<?php 

$users = [
    'noel' => password_hash('pd123', PASSWORD_DEFAULT),
    'dario' => password_hash ('my5678', PASSWORD_DEFAULT),
    'admin' => password_hash('adminpass', PASSWORD_DEFAULT),
   ];

$users = array_change_key_case($users, CASE_LOWER);//hacemos minusculas todas las claves del array

   if($_SERVER['REQUEST_METHOD']==='POST'){
        
     $username = strtolower($_POST['username']);// hacemos minusculas el username introducido por teclado, junto con lo anterior , garantizamos el reconocimiento del user indistintamente del uso de M
     $password=$_POST['password'];

     //Comparar para ver si existen
     //$existeUsuario=array_key_exists($username, $users);// funcion de busqueda de clave dentro de un array(primera la variable que compara, despues el array donde busca)
     
     //$contraseñaIntroducida=password_hash($password, PASSWORD_DEFAULT);


// Obtener el hash correspondiente al usuario 
$hash = $users[$username]; 

     if (password_verify($password, $hash)){
           echo '¡Contraseña válida!';
           } 
     else { echo 'Contraseña incorrecta.'; } 
   
          }

?>