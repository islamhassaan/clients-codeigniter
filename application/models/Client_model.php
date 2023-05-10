<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_clients()
	{
		$this->db->order_by('full_english_name', 'DESC');
		$query = $this->db->get('clients');
		return $query->result_array();
	}

	public function add_client($data)
	{
		return $this->db->insert('clients', $data);
		
	}

	public function find($id)
	{
		$query = $this->db->get_where('clients', array('id' => $id));
		return $query->row_array();
	}

	public function update_client($client_id, $data)
	{
		$this->db->where('id', $client_id);
		return $this->db->update('clients', $data);
	}

	public function search_clients($search_query)
	{
		$this->db->like('full_english_name', $search_query);
		$this->db->or_like('full_arabic_name', $search_query);
		$this->db->or_like('mobile', $search_query);
		$query = $this->db->get('clients');
		return $query->result();
	}

	public function get_client($client_id)
	{
		$query = $this->db->get_where('clients', array('id' => $client_id));
		return $query->row();
	}

	public function delete_client($id) {
		$this->db->where('id', $id);
		$this->db->delete('clients');
	}
}
