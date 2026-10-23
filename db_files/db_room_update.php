<?php
    
    $room_id = $_GET['room_id'];
    $room_type = $_GET['room_type'] ?? '';
    $price = $_GET['price'] ?? '';

    if ($room_type == "" && $price == "") {
        echo "Debes introducir un tipo o un precio.<br>";
        echo '<a href="/student008/hotel/form_files/form_room_update.php">Volver</a>';
        exit;
    }

    include __DIR__ . '/../db_connection.php';

    if (!$conn) {
        echo 'Error de conexión: ' . mysqli_connect_error();
    }

    if($room_type != "" && $price !=""){
        $sql = "UPDATE `008rooms` SET `type` = '$room_type', price = '$price' WHERE room_id = '$room_id';";
    }elseif($room_type != "" && $price == ""){
        $sql = "UPDATE `008rooms` SET `type` = '$room_type' WHERE room_id = '$room_id';";
    }elseif($room_type == "" && $price != ""){
        $sql = "UPDATE `008rooms` SET price = '$price' WHERE room_id = '$room_id';";
    }else{
        $sql = "ERROR";
    }

    $result = mysqli_query($conn, $sql);
?>
<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-col">
    <?php if ($result): ?>
        <div>
            <p>Habitacion actualizada correctamente</p>
        </div>
    <?php else: ?>
        <div>
            <p>Error al actualizar la habitacion</p>
        </div>
    <?php endif; ?>
    <a href="/student008/hotel/form_files/form_room_update.php" class="bg-black p-2 text-white">
        Volver
    </a>
</section>
        
<?php include __DIR__ . '/../templates/footer.php'; ?>