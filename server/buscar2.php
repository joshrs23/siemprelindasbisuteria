<?php
$server = "localhost";
// $username = "id208778_siemprelindasbisuteria";
// $password = "23js1990";
// $database = "id208778_joyas";
$username = "root";
$password = "";
$database = "joyas";

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
$suma = $lI+47;
	if(($cantidad-1)-$suma>=0){
		//$lS = $suma;
		$lS = 47;
	}
	else{
		$lS = (($cantidad-1)-$suma)+47;
	}
}
if($tipo === 'otros'){
	$sql1 = "SELECT * FROM joyas Where tipo!='ARETES'AND tipo!='COLLAR' AND tipo!='PULSERA' AND tipo!='ANILLO'ORDER BY accion DESC LIMIT $lI, $lS";
}
else{
	$sql1 = "SELECT * FROM joyas Where tipo='$tipo'ORDER BY accion DESC LIMIT $lI, $lS";
}
//$sql1 = "SELECT * FROM joyas Where tipo='$tipo'ORDER BY accion LIMIT $lI, $lS";

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