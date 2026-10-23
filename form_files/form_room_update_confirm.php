<?php
    include __DIR__ . '/../db_connection.php';

    $room_id = $_GET['room_id'];

    $sql = "SELECT * FROM `008rooms` WHERE room_id = '$room_id'";
    $result = mysqli_query($conn, $sql);
    $room = mysqli_fetch_assoc($result);
?>
<?php if ($room): ?>
    <div class="mt-6 bg-gray-100 p-6">
        <h2 class="text-xl font-bold">Room Details</h2>
        <p>Tipo: <?= $room['type'] ?></p>
        <p>Precio: <?= $room['price'] ?> €</p>

        <form action="/student008/hotel/db_files/db_room_update.php" method="GET">
            <input type="hidden" name="room_id" value="<?= $room['room_id'] ?>">
            <div class="flex flex-col p-10 rounded">
                <p>Room type</p>
                <select name="room_type" id="" class="bg-white">
                    <option value=""></option>
                    <option value="room">Room</option>
                    <option value="bungalow">Bungalow</option>
                    <option value="villa">Villa</option>
                </select>
            </div>
            <div class="flex flex-col p-10 rounded">
                <label for="">Price</label>
                <input type="number" id="price" name="price" class="bg-white">
                
            </div>
            <button type="submit" name="submit" value="submit" class="p-4 ">Modificar habitacion</button>
        </form>
    </div>
<?php else: ?>
    <p class="mt-4">La habitación no existe.</p>
<?php endif; ?>