<?php
    if (isset($_GET['submit'])) {
         echo $_GET['date_in'];
         echo $_GET['date_out'];   
    }
?>
        
<?php include __DIR__ . '/../templates/header.php'; ?>
    <section class="flex flex-col p-20 ">
       <form action="/student008/hotel/db_files/db_room_avaliability.php" class="flex flex-col items-center bg-gray-100" method="GET" >
            <div class="flex flex-col p-10 rounded">
                <label for="">Check-in</label>
                <input type="date" id="date_in" name="date_in" required class="">
            </div>

            <div class="flex flex-col p-10 rounded">
                <label for="">Check-out</label>
                <input type="date" id="date_out" name="date_out" required class="">
            </div>

            <button type="submit" name="submit" value="submit" class="bg-gray-550 px-4 py-2 rounded hover:bg-gray-650"> Consultar disponibilidad</button>
        </form> 
    </section>
        
<?php include __DIR__ . '/../templates/footer.php'; ?>