<?php
require_once"model/Mes.php";
$Mes = new Mes($_POST["numero"],$_POST["anio"]);
require_once"view/vresultado.php";
?>