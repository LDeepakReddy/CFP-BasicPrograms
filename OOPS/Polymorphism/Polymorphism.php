<?php
interface Shape
{
    public function calcArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // calculates the area of circles 
    public function calcArea()
    {
        return $this->radius * $this->radius * pi();
    }
}


class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // calcArea calculates the area of rectangles   
    public function calcArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle(7);
echo $circle -> calcArea() . "\n";

$rectangle = new Rectangle(7, 4);
echo $rectangle -> calcArea() ."\n";