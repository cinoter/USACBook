<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>UsacBook</title>
        <link href="style/style.css" rel="stylesheet" type="text/css" /> 
    </head>
    <body>
        <!--    PHP PARA EL LOGIN        -->
        
        <?php 
session_start(); 
include_once "conexion.php"; 
  
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'"; 
    $rec = mysql_query($sql); 
    $count = 0; 
  
    while($row = mysql_fetch_object($rec)) 
    { 
        $count++; 
        $result = $row; 
    } 
  
    if($count == 1) 
    { 
        return 1; 
    } 
  
    else 
    { 
        return 0; 
    } 
} 
  
if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuario; 
            header("location:index.php"); 
        } 
        else 
        { 
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
        } 
    } 
?> 
        
</style> 
        <!--         FORM DE LOS COMPONENTES DEL LOGIN         -->
    <form action="" method="post" class="login"> 
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
     <div><input name="login" type="submit" value="login"></div> 
     <a  href="http:registro.php"style="text-decoration:none; color: black"> Registrarse</a>
</form> 
<?php
} else { 
    echo 'Su usuario ingreso correctamente.'; 
    echo '<a href="logout.php">Logout</a>'; 
} 
?>
    </body>
</html>
