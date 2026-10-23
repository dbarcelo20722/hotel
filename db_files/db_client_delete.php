<?php
    $client_id = $_GET['client_id'];

    include __DIR__ . '/../db_connection.php';

    $sql = "SELECT * FROM `008reservations` WHERE client_id = '$client_id'";
    $result = mysqli_query($conn, $sql);
?>

<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-col">
    <?php if (mysqli_num_rows($result) > 0): ?>

        <p>No se puede eliminar el cliente porque tiene reservas.</p>

    <?php else: ?>

        <?php
            $sql = "DELETE FROM `008client` WHERE client_id = '$client_id'";
            $result = mysqli_query($conn, $sql);
        ?>

        <?php if ($result && mysqli_affected_rows($conn) > 0): ?>
            <p>Cliente eliminado correctamente.</p>
        <?php else: ?>
            <p>Error al eliminar el cliente.</p>
        <?php endif; ?>

    <?php endif; ?>

    <a href="/student008/hotel/form_files/form_client_delete.php" class="bg-black p-2 text-white"> Volver </a>
</section>

<?php include __DIR__ . '/../templates/footer.php'; ?>
