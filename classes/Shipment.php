<?php
require_once('../globals/ShipmentEnum.php');
class Shipment {
    private $order = 0; // order object that is going to ship
    private $shipmentId =0;
    private $shipmentStatus=ShipmentEnum::Pending;

    public function __construct(){

    }
    
    public function generateLabel(){
        return ""; // generated Label
    }
  

    /**
     * Get the value of order
     */ 
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set the value of order
     *
     * @return  self
     */ 
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    private function generateShipmentId(){
        $this->shipmentId = rand(5,5000);
    }
}
?>