<?php
class Shipment {
    private $shipmentId;
    private $shipmentDate;
    private $shipmentStatus;
    private $shipmentAddress;
    private $order;
    private $returnDate;
    function getShipmentAddress() {
        return $this->shipmentAddress;
    }

    function setShipmentAddress($shipmentAddress) {
        $this->shipmentAddress = $shipmentAddress;
        return $this;
    }

        /**
     * Get the value of shipmentId
     */ 
    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     * Set the value of shipmentId
     *
     * @return  self
     */ 
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId = $shipmentId;

        return $this;
    }

    /**
     * Get the value of shipmentDate
     */ 
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * Set the value of shipmentDate
     *
     * @return  self
     */ 
    public function setShipmentDate($shipmentDate)
    {
        $this->shipmentDate = $shipmentDate;

        return $this;
    }

    /**
     * Get the value of shipmentStatus
     */ 
    public function getShipmentStatus()
    {
        return $this->shipmentStatus;
    }

    /**
     * Set the value of shipmentStatus
     *
     * @return  self
     */ 
    public function setShipmentStatus(ShipmentEnum $shipmentStatus)
    {
        $this->shipmentStatus = $shipmentStatus;

        return $this;
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
    public function setOrder(Order $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get the value of returnDate
     */ 
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Set the value of returnDate
     *
     * @return  self
     */ 
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }
    
    public function save(){
        //TODO: need to setup save functionality
    }
}
?>