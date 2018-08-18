<?php
require_once('basicenum.php');
class OrderStatusEnum extends BasicEnum {        
        const Pending    = 1;
        const Approved   = 2;
        const Processing = 3;
        const Processed  = 4;
        const Cancelled  = 5;
        const Rejected   = 6;

}
?>