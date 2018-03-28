# demo-wordpress-uni-mgmt

## Custom Queries

See minimum example below:

```
<?php
  $today = date('Ymd');
  $homepageEvents = new WP_Query(array(
 'posts_per_page' => 2,
 'post_type' => 'event',
 'meta_key' => 'event_date',
 'orderby' => 'meta_value_num',
 'order' => 'ASC',
 'meta_query' => array(
   array(
     'key'=> 'event_date',
     'compare' => '>=',
     'value' => $today,
     'type' => 'numeric'
   )
 )
  ));

  while($homepageEvents->have_posts()) {
 $homepageEvents->the_post(); ?>
   the_title(); 
  }
?>
```


## If you create new post type
*  Update permalink structure

## Custom Field Plugins
* Advanced Custom Fields (ACF)
* CMB2

## Get Google Maps API Key

Visit the [google maps api url](https://developers.google.com/maps/documentation/javascript/get-api-key) and click `Get API Key`