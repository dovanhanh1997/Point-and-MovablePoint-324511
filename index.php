<?php
include_once 'MovablePoint.php';

$movablePoint=new MovablePoint(51,15);
?>
Before Move <br>
<?php
echo $movablePoint->toString().'<br><br>';
$movablePoint->setSpeed(rand(1,100),rand(1,100));
?>

After Move <br>
<?php
echo $movablePoint->toString();

