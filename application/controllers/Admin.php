<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	

		$this->load->view('admin/index');
		
	}

	public function getNewsList(){

		$query = $this->db->get('mycomm_news');
		$res = $query->result_array();
		// var_dump($res);exit;
		echo json_encode( array('data'=>$res) );


	}
	public function getHotsList(){

		$query = $this->db->get('mycomm_hots');
		$res = $query->result_array();
		// var_dump($res);exit;
		echo json_encode( array('data'=>$res) );


	}

	public function getCurrentHotsList(){
		$query = $this->db->select('id,des,path,create_time,top')->from('mycomm_hots')->where('top >',0)->order_by('top','DESC')->limit(5)->get();
		$res = $query->result_array();
		// var_dump($res);exit;
		echo json_encode( array('data'=>$res) );


	}
}
