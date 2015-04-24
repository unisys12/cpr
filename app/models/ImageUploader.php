<?php

class ImageUploader {

	public function upload($name, $file)
	{

		$s3 = AWS::get('s3');

		$s3->putObject(array(
	    'Bucket'     => 'corinthparks',
	    'Key'        => $name,
	    'Body' => $file,
		));

	}

}