<?php 
    $email = $_GET['email'];
    $psw = $_GET['psw'];

    include __DIR__ . '/../db_connection.php';
    $sql = "SELECT client_id, psw, first_name FROM`008client` WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    $hotel = mysqli_fetch_assoc($result);

    mysqli_close($conn);
    include __DIR__ . '/../templates/header.php'; 

    if($psw === $hotel['psw']){
        
        $_SESSION["client_id"] = $hotel['client_id'];
        $_SESSION["first_name"] = $hotel['first_name'];
        echo '<h1>LogIn completado con exito</h1>';
    }else{
        echo '<h1>El email o contraseña estan mal</h1>';
    }

    include __DIR__ . '/../templates/footer.php'; 
?>