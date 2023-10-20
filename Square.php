<?php

class Square extends Shape
{
    public function perimeter(): int|float {
        return $this->width * 4;
    }

    public function draw(): void {
        echo "<div class='square' style='background-color: {$this->color}; width: {$this->width}px; height: {$this->width}px;'></div>";
    }
}