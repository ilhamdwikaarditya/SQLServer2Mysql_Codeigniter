<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sync extends CI_Controller {

	function __contruct()
	{
		parent::__construct();
		$this->load->model("mdb");
	}
	
	function index()
    {
        $data['page_title']= 'SYNCRON SQLSERV';
        $this->template->set('title', 'SYNCRON SQLSERV');   
        $this->template->load('template','tukd/transfer/transferv_sync',$data) ; 
    }
	
	function proses_table1(){
		$this->db->query("truncate table1");
		$this->mdb->query("table1","SELECT .... FROM .... WHERE ... dsb");
	}
	
}