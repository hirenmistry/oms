<?php

class OrderProcess {

    //put your code here
    private $orderDetails;

    public function setOrderDetails($orderDetails) {
        $this->orderDetails = $orderDetails;
        return $this;
    }

    public function getOrderObjectBySubmit() {
        //setup Items
        $itemList = new ItemList();
        foreach ($this->orderDetails['items'] as $key => $citem) {
            $itemList->append(Item::getDataFromArray($citem));
        }

        
        //setup order
        $order = new Order();
        $order->setOrderDate($this->orderDetails['orderDate']);
        $order->setOrderStatus(new OrderStatusEnum(OrderStatusEnum::Pending));
        $order->setItems($items);
        $order->save();
        
        
        //setup shipment
        $shipmentor = new Shipmentor();
        $shipmentor->setOrder($order);
        $shipmentor->save($this->orderDetails['shipmentDetails']);
        
        
        
    }

}
