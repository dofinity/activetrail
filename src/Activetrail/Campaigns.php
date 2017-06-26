<?php

namespace Activetrail\Campaigns;

// View campaign scheduling
class Scheduling
{
  public $is_sent; //boolean
  public $scheduled_date_utc; //Date
  public $is_limit_to_confirmed; //boolean
}

class Total
{
  public $amount; //double
  public $currency; //String
}

class TotalDiscount
{
  public $amount; //double
  public $currency; //String
}

class Shipping
{
  public $amount; //double
  public $currency; //String
}

class Amount
{
  public $amount; //double
  public $currency; //String
}

class Coupon
{
  public $code; //String
  public $amount; //Amount
}

class RealPrice
{
  public $amount; //double
  public $currency; //String
}

class NewPrice
{
  public $amount; //double
  public $currency; //String
}

class Product
{
  public $id; //int
  public $real_price; //RealPrice
  public $new_price; //NewPrice
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

class TotalPrice
{
  public $amount; //double
  public $currency; //String
}

class Item
{
  public $product; //Product
  public $quantity; //int
  public $total_price; //TotalPrice
}

class Status
{
  public $name; //String
  public $code; //String
}

class Products
{
  public $object_url; //String
  public $total; //Total
  public $total_discount; //TotalDiscount
  public $shipping; //Shipping
  public $coupon; //Coupon
  public $items; //array(Item)
  public $status; //Status
  public $created_on; //Date
  public $modified_on; //Date
  public $order_id; //String
}

class Recommendations
{
  public $items; //array(Item)
}

class EcommerceData
{
  public $products; //Products
  public $recommendations; //Recommendations
}


// remarkery products
class Carts
{
  public $ecommerce_data; //array(EcommerceData)
}

class Key
{
}

class Value
{
}

// The pairs you create to replace in the template placeholders
class Pair
{
  public $Key; //Key
  public $Value; //Value
}

// View camapaign segmantation
class Segment
{
  public $limit_amount; //int
  public $limit_per_hour; //int
  public $last_days_not_received; //int
  public $groups_excluded_ids; //array(int)
  public $not_opened_campaign_ids; //array(int)
  public $not_received_campaign_ids; //array(int)
  public $sub_account_id; //int
  public $group_ids; //array(int)
  public $mailing_list_id; //int
}

class Details
{
  public $name; //String
  public $subject; //String
  public $user_profile_id; //int
  public $google_analytics_name; //String
  public $sub_account_id; //int
  public $content_category_id; //int
  public $preheader; //String
  public $predictive_delivery; //boolean
  public $segmentation_id; //int
}

class Design
{
  public $content; //String
  public $language_type; //String
  public $header_footer_language_type; //String
  public $is_add_print_email; //boolean
  public $is_auto_css_inliner; //boolean
}

class Template
{
  public $id; //int
}

class WaitTime
{
  public $interval_type; //String
  public $interval_time; //int
}

class ABSettings
{
  public $scheduling; //
  public $subject; //String
  public $user_profile_id; //int
  public $google_analytics_name; //String
  public $ab_percent_split_groups; //double
  public $wait_time; //WaitTime
  public $winning_version_by; //String
  public $design; //
}

class ApiCampaignPost
{
  public $scheduling; //Scheduling
  public $carts; //Carts
  public $pairs; //array(Pair)
  public $segment; //Segment
  public $send_test; //String, Email addresses, you need to separated by comma(,).
  public $details; //Details
  public $design; //Design
  public $template; //Template
  public $a_b_settings; //ABSettings



}