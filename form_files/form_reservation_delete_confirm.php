<?php
    include __DIR__ . '/../db_connection.php';

    $reservation_id = $_GET['reservation_id'];

    $sql = "SELECT * FROM `008reservations` WHERE reservation_id = '$reservation_id'";
    $result = mysqli_query($conn, $sql);
    $reservation = mysqli_fetch_assoc($result);
?>

<?php if ($reservation): ?>
    <div class="mt-6 bg-gray-100 p-6">
        <h2 class="text-xl font-bold">Confirmar eliminación</h2>

            <p>Id reserva: <?php echo $reservation["reservation_id"] ?></p>
            <p>Id habitaion: <?php echo $reservation["room_id"] ?></p>
            <p>Id cliente: <?= $reservation["client_id"] ?></p>
            <p>Fecha de entrada: <?= $reservation["date_in"] ?></p>
            <p>Fecha de salida: <?= $reservation["date_out"] ?></p>
            <p>Precio por dia: <?= $reservation["price_per_day"] ?></p>

        <form action="/student008/hotel/db_files/db_reservation_delete.php" method="GET">
            <input type="hidden" name="reservation_id" value="<?= $reservation['reservation_id'] ?>">
            <button type="submit" name="submit" value="submit" class="mt-4 bg-red-600 p-3 text-white">
                Confirmar eliminación
            </button>
        </form>
    </div>
<?php else: ?>
    <p class="mt-4">La reserva no existe.</p>
<?php endif; ?>
