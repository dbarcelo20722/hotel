<?php
    $client_id = $_GET['client_id'];
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    include __DIR__ . '/../db_connection.php';

    $sql = "INSERT INTO `008client` (client_id, first_name, last_name, email, address, date_in) VALUES ('$client_id', '$first_name', '$last_name', '$email', '$address', CURDATE())";
    $result = mysqli_query($conn, $sql);
?>

<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-col">
    <?php if ($result): ?>
        <div>
            <p>Cliente añadido correctamente.</p>
        </div>
    <?php else: ?>
        <div>
            <p>Error al añadir el cliente.</p>
        </div>
    <?php endif; ?>
    <a href="/student008/hotel/form_files/form_client_insert.php" class="bg-black p-2 text-white">
        Volver
    </a>
</section>

<?php include __DIR__ . '/../templates/footer.php'; ?>
