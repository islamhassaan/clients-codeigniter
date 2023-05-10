<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ClientsController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$data['clients'] = $this->Client_model->get_clients();
		$this->load->helper('url', 'form');
		$this->load->library("session", "http");
	}
	public function index()
	{
		$this->load->library('pagination');
		$this->load->database();

		// Pagination configuration
		$config = array(
			'base_url' => 'http://127.0.0.1:8000/ClientsController/index',
			'total_rows' => $this->db->count_all('clients'),
			'per_page' => 4,
			'uri_segment' => 2,
			'use_page_numbers' => TRUE,
		);
		$this->pagination->initialize($config);

		// Get the current page number from the URL
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;

		// Fetch the data from the database using the pagination library
		$data['clients'] = $this->db->limit($config['per_page'], ($page - 1) * $config['per_page'])->get('clients')->result();

		// Load the view and pass the data to it
		$this->load->view('clients/index', $data);


		##################################################################
		// $data['clients'] = $this->Client_model->get_clients();
		// $this->load->view('clients/index', $data);
	}

	public function create()
	{


		$this->form_validation->set_rules('full_english_name', 'English name', 'required');
		$this->form_validation->set_rules('full_arabic_name', 'Full Arabic Name', 'required|trim|arabic_only');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('username', 'Use name', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('country', 'Country', 'required');
		if ($this->form_validation->run() === FALSE) {

			$data['errors'] = validation_errors();
			$data['full_english_name'] = set_value('full_english_name');
			$data['full_arabic_name'] = set_value('full_arabic_name');
			$data['username'] = set_value('username');
			$data['mobile'] = set_value('mobile');
			$data['email'] = set_value('email');
			$data['password'] = set_value('password');

			$this->load->view('clients/create', $data);
		} else {
			$password = $this->input->post('password');
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);

			$data = [
				'full_english_name' => $this->input->post('full_english_name'),
				'full_arabic_name' => $this->input->post('full_arabic_name'),
				'username' => $this->input->post('username'),
				'mobile' => $this->input->post('mobile'),
				'email' => $this->input->post('email'),
				'password' => $hashed_password,
				'country_code' => $this->input->post('country_code'),
				'country' => $this->input->post('country')
			];
			$result = $this->Client_model->add_client($data);
			if (!$result) {
				$this->load->view('clients/create');
				return;
			}

			redirect('http://127.0.0.1:8000/index');
		}
	}

	public function edit($id)
	{
		$data['client'] = $this->Client_model->find($id);
		$this->load->view('clients/edit', $data);
	}

	public function update()
	{

		$data = array(
			'full_english_name' => $this->input->post('full_english_name'),
			'full_arabic_name' => $this->input->post('full_arabic_name'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'country_code' => $this->input->post('country_code'),
			'country' => $this->input->post('country')
		);
		$this->Client_model->update_client($this->input->post('id'), $data);
		redirect('http://127.0.0.1:8000/index');
	}

	public function search()
	{
		// Get the search query from the form submission
		$search_query = $this->input->post('search');

		// Load the clients model and search for clients based on the query
		$this->load->model('Client_model');
		$data['clients'] = $this->Client_model->search_clients($search_query);

		// Load the search results view and pass in the search query and results
		$this->load->view('clients/index', $data);
	}

	public function delete_client($id) {
		$this->Client_model->delete_client($id);
		redirect('http://127.0.0.1:8000/index'); // Redirect to the client list page
	}
}
