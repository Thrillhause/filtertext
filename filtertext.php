<?php

/**
 * 
 * Plugin Name: Filter Text Plugin
 * Description: Filter out specific words on your pages and posts.
 * Version: 0.1
 * Author: Dean Johnson
 * Author URI: https://github.com/thrillhause
 * 
 */

 add_filter('the_content', 'contentEdits');

 function contentEdits($content){
   $content = $content . '<p>Testing Content Filter</p>';
   $content = str_replace('Lorem','@#&@!*', $content);
   return $content;
 }

 add_shortcode('filterText', 'shortCodeTest');

 function shortCodeTest(){
   return 'Filtered ShortCode';
 }