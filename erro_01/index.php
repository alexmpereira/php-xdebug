<?php 
class Car {
    private $model;

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
}

$car = new Car();
$car->setModel("Toyota");
echo $car->getModel(); // Output: Toyota

?>