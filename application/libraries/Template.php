<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template
{

	function show($view, $data = array())
	{
		// echo "asdf";
		$CI = &get_instance();

		// Load header
		$CI->load->view('template/header',$data);
		// echo "<p>Carregar Header</p>";

		// Load content
		$CI->load->view($view, $data);

		// Load footer
		$CI->load->view('template/footer',$data);
		
		// Scripts
		$CI->load->view('template/scripts', $data);
		

	}
}
 
