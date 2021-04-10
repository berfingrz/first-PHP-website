class Automobile{
	public $licencePlate
    public $brand
	public $model
    public $modelYear
    public $color
	public function __construct($color, $model,$brand, $modelYear,$licencePlate){
		$this->color = $color;
		$this->model = $model;
        $this->brand = $brand;
		$this->modelYear = $modelYear;
        $this->licencePlate = $licencePlate;
	}
    function toString()
    {
        return $this->licencePlate. " " . $this->brand. " : " . $this->model. " : "  . $this->modelYear. " : " . $this->color;
    }
}

<?php
require 'Automobile.php';
$licencePlate = $_POST['licencePlate']
$brand = $_POST['brand']
$model = $_POST['model']
$modelYear = $_POST['modelYear']
$color = $_POST['color']
$autoMobile = new User($licencePlate, $brand, $model, $modelYear, $color);
?>