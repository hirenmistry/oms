<?php
require_once('basicenum.php');
class OrderStatusEnum extends BasicEnum {        
        const Pending    = 1;
        const Approved   = 2;
        const Processing = 3;
        const Cancelled  = 4;
        const Rejected   = 5;

}
?>