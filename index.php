<?php
include_once 'MovablePoint.php';

$movablePoint = new MovablePoint(20,25);
echo 'Before Move <br>';
echo $movablePoint;

echo '<br><br> ';

echo 'After Move <br>';
$movablePoint->setXYSpeed(20,20);
echo $movablePoint;