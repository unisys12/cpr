<?php

class ImageUploader {

	public function upload($name, $file)
	{

		$s3 = AWS::get('s3');

		$s3->putObject(array(
	    'Bucket'    => $_ENV['S3_BUCKET_NAME'],
	    'Key'       => $name,
	    'Body'		=> fopen($file, 'r'),
	    'ACL'		=> 'public-read',
		));

	}

}