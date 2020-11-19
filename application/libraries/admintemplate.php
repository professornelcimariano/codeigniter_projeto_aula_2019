<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admintemplate
{

	//show('admin/dashboard')
	function show($view, $data = array())
	{
		// echo "TemplateAdmin";
		$CI = &get_instance();
		// Load header
		$CI->load->view('admin/template/header',$data);
		// Load content
		$CI->load->view($view, $data);
		// Load footer
		$CI->load->view('admin/template/footer',$data);
		// Scripts
		$CI->load->view('admin/template/scripts', $data);
		
	}
}
