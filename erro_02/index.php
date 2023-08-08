<?php 
class Person {
    private $name;
    private $age; // add private age

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) { // add function age
        $this->age = $age;
    }

    public function getAge() { // add function age
        return $this->age;
    }
}

$person = new Person();
$person->setName("John");
echo $person->getName(); // Output: John
echo $person->getAge();

?>