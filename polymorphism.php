<?php
interface SoundMaker {
    public function makeSound();
}

class Dog implements SoundMaker {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat implements SoundMaker {
    public function makeSound() {
        return "Meow!";
    }
}

class Duck implements SoundMaker {
    public function makeSound() {
        return "Quack!";
    }
}

$animals = [
    new Dog(),
    new Cat(),
    new Duck()
];

foreach ($animals as $animal) {
    echo get_class($animal) . " says: " . $animal->makeSound() . "\n";
}

?>
