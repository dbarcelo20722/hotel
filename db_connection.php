<?php 
// remotehost.es
// $conn = mysqli_connect('remotehost.es', 'dwesuser1234', 'DWES20261014ftp33!', 'dweshoteldb');
// localhost
$conn = mysqli_connect('localhost', 'dwesuser1234', 'DWES20261014ftp33!', 'dweshoteldb', 3307); 
if (!$conn) {
    echo 'Error de conexión: ' . mysqli_connect_error();
}
?>