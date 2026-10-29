<?php

    include __DIR__ . '/../db_connection.php';

    $sql = "SELECT * FROM `008client`";

    $result = mysqli_query($conn, $sql);

    $hotel = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
?>
<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-row flex-wrap w-full">
    <?php foreach ($hotel as $client): ?>
        <div class="w-1/4 p-6">
            <p>Nombre: <?php echo $client["first_name"] ?></p>
            <p>Apellidos: <?php echo $client["last_name"] ?></p>
            <p>Email: <?= $client["email"] ?></p>
            <p>Address: <?= $client["address"] ?></p>
            <p>Fecha de primer inicio de sesion: <?= $client["date_in"] ?></p>
        </div>
    <?php endforeach; ?>
</section>

        
<?php include __DIR__ . '/../templates/footer.php'; ?>