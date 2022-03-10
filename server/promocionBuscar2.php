<?php
$server = "localhost";
$username = "id208778_siemprelindasbisuteria";
$password = "23js1990";
$database = "id208778_joyas";


$con = new mysqli($server, $username, $password,$database);
if(mysqli_connect_error())
{
die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

$tipo = mysqli_real_escape_string($con,$_POST["tipo"]);
$posicion = (int)mysqli_real_escape_string($con,$_POST["posicion"]);
$cantidad = (int)mysqli_real_escape_string($con,$_POST["cantidad"]);

/*$tipo = "COLLAR";
$posicion = 2;
$cantidad = 51;*/

$lI = 0;
$lS = 48;
$suma = 0;

if($posicion>1){
$lI = 48*($posicion-1);
$suma = $lI+48;
	if(($cantidad-1)-$suma>=0){
		//$lS = $suma;//normal 48
		$lS = 48;
	}
	else{
		$lS = (($cantidad)-$suma)+48;//ultima
	}
}
$sql1 = "SELECT * FROM promociones Where vendido='$tipo'ORDER BY referencia DESC LIMIT $lI, $lS";

$ejecutar_sql1=mysqli_query($con,$sql1);

if (mysqli_num_rows($ejecutar_sql1) > 0){

 $rawdata = array(); 
$i=0;
while($row = mysqli_fetch_array($ejecutar_sql1))
    {
        $rawdata[$i] = $row;
        
        $i++;
    }

     
     echo json_encode($rawdata);

 
}
$con->close();
?>