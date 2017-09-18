<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'models/Base_model.php';

/**
* 
*/
class Product_model extends Base_model
{
	function isProductExist($prod_name)
	{
		$sql = "select * from products where name = '$prod_name'";
		$query = $this->db->query($sql);
		$row = $query->row();
		return isset($row);
	}

	function getProduct($prod_id = 'all')
	{
		if ($prod_id === 'all') {
			$this->db->select('*');
			$this->db->from('products');
			return $this->db->get()->result_array();
		}
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('prod_id', $prod_id);
		return $this->db->get()->result_array();
	}

	function updateProduct($prod = array())
	{
		$this->db->where('prod_id', $prod['prod_id']);
		$this->db->update('products', $prod);

		return $this->db->affected_rows();
	}

	function addProduct($prod = array())
	{
		if (!$prod) return false;
		$this->db->insert('products', $prod);

		if ($this->db->affected_rows() == '1') return true;

		return false;
	}

	function delProduct($prod_id)
	{
		$sql = "delete from products where prod_id = '$prod_id'";
		$query = $this->db->query($sql);

		$row = $this->db->affected_rows();
		return $row == '1';
	}
}