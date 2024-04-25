<?php
echo "var_dump(1) : ",var_dump(1);
echo "<br/>";
echo "var_dump(12) : ",var_dump(12);
echo "<br/>";
echo "var_dump(1.0) : ",var_dump(1.0);
echo "<br/>";
echo "var_dump(false) : ",var_dump(false);
echo "<br/>";
echo "var_dump('s') : ",var_dump("s");
echo "<br/>";
echo "var_dump('str') : ",var_dump("str");
echo "<br/>";
echo "var_dump('') : ",var_dump("");
echo "<br/>";
echo 'var_dump(array("Volvo", "BMW", "Toyota")) : ',var_dump(array("Volvo", "BMW", "Toyota"));
echo "<br/>";
echo "var_dump(array()) : ",var_dump(array());
echo "<br/>";

class Car
{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
$myCar1 = new Car("red", "Volvo");
$myCar2 = new Car("red", "Volvo");

echo 'var_dump($myCar2) : ',var_dump($myCar2);
echo "<br/>";