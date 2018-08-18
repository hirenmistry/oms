<?php

class Item {
    private $itemId;
    private $itemName;
    private $itemType;
    private $itemPrice;
    private $itemSoldOut;
    

    /**
     * Get the value of itemId
     */ 
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set the value of itemId
     *
     * @return  self
     */ 
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get the value of itemName
     */ 
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Set the value of itemName
     *
     * @return  self
     */ 
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get the value of itemType
     */ 
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Set the value of itemType
     *
     * @return  self
     */ 
    public function setItemType(ItemTypeEnum $itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    /**
     * Get the value of itemPrice
     */ 
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Set the value of itemPrice
     *
     * @return  self
     */ 
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;

        return $this;
    }

    /**
     * Get the value of itemSoldOut
     */ 
    public function getItemSoldOut()
    {
        return $this->itemSoldOut;
    }

    /**
     * Set the value of itemSoldOut
     *
     * @return  self
     */ 
    public function setItemSoldOut($itemSoldOut)
    {
        $this->itemSoldOut = $itemSoldOut;

        return $this;
    }

    public static function getDataFromArray($citem) {
        return new Item();
    }

}
?>