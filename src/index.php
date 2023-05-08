<?php

class Animal {

  protected $name;
  protected $age;

  public function __construct($name,$age)
  {
    $this->name = $name;
    $this->age = $age;
  }


  public function get_info() {
    return "Name: {$this->name}, Age: {$this->age}";
  }

}

class Mannal extends Animal {

  protected $breed;

  public function __construct($name,$age,$breed)
  {
    parent::__construct($name,$age);
    $this->breed = $breed;
  }


  public function get_info() {

    return parent::get_info() . ", Breed: {$this->breed}";

  }

}

class Cat extends Mannal {

  public function __construct($name,$age,$breed)
  {
    parent::__construct($name,$age,$breed);
  }

  public function get_info() {

    return parent::get_info() . " , Meow: {$this->meow()} ";

  }

  public function meow() {

    return "meow";

  }

}

$cat = new cat ("whiskers", 3,"siamese");
echo $cat->get_info();

echo PHP_EOL;