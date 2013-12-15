<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo '<p>HOLA COMUNIDAD USAC</p>';
        ?>
        <!-- CSS PARA EL FORM LOGIN     -->
        <style type="text/css"> 
*{ 
    font-size: 14px; 
} 
body{ 
background:#aaa; 
} 
form.login { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #DDDDDD; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 20px; 
    width: 278px; 
    box-shadow:0px 0px 20px black; 
    border-radius:10px; 
} 
form.login div { 
    margin-bottom: 15px; 
    overflow: hidden; 
} 
form.login div label { 
    display: block; 
    float: left; 
    line-height: 25px; 
} 
form.login div input[type="text"], form.login div input[type="password"] { 
    border: 1px solid #DCDCDC; 
    float: right; 
    padding: 4px; 
} 
form.login div input[type="submit"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid #C6C6C6; 
    float: right; 
    font-weight: bold; 
    padding: 4px 20px; 
} 
.error{ 
    color: red; 
    font-weight: bold; 
    margin: 10px; 
    text-align: center; 
} 
</style> 
        <!--         FORM DE LOS COMPONENTES DEL LOGIN         -->
    <form action="" method="post" class="login"> 
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
    <div><input name="login" type="submit" value="login"></div> 
</form> 
    </body>
</html>
