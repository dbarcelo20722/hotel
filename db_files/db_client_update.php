<?php
    $client_id = $_GET['client_id'];
    $first_name = $_GET['first_name'] ?? '';
    $last_name = $_GET['last_name'] ?? '';
    $email = $_GET['email'] ?? '';
    $address = $_GET['address'] ?? '';

    include __DIR__ . '/../db_connection.php';

    $updates = [];

    if ($first_name != '') {
        $first_name = mysqli_real_escape_string($conn, $first_name);
        $updates[] = "first_name = '$first_name'";
    }
    if ($last_name != '') {
        $last_name = mysqli_real_escape_string($conn, $last_name);
        $updates[] = "last_name = '$last_name'";
    }
    if ($email != '') {
        $email = mysqli_real_escape_string($conn, $email);
        $updates[] = "email = '$email'";
    }
    if ($address != '') {
        $address = mysqli_real_escape_string($conn, $address);
        $updates[] = "address = '$address'";
    }

    if (count($updates) == 0) {
        echo "Debes introducir al menos un dato.<br>";
        echo '<a href="/student008/hotel/form_files/form_client_update.php">Volver</a>';
        exit;
    }

    $client_id = mysqli_real_escape_string($conn, $client_id);
    $sql = "UPDATE `008client` SET " . implode(', ', $updates) . " WHERE client_id = '$client_id'";
    $result = mysqli_query($conn, $sql);
?>

<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-col">
    <?php if ($result): ?>
        <div>
            <p>Cliente actualizado correctamente.</p>
        </div>
    <?php else: ?>
        <div>
            <p>Error al actualizar el cliente.</p>
        </div>
    <?php endif; ?>
    <a href="/student008/hotel/form_files/form_client_update.php" class="bg-black p-2 text-white">
        Volver
    </a>
</section>

<?php include __DIR__ . '/../templates/footer.php'; ?>
