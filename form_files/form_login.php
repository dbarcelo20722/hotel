<?php include __DIR__ . '/../templates/header.php'?>

<section class="flex flex-col p-20">
    <h1 class="p-2 text-center text-2xl">LOGIN</h1>
    <form action="/student008/hotel/db_files/db_login.php" class="flex flex-col items-center bg-gray-100" method="GET">
        <div class="flex flex-col p-10 rounded">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required class="bg-white">
        </div>
        <div class="flex flex-col p-10 rounded">
            <label for="psw">Password</label>
            <input type="text" id="psw" name="psw" required class="bg-white">
        </div>
        <button type="submit" name="submit" value="submit" class="p-4">Login</button>
    </form>
</section>

<?php include __DIR__ . '/../templates/footer.php'?>