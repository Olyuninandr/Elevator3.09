<?php
require_once('includes/header.php');
require_once('class/Elevator.php');

$myFloor = $_POST['floor'];
$building = $_POST['building'];

$errorMessage = Elevator::validate($myFloor, $building);

if($errorMessage):
?>

<br>
    <div class="container">
        <div class="row justify-content-center">
            <h1>
                <?= $errorMessage; ?>
            </h1>
        </div>
        <div class="row justify-content-center">
            <h3>
                <a href="index.php">Повернутися</a>
            </h3>
        </div>
    </div>

<?php else: ?>

<br>
<div class="container col-3">
    <div class="row justify-content-center">
        <h3>
            Куди їдемо?
        </h3>
    </div>

    <ul class="list-group">
        <?php for ($i = 1; $i <= $building; $i++): ?>
            <li class="list-group-item">
                <a href="result.php/?floor=<?= $i; ?>&myFloor=<?= $myFloor ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>

        <li class="list-group-item list-group-item-danger">
            <a href="result.php/?floor=stop&building=<?= $building ?>">STOP</a>
        </li>
        <li class="list-group-item list-group-item-warning">
            <a href="result.php/?floor=tech">Викликати технічну службу</a>
        </li>
    </ul>
</div>

<?php endif; ?>

