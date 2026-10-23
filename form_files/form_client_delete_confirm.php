<?php
    include __DIR__ . '/../db_connection.php';

    $client_id = $_GET['client_id'];

    $sql = "SELECT * FROM `008client` WHERE client_id = '$client_id'";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_assoc($result);
?>

<?php if ($client): ?>
    <div class="mt-6 bg-gray-100 p-6">
        <h2 class="text-xl font-bold">Confirmar eliminación</h2>

        <p>Client ID: <?= $client['client_id'] ?></p>
        <p>Nombre: <?= $client['first_name'] ?></p>
        <p>Apellidos: <?= $client['last_name'] ?></p>
        <p>Email: <?= $client['email'] ?></p>
        <p>Address: <?= $client['address'] ?></p>
        <p>Fecha de primer inicio de sesión: <?= $client['date_in'] ?></p>

        <form action="/student008/hotel/db_files/db_client_delete.php" method="GET">
            <input type="hidden" name="client_id" value="<?= $client['client_id'] ?>">
            <button type="submit" name="submit" value="submit"
                    class="mt-4 bg-red-600 p-3 text-white">
                Confirmar eliminación
            </button>
        </form>
    </div>
<?php else: ?>
    <p class="mt-4">El cliente no existe.</p>
<?php endif; ?>
