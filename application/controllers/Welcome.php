<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('crud_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	//add vào database
	public function insert()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('ten_gv', 'Tên Giáo Viên', 'required');
			$this->form_validation->set_rules('ngaysinh_gv', 'Ngày Sinh', 'required');
			$this->form_validation->set_rules('lop_day', 'Lớp Dạy', 'required');
			$this->form_validation->set_rules('mon_day', 'Môn Dạy', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$ajax_data = $this->input->post();
				if ($this->crud_model->insert_entry($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Data added successfully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed');
				}
			}
		} else {
			echo "No direct script access allowed";
		}
		echo json_encode($data);
	}

	//show dữ liệu
	public function fetch()
	{
		if ($this->input->is_ajax_request()) {
			$posts = $this->crud_model->get_entries();
			echo json_encode($posts);
		}
	}

	//delete dữ liệu
	public function delete()
	{
		if ($this->input->is_ajax_request()) {
			$del_id = $this->input->post('del_id');

			if ($this->crud_model->delete_entry($del_id)) {
				$data = array('responce' => "success");
			} else {
				$data = array('responce' => "error");
			}
		}
		echo json_encode($data);
	}

	//edit dữ liệu
	public function edit()
	{
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->crud_model->edit_entry($edit_id)) {
				$data = array('responce' => "success", 'post' => $post);
			} else {
				$data = array('responce' => "error", 'message' => 'failed');
			}
		}
		echo json_encode($data);
	}

	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_ten_gv', 'Tên Giáo Viên', 'required');
			$this->form_validation->set_rules('edit_ngaysinh_gv', 'Ngày Sinh', 'required');
			$this->form_validation->set_rules('edit_lop_day', 'Lớp Dạy', 'required');
			$this->form_validation->set_rules('edit_mon_day', 'Môn Dạy', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$data['id'] = $this->input->post('edit_id');
				$data['ten_gv'] = $this->input->post('edit_ten_gv');
				$data['ngaysinh_gv'] = $this->input->post('edit_ngaysinh_gv');
				$data['lop_day'] = $this->input->post('edit_lop_day');
				$data['mon_day'] = $this->input->post('edit_mon_day');
				if ($this->crud_model->update_entry($data)) {
					$data = array('responce' => 'success', 'message' => 'Data added successfully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed');
				}
			}
		} else {
			echo "No direct script access allowed";
		}
		echo json_encode($data);
	}
}
