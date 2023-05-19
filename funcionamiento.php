<?php
echo '<h1>Este es Tu Registro</h1>';
echo '<br>Nombre</br>';
    isset($_POST["nombre"]) ? print $_POST["nombre"] :"";
echo '<br>apellido</br>';
    isset($_POST["apellido"]) ? print $_POST["apellido"] : "";
echo '<br>email</br>';
    isset($_POST["email"]) ? print $_POST["email"] : "";
echo '<br>nivele</br>';
    isset($_POST["nivele"]) ? print $_POST["nivele"] : "";
echo '<br>ingles</br>';
    $_idioma=isset($_POST["ingles"]) ? print $_POST["ingles"] : "";
echo '<br>lenguaje</br>';
    $_lenguaje= isset($_POST["lenguaje"]) ? count($_POST["lenguaje"]) : "";
    // echo $_lenguaje

if ($_lenguaje >1){
    if (($_lenguaje<=2) && ($_idioma==1) || ($_idioma==2) || ($_idioma==3))
    header("location:basico.php");
}





?>