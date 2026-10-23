<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="flex flex-col p-20">
    <h1 class="p-2 text-center text-2xl">DELETE</h1>

    <form action="" method="GET" class="flex flex-col items-center bg-gray-100">
        <div class="flex flex-col p-10">
            <label for="room_id">Room ID</label>
            <input type="text" id="room_id" name="room_id" required class="bg-white">
        </div>

        <button type="submit" name="submit" value="submit" class="p-4">Buscar</button>
    </form>

    <?php
        if (isset($_GET['submit'])) {
            include __DIR__ . '/form_room_delete_confirm.php';
        }
    ?>
</section>

<?php include __DIR__ . '/../templates/footer.php'; ?>