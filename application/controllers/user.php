<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('user_model');
		$data['user']=$this->user_model->readevent();
		$this->load->view('user/list_user', $data);	
	}

	public function __construct()
	{

		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
		$this->load->helper('url','form');

	}

	//FUNGSI TAMBAH
	 public function Create()
	 {
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('user_model');

		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		if($this->form_validation->run()==FALSE)
		{
		$this->load->view('user/tambah_user_view');
		}
		else
		{
		$this->user_model->insertevent();
		redirect('index.php/user');
		}
		}

	public function Update($id)
	{
		$this->form_validation->set_rules('id_user','id_user','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');

		$data['user']=$this->user_model->getevent($id);
		if($this->form_validation->run()==FALSE){
			$this->load->view('user/edit_user_view',$data);
		}
		else{
			$this->user_model->UpdateById($id);
			redirect('index.php/user');
			}
		}	

	public function delete($id)
	{
		$this->user_model->delete($id);
		$this->load->view('user/hapus_user_sukses');
	}

}

/* End of file event.php */
/* Location: ./application/controllers/event.php */