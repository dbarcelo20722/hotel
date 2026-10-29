<?php

    include __DIR__ . '/../db_connection.php';

    $sql = "SELECT * FROM `008reservations`";

    $result = mysqli_query($conn, $sql);

    $hotel = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
?>
<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-row flex-wrap w-full">
    <?php foreach ($hotel as $reservation): ?>
        <div class="w-1/4 p-6">
            <p>Id reserva: <?php echo $reservation["reservation_id"] ?></p>
            <p>Id habitaion: <?php echo $reservation["room_id"] ?></p>
            <p>Id cliente: <?= $reservation["client_id"] ?></p>
            <p>Fecha de entrada: <?= $reservation["date_in"] ?></p>
            <p>Fecha de salida: <?= $reservation["date_out"] ?></p>
            <p>Precio por dia: <?= $reservation["price_per_day"] ?></p>
        </div>
    <?php endforeach; ?>
</section>

        
<?php include __DIR__ . '/../templates/footer.php'; ?>