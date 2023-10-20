<?php

class Shape
{
  protected int|float $width;
  protected int|float $height;
  protected string $color;

  public function __construct(int|float $width, int|float $height, string $color) {
      $this->width = $width;
      $this->height = $height;
      $this->color = $color;
  }

    public function area(): int|float {
      return $this->width * $this->height;
    }
}