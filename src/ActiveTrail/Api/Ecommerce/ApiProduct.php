<?php

namespace ActiveTrail\Api\Ecommerce;

class ApiProduct
{
  public $id; //int
  public $real_price; //ApiAmount
  public $new_price; //ApiAmount
  public $title; //String
  public $description; //String
  public $additional_txt_1; //String
  public $additional_txt_2; //String
  public $sku; //String
  public $thumbnail_url; //String
  public $add_to_cart_url; //String
  public $product_page_url; //String
  public $tags; //String
}
