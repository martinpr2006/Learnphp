<?php

// blueprint
class Box {
    public $width;
    public $height;
    public $length;

    public function volume() {
        return $this -> width * $this -> heigh * $this -> length;
    }
}

$box1 = new Box();
$box1 -> width = 10;
$box1 -> height = 10;
$box1 -> length = 10;

var_dump($box1);
var_dump($box1 -> volume());