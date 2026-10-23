<?php
    if (isset($_GET['submit'])) {
         echo $_GET['hotel_id'];
         echo $_GET['room_id'];
         echo $_GET['room_type'];
         echo $_GET['price'];   
    }
?>

<?php include __DIR__ . '/../templates/header.php'; ?>
    <section class="flex flex-col p-20 ">
        <h1 class="p-2 text-center text-2xl">INSERT</h1>
        <form action="/student008/hotel/db_files/db_room_insert.php" class="flex flex-col items-center bg-gray-100" method="GET" >
            <div class="flex flex-col p-10 rounded">
                <label for="">Hotel ID</label>
                <input type="text" id="hotel_id" name="hotel_id" required class="bg-white">
            </div>
            <div class="flex flex-col p-10 rounded">
                <label for="">Room ID</label>
                <input type="text" id="room_id" name="room_id" required class="bg-white">
            </div>

            <div class="flex flex-col p-10 rounded">
                <select name="room_type" id="" required>
                    <option value="room">Room</option>
                    <option value="bungalow">Bungalow</option>
                    <option value="villa">Villa</option>
                </select>
            </div>
            <div class="flex flex-col p-10 rounded">
                <label for="">Price</label>
                <input type="number" id="price" name="price" required class="bg-white">
            </div>

            <button type="submit" name="submit" value="submit" class="p-4 ">Añadir habitacion</button>
        </form> 
    </section>

<?php include __DIR__ . '/../templates/footer.php'; ?>