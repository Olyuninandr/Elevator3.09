<?php
require_once('includes/header.php');
?>

<br>

<div class="container">
    <form action="main.php" method="POST">

        <div class="row justify-content-center">
            <label for="floor">На якому ми поверсі? </label>
            <input type="number" id="floor" name="floor" min="1" max="163">
        </div>

        <br>
        <div class="row justify-content-center">
            <label for="building">Скільки поверхів в будинку? </label>
            <input class="" type="number" id="building" name="building" max="163" min="1">
        </div>

        <br>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg">Викликати ліфт</button>
        </div>
    </form>
</div>
