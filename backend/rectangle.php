<?php
class rectangle{

    function __construct(public $width, public $height)

    public function calculateArea() {
        return $this->width * $this->height;
    }
}