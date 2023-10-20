<?php

class Rectangle extends Shape
{
    public function perimeter(): int|float {
        return ($this->width + $this->height) * 2;
    }

    public function draw(): void {
        echo "<div class='rectangle' style='background-color: {$this->color}; width: {$this->width}px; height: {$this->height}px;'></div>";
    }
}