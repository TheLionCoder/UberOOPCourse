<?php
require_once('Car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;
    protected $passenger;

    public function __construct($license ,$driver, $typeCarAccepted, $seatsMaterial) {
        parent::__construct($license, $driver);
        $this->typeCarAccepted;
        $this->seatsMaterial;
    }

    public function setPassenger($passenger) {
        if ($passenger == 6) {
            $this->passenger = $passenger;
        }
        else {
            echo "Mandatory: at least six passengers";
        }
    }
}
?>