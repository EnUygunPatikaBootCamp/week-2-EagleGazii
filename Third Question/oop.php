<?php 

abstract class Vehicle {
    private $model;
    // marka - brand
    private $brand;

    
    function get_model(){
        return $this->model;
    }
    function set_model($model){
        $this->model = $model;
    }
    function get_brand(){
        return $this->brand;
    }
    function set_brand($brand){
        $this->brand = $brand;
    }
    abstract protected function getProperties();

}

class Car extends Vehicle{
    // plakaNo -registrationNumber
    // tekerlekSayisi - wheelNumber
    private $registrationNumber;
    private $wheelNumber;
    function __construct($registrationNumber,$brand,$model,$wheelNumber){
        $this->registrationNumber = $registrationNumber;
        $this->brand=$brand;
        $this->model=$model;
        $this->wheelNumber=$wheelNumber;
    }
    public function getProperties(){
        $list = "<ul>";
        $list .= "<li>Plaka No: ". $this->registrationNumber . "</li>";
        $list .= "<li>Marka: ". $this->brand . "</li>";
        $list .= "<li>Model: ". $this->model . "</li>";
        $list .= "<li>Tekerlek Sayisi: ". $this->wheelNumber . "</li>";
        $list .= "</ul>";
        return $list;
    }
    
    function getRegistrationNumber(){
        return $this->registrationNumber;
    }
    function getWheelNumber(){
        return $this->wheelNumber;
    }
    function setRegistrationNumber($registrationNumber){
        $this->registrationNumber = $registrationNumber;
    }
    function setWheelNumber($wheelNumber){
        $this->wheelNumber = $wheelNumber;
    }
}
class Motorcycle extends Car {
    function __construct($registrationNumber,$brand,$model,$wheelNumber){
        parent::__construct($registrationNumber,$brand,$model,$wheelNumber);
    }
}
class Airplane extends Vehicle {
    // kanat_acikligi - wingspan
    private $wingspan;
    function __construct($brand,$model, $wingspan){
        $this->brand=$brand;
        $this->model=$model;
        $this->wingspan=$wingspan;
    }

    public function getProperties(){
        $list = "<ul>";
        $list .= "<li>Marka: ". $this->brand . "</li>";
        $list .= "<li>Model: ". $this->model . "</li>";
        $list .= "<li>Kanat Acikligi: ". $this->wingspan . "</li>";
        $list .= "</ul>";
        return $list;
    }
    function getWingspan(){
        return $this->wingspan;
    }
    function setWingspan($wingspan){
        $this->wingspan = $wingspan;
    }

}
$car = new Car("06 ARAC 06","Mercedes","C180","4");
$motorcycle = new Motorcycle("06 MOTOR 06","Honda","Forza 750","2");
$airplane = new Airplane("Airbus","A380","80m");

echo "Araba taşıtına ait öznitelikler şu şekildedir:<br>";
echo $car->getProperties();

echo "Motosiklet taşıtına ait öznitelikler şu şekildedir:<br>";
echo $motorcycle->getProperties();

echo "Ucak taşıtına ait öznitelikler şu şekildedir:<br>";
echo $airplane->getProperties();

?>

