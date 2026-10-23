<?php
    include __DIR__ . '/../db_connection.php';

    $client_id = $_GET['client_id'];

    $sql = "SELECT * FROM `008client` WHERE client_id = '$client_id'";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_assoc($result);
?>

<?php if ($client): ?>
    <div class="mt-6 bg-gray-100 p-6">
        <h2 class="text-xl font-bold">Datos del cliente</h2>
        <p>Nombre: <?= $client['first_name'] ?></p>
        <p>Apellidos: <?= $client['last_name'] ?></p>
        <p>Email: <?= $client['email'] ?></p>
        <p>Address: <?= $client['address'] ?></p>
        <p>Fecha de primer inicio de sesión: <?= $client['date_in'] ?></p>

        <form action="/student008/hotel/db_files/db_client_update.php" method="GET">
            <input type="hidden" name="client_id" value="<?= $client['client_id'] ?>">
            <div class="flex flex-col p-4">
                <label for="first_name">Nombre</label>
                <input type="text" id="first_name" name="first_name" placeholder="<?= $client['first_name'] ?>" class="bg-white">
            </div>
            <div class="flex flex-col p-4">
                <label for="last_name">Apellidos</label>
                <input type="text" id="last_name" name="last_name" placeholder="<?= $client['last_name'] ?>" class="bg-white">
            </div>
            <div class="flex flex-col p-4">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="<?= $client['email'] ?>" class="bg-white">
            </div>
            <div class="flex flex-col p-4">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="<?= $client['address'] ?>" class="bg-white">
            </div>
            <button type="submit" name="submit" value="submit" class="p-4">Modificar cliente</button>
        </form>
    </div>
<?php else: ?>
    <p class="mt-4">El cliente no existe.</p>
<?php endif; ?>
