<?php
include_once 'MovablePoint.php';

$movablePoint = new MovablePoint(4, 8, 20, 15);
$movablePoint->setSpeed(45, 65);
?>Before Move <br><?php
echo 'X position: '.$movablePoint->getX().' ';
echo 'Y position: '.$movablePoint->getY().'<br><br>';
?>After Move <br><?php
$movablePoint->move();
echo 'X position: '.$movablePoint->getX().' ';
echo 'Y position: '.$movablePoint->getY().'<br><br>';
?> With Speed <br><?php
foreach ($movablePoint->getSpeed() as $value):
    echo $value . ' ';endforeach;