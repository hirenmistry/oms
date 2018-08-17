<?php
require_once('basicenum.php');
class ShipmentEnum extends BasicEnum {        
        const Pending    = 1;
        const Approved   = 2;
        const InProcess  = 3;
        const Packed     = 4;
        const Shipping   = 5;
        const Shipped    = 6;
        const ReturnBack = 7;
}
?>