<?php
    $room_id = $_GET['room_id'];

    include __DIR__ . '/../db_connection.php';

    $sql = "SELECT * FROM `008reservations` WHERE room_id = '$room_id'";
    $result = mysqli_query($conn, $sql);
?>

<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-col">
    <?php if (mysqli_num_rows($result) > 0): ?>

        <p>No se puede eliminar la habitación porque tiene reservas.</p>

    <?php else: ?>

        <?php
            $sql = "DELETE FROM `008rooms` WHERE room_id = '$room_id'";
            $result = mysqli_query($conn, $sql);
        ?>

        <?php if ($result && mysqli_affected_rows($conn) > 0): ?>
            <p>Habitación eliminada correctamente.</p>
        <?php else: ?>
            <p>Error al eliminar la habitación.</p>
        <?php endif; ?>

    <?php endif; ?>

    <a href="/student008/hotel/form_files/form_room_delete.php" class="bg-black p-2 text-white"> Volver </a>
</section>

<?php include __DIR__ . '/../templates/footer.php'; ?>