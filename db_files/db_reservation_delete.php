<?php
    $reservation_id = $_GET['reservation_id'];

    include __DIR__ . '/../db_connection.php';

    $sql = "SELECT * FROM `008reservations` WHERE reservation_id = '$reservation_id'";
    $result = mysqli_query($conn, $sql);
?>

<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-col">
    <?php
        $sql = "DELETE FROM `008reservations` WHERE reservation_id = '$reservation_id'";
        $result = mysqli_query($conn, $sql);
    ?>

    <?php if ($result && mysqli_affected_rows($conn) > 0): ?>
        <p>Reserva eliminada correctamente.</p>
    <?php else: ?>
        <p>Error al eliminar la reserva.</p>
    <?php endif; ?>

    <a href="/student008/hotel/form_files/form_reservation_delete.php" class="bg-black p-2 text-white"> Volver </a>
</section>

<?php include __DIR__ . '/../templates/footer.php'; ?>
