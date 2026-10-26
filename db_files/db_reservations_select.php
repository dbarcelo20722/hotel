<?php

    include __DIR__ . '/../db_connection.php';

    $sql = "SELECT * FROM `008reservations`";

    $result = mysqli_query($conn, $sql);

    $hotel = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
?>
<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-row flex-wrap w-full">
    <?php foreach ($hotel as $room): ?>
        <div class="w-1/4 p-6">
            <p>Id reserva: <?php echo $room["reservation_id"] ?></p>
            <p>Id habitaion: <?php echo $room["room_id"] ?></p>
            <p>Id cliente: <?= $room["client_id"] ?></p>
            <p>Fecha de entrada: <?= $room["date_in"] ?></p>
            <p>Fecha de salida: <?= $room["date_out"] ?></p>
            <p>Precio por dia: <?= $room["price_per_day"] ?></p>
        </div>
    <?php endforeach; ?>
</section>

        
<?php include __DIR__ . '/../templates/footer.php'; ?>