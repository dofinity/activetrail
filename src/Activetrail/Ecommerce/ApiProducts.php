<?php
class ApiProducts
{
  public $object_url; //String
  public $total; //ApiAmount
  public $total_discount; //ApiAmount
  public $shipping; //ApiAmount
  public $coupon; //ApiAmount
  public $items; //array(ApiItem)
  public $status; //ApiOrderStatus
  public $created_on; //Date
  public $modified_on; //Date
  public $order_id; //String
}