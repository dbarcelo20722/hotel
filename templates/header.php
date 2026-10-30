<?php

    session_start();

    if(isset($_GET['logout'])){
        unset($_SESSION['client_id']);
        unset($_SESSION['first_name']);
        header("Location: " . $_SERVER['PHP_SELF']);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <link rel="stylesheet" href="/student008/hotel/styles/salida.css">
</head>
<body>
    <header class="flex items-center justify-between bg-gray-200 p-4">
        <h1 class="text-xl font-bold pl-10">
            Hotel Boutique
        </h1>

        <nav class="flex gap-4">
            <a href="/student008/hotel/index.php">Inicio</a>
            <a href="/student008/hotel/db_files/db_room_select.php">Habitaciones</a>
            <a href="/student008/hotel/form_files/form_login.php">Log In</a>
            <form method="GET">
                <button name="logout" value="logout">Log Out</button>
            </form>
            <?php 
                if(isset($_SESSION['first_name'])){
                    echo "<p>Hola " . $_SESSION['first_name'] . "</p>";
                } 
            ?>
        </nav>

        <a href="/student008/hotel/form_files/form_room_avaliability.php" class="bg-black p-2 text-white">
            Reservar
        </a>
    </header>
    