<?php
    include __DIR__ . '/../templates/header.php';
    echo '<section class="flex flex-col">';
    if(isset($_SESSION['client_id'])){
        $room_id = $_GET['room_id'];
        $date_in = $_GET['date_in'];
        $date_out = $_GET['date_out'];
        $price = $_GET['price'];
        $client_id = $_SESSION['client_id'];

        include __DIR__ . '/../db_connection.php';

        $sql = "INSERT INTO `008reservations`(room_id, client_id, date_in, date_out, price_per_day, extras) VALUES ('$room_id', '$client_id', '$date_in', '$date_out', '$price', '0')";
        
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<p>Bien</p>';
        }
    }else{
        echo '<p>Inicia sesion antes de poder reservar</p>';
    }
    echo '<a href="/student008/hotel/form_files/form_room_avaliability.php" class="bg-black p-2 text-white">
        Volver
    </a>';
    echo '</section>'
    include __DIR__ . '/../templates/footer.php';
?>