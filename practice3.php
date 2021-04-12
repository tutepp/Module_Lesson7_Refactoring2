<?php
class Cylinder
{
    public $volume;
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }

    public function getPerimeter($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }

    public function getBaseArea($radius)
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
}
$cylinder = new Cylinder();
echo "Base Area = ".$cylinder->getBaseArea(9);
echo "</br>";
echo "Perimeter= ".$cylinder->getPerimeter(9);
