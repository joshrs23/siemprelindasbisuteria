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

$catalogo = mysqli_real_escape_string($con,$_POST["catalogo"]);

$sql1 = "SELECT * FROM joyas Where accion='$catalogo'ORDER BY referencia";
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