<?php
require_once('includes/header.php');
require_once('class/Elevator.php');

if (isset($_GET)):

    $myFloor = $_GET['myFloor'];
    $floor = $_GET['floor'];
    $building = $_GET['building'];

    $elevator = new Elevator();
    $resultMessage = $elevator->getResultMessage($myFloor, $floor, $building);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <h1>
                <br><?= $resultMessage; ?>
            </h1>
        </div>
        <div class="row justify-content-center">
            <h3>
                <a href="/Elevator3.09/index.php">Повернутися</a>
            </h3>
        </div>
    </div>

<?php endif; ?>

