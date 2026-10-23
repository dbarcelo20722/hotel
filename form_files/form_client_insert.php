<?php
    if (isset($_GET['submit'])) {
        echo $_GET['client_id'];
        echo $_GET['first_name'];
        echo $_GET['last_name'];
        echo $_GET['email'];
        echo $_GET['address'];
    }
?>

<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-col p-20">
    <h1 class="p-2 text-center text-2xl">INSERT CLIENTE</h1>

    <form action="/student008/hotel/db_files/db_client_insert.php" class="flex flex-col items-center bg-gray-100" method="GET">
        <div class="flex flex-col p-10 rounded">
            <label for="client_id">Client ID</label>
            <input type="text" id="client_id" name="client_id" required class="bg-white">
        </div>
        <div class="flex flex-col p-10 rounded">
            <label for="first_name">Nombre</label>
            <input type="text" id="first_name" name="first_name" required class="bg-white">
        </div>
        <div class="flex flex-col p-10 rounded">
            <label for="last_name">Apellidos</label>
            <input type="text" id="last_name" name="last_name" required class="bg-white">
        </div>
        <div class="flex flex-col p-10 rounded">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required class="bg-white">
        </div>
        <div class="flex flex-col p-10 rounded">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required class="bg-white">
        </div>
        <button type="submit" name="submit" value="submit" class="p-4">Añadir cliente</button>
    </form>
</section>

<?php include __DIR__ . '/../templates/footer.php'; ?>
