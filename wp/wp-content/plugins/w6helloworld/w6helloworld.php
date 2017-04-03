<?php

/**
 * Plugin Name: w6helloworld
 * Description: Private test
 * Version: 0.2.1
 * Author: none
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
add_filter("the_content", 'hello_world');

function hello_world($content) {
  if (is_single()) {
    echo "Hello world!";
  } else {
    return $content."<br> I am the test!</br>";
  }
}

