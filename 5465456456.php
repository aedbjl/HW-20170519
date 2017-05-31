<?php
$d=$_GET['mio'];
?>

<form>

    <input type="text" name="mio" value="<?php echo $d; ?>">
    <input type="submit" value="0">

<?php
class Bike {
    private $speed = 0;
    function upSpeed($gear){
        $this->speed =
            ($this->speed<1)?1:$this->speed*1.3*$gear;
    }
    function downSpeed(){
        $this->speed =
            ($this->speed<1)?0:$this->speed*0.7;
    }
    function getSpeed(){
        return $this->speed;
    }

$myBike = new Bike;
$urBike = new Bike;
$myBike->upSpeed();$myBike->upSpeed(8);$myBike->upSpeed(8);
//$myBike->downSpeed();
//$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
//$urBike->upSpeed();
echo "My Bike = {$myBike->getSpeed()}<br>";
echo "Ur Bike = {$urBike->getSpeed()}";
?>

</form>


