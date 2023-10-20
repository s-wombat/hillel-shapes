<?php

class Circle extends Shape
{
    private int|float $diameter;

    public function __construct(int|float $width, int|float $height, string $color, int|float $diameter)
    {
        parent::__construct($width, $height, $color);
        $this->diameter = $diameter;
    }

    public function area(): int|float {
        $radius = $this->diameter/2;
        return round(pi(), 2)*pow($radius, 2);
    }

    public function perimeter(): int|float {
        return round(pi(), 2) * $this->diameter;
    }

    public function draw(): void {
        echo "<div class='circle' style='background-color: {$this->color}; width: {$this->diameter}px; height: {$this->diameter}px; border-radius: 50%;'></div>";
    }
}