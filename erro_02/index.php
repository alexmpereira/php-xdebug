<?php 
class Person {
    private $name;
    private $age;


    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

$person = new Person();
$person->setName("John");
echo $person->getName(); // Output: John
echo $person->getAge();

?>