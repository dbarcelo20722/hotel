<?php
    $hotel_id = $_GET['hotel_id'];
    $room_id = $_GET['room_id'];
    $room_type = $_GET['room_type'];
    $price = $_GET['price'];

    include __DIR__ . '/../db_connection.php';

    if (!$conn) {
        echo 'Error de conexión: ' . mysqli_connect_error();
    }

    $sql = "INSERT INTO `008rooms` (hotel_id, room_id, `type`, price) VALUES ('$hotel_id', '$room_id', '$room_type', '$price') ";

    $result = mysqli_query($conn, $sql);
?>
<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-col">
    <?php if ($result): ?>
        <div>
            <p>Habitacion añadida correctamente</p>
        </div>
    <?php else: ?>
        <div>
            <p>Error al añadir la habitacion</p>
        </div>
    <?php endif; ?>
    <a href="/student008/hotel/form_files/form_room_insert.php" class="bg-black p-2 text-white">
        Volver
    </a>
</section>
        
<?php include __DIR__ . '/../templates/footer.php'; ?>