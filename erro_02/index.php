<?php 
class Person {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge($age) {
        $this->$age = $age;
    }
}

$person = new Person();
$person->setName("John");
echo $person->getName(); // Output: John
echo $person->getAge("21");

?>