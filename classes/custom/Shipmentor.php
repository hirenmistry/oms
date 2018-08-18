<?php
require_once('../globals/ShipmentEnum.php');
class Shipmentor {
    private $order = 0; // order object that is going to ship
    private $shipmentId =0;

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
    
    public function save($shipmentArr){
        $shipment = new Shipment();
        $shipment->setShipmentAddress($shipmentArr['ShipmentAddress']);
        $shipment->setShipmentDate($shipmentArr['ShipmentDate']);
        $shipment->setShipmentStatus(new ShipmentEnum(ShipmentEnum::Pending));
        $shipment->save();
    }

    private function generateShipmentId(){
        $this->shipmentId = rand(5,5000);
    }
}
?>