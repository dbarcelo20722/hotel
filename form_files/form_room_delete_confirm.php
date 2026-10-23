<?php
    include __DIR__ . '/../db_connection.php';

    $room_id = $_GET['room_id'];

    $sql = "SELECT * FROM `008rooms` WHERE room_id = '$room_id'";
    $result = mysqli_query($conn, $sql);
    $room = mysqli_fetch_assoc($result);
?>

<?php if ($room): ?>
    <div class="mt-6 bg-gray-100 p-6">
        <h2 class="text-xl font-bold">Confirmar eliminación</h2>

        <p>Room ID: <?= $room['room_id'] ?></p>
        <p>Hotel: <?= $room['hotel_id'] ?></p>
        <p>Tipo: <?= $room['type'] ?></p>
        <p>Precio: <?= $room['price'] ?> €</p>

        <form action="/student008/hotel/db_files/db_room_delete.php" method="GET">
            <input type="hidden" name="room_id" value="<?= $room['room_id'] ?>">
            <button type="submit" name="submit" value="submit"
                    class="mt-4 bg-red-600 p-3 text-white">
                Confirmar eliminación
            </button>
        </form>
    </div>
<?php else: ?>
    <p class="mt-4">La habitación no existe.</p>
<?php endif; ?>