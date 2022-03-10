<?php
$server = "127.0.0.1";
$username = "joshrs23";
$password = "*23Js1990";
$database = "npa_slb";

$con = new mysqli($server, $username, $password,$database);
if(mysqli_connect_error())
{
die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

$sql1 = "SELECT * FROM joyas";

$ejecutar_sql1=mysqli_query($con,$sql1);

if (mysqli_num_rows($ejecutar_sql1) > 0){
 $rawdata = array(); 
while($row = mysqli_fetch_array($ejecutar_sql1))
    {
        
        echo "INSERT INTO `joyas`(`id`, `tipo`, `referencia`, `descripcion`, `imagen`, `precio`, `vendido`, `accion`) VALUES ('".$row["id"]."','".$row["tipo"]."','".$row["referencia"]."','".$row["descripcion"]."','".$row["imagen"]."','".$row["precio"]."','".$row["vendido"]."','".$row["accion"]."');";
    }
}
$con->close();
?>