<?php

class ItemList extends ArrayObject {
    /**
     * 
     * @param Item $item
     */
    public function append(Item $item) {
        parent::offsetSet(parent::count(),$item);
        return $this;
    }
    public function toArray(){
        return parent::getArrayCopy();
    }
}
