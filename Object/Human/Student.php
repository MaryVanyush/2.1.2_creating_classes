<?php
declare(strict_types=1);

namespace Object\Human;

class Student {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo() {
        return "Студент: {$this->name}, Возраст: {$this->age} лет.";
    }

    public function setAge($age) {
        $this->age = $age;  
    }
}
