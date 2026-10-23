<?php
    $date_in = $_GET['date_in'];
    $date_out = $_GET['date_out'];

    include __DIR__ . '/../db_connection.php';

    $sql = "SELECT room_id, price FROM `008rooms` WHERE room_id NOT IN ( SELECT room_id FROM `008reservations` WHERE date_in < '$date_out' AND date_out > '$date_in' );";

    $result = mysqli_query($conn, $sql);

    $hotel = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
?>
<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-row flex-wrap w-full">
    <?php foreach ($hotel as $room): ?>
        <div class="w-1/4 p-6">
            <img src="/student008/hotel/imgs/room.png" alt="room">
            <p>Habitación: <?php echo $room["room_id"] ?></p>
            <p>Precio: <?= $room["price"] ?> €</p>
            <button>Reservar</button>
        </div>
    <?php endforeach; ?>
</section>

        
<?php include __DIR__ . '/../templates/footer.php'; ?>