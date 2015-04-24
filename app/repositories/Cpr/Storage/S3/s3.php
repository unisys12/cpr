<?php namespace Cpr\Storage\S3;


class S3 implements S3interface {


	public function upload(array $image, $input)
	{

		$s3 = AWS::get('s3');

		$s3->putObject(array(
	    'Bucket'     => 'corinthparks',
	    'Key'        => $image['slug'],
	    'SourceFile' => $input,
		));

	}

}