<?php
/**
 * @package Akismet
 */
/*
Plugin Name: WebAnalyzer
Plugin Github URI: https://github.com/Chitraketu/WebAnalyzer-Plugin
Description: It's a basic web analyzer plugin for wordpress which would find the clients location, browser information and the number of views.
Version: 3.1.11
Author: Chitraketu
Author URI: https://automattic.com/wordpress-plugins/
*/
// Make sure we don't expose any info if called directly


echo $_SERVER['REMOTE_ADDR'];
