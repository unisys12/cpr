<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['s3']['enable'] = true;
$config['s3']['url'] = "http://corinthparks.s3.amazonaws.com";
$config['s3']['key'] = getenv('AWS_ACCESS_KEY_ID');
$config['s3']['secret'] = getenv('AWS_SECRET_ACCESS_KEY');
$config['s3']['bucket'] = "corinthparks";
$config['s3']['allowed_types'] = 'gif|jpg|png|jpeg';
$config['s3']['max_size'] = 5000;
