<?php

class India extends CI_controller
{
	function __construct()
	{
		parent::__construct();
	}
	/**
	 * Shows India
	 */
	 public function index()
	 {
		 // The following should be a relative link to your image file above
		$source = '../data/logo.png'; 
		// note that we could have referenced an image anywhere on our system

		// set the mime type for that image (jpeg, png, etc)
		header("Content-type: image/png"); 
		header('Content-Disposition: inline');
		readfile($source); // dish it
	 }
}