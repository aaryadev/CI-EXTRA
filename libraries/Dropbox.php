<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropbox {
	  public function __construct() {

		$CI =& get_instance();
		$CI->config->load('dropbox');
		require APPPATH .'third_party/dropbox-api-php-client/autoload.php';
    $cache_path = $CI->config->item('cache_path');

    $this->client = new Dropbox();
  }
