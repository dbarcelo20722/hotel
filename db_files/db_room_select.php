<?php

    include __DIR__ . '/../db_connection.php';

    $sql = "SELECT * FROM `008rooms`";

    $result = mysqli_query($conn, $sql);

    $hotel = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
?>
<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-row flex-wrap w-full">
    <?php foreach ($hotel as $room): ?>
        <div class="w-1/4 p-6">
            <img src="/student008/hotel/imgs/room.png" alt="room">
            <p>Hotel: <?php echo $room["hotel_id"] ?></p>
            <p>Habitación: <?php echo $room["room_id"] ?></p>
            <p>Tipo: <?= $room["type"] ?></p>
            <p>Precio: <?= $room["price"] ?> €</p>
            
        </div>
    <?php endforeach; ?>
</section>

        
<?php include __DIR__ . '/../templates/footer.php'; ?>