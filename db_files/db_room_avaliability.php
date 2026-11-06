<?php
    $date_in = $_GET['date_in'];
    $date_out = $_GET['date_out'];
    setcookie("date_in", $_GET['date_in'], time() + 86400, "/student008/hotel");
    setcookie("date_out", $_GET['date_out'], time() + 86400, "/student008/hotel");

    include __DIR__ . '/../db_connection.php';

    $sql = "SELECT room_id, price FROM `008rooms` WHERE room_id NOT IN ( SELECT room_id FROM `008reservations` WHERE date_in < '$date_out' AND date_out > '$date_in' );";

    $result = mysqli_query($conn, $sql);

    $hotel = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
?>
<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-row flex-wrap w-full">
    <?php foreach ($hotel as $room): ?>
    <form action="/student008/hotel/db_files/db_reservation_add.php" class="w-1/4 p-6" method="GET">

        <img src="/student008/hotel/imgs/room.png" alt="room">
        <p>Habitación: <?= $room["room_id"] ?></p>
        <p>Precio: <?= $room["price"] ?> €</p>
        <input type="hidden" name="room_id" value="<?= $room['room_id'] ?>">
        <input type="hidden" name="price" value="<?= $room['price'] ?>">
        <input type="hidden" name="date_in" value="<?= $date_in ?>">
        <input type="hidden" name="date_out" value="<?= $date_out ?>">

        <button type="submit">Reservar</button>
    </form>
<?php endforeach; ?>
</section>

        
<?php include __DIR__ . '/../templates/footer.php'; ?>