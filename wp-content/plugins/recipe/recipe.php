<?php
/**
 * Plugin Name: Recipe Plugin
 */


 if(   !function_exists('add_action')  ){
    die('Hi there! I am just plugin not call directory');
 }


 include('includes/activate.php');

 register_activation_hook(__FILE__,'r_activate_plugin');