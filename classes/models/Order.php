<?php
class Order {
    private $orderId;
    private $orderDate;
    private $items;
    private $shipment;
    private $orderStatus;

    /**
     * Get the value of orderId
     */ 
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set the value of orderId
     *
     * @return  self
     */ 
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get the value of orderDate
     */ 
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set the value of orderDate
     *
     * @return  self
     */ 
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get the value of items
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @return  self
     */ 
    public function setItems(ItemList $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get the value of shipment
     */ 
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Set the value of shipment
     *
     * @return  self
     */ 
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;

        return $this;
    }

    /**
     * Get the value of orderStatus
     */ 
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set the value of orderStatus
     *
     * @return  self
     */ 
    public function setOrderStatus(OrderStatusEnum $orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }
}
?>