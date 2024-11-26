<?php
declare(strict_types=1);

namespace Object\Electronics;

class Television {
    private $brand;
    private $screenSize;

    public function __construct($brand, $screenSize) {
        $this->brand = $brand;
        $this->screenSize = $screenSize;
    }

    public function getTelevisionInfo() {
        return "Телевизор: {$this->brand}, Размер экрана: {$this->screenSize} дюймов.";
    }

    public function setScreenSize($screenSize) {
        $this->screenSize = $screenSize;
    }
}
