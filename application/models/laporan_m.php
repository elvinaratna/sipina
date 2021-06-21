<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model {

	var $table = 'tagenda';
	var $column_order = array(null, 'nama','jumlah'); //set column field database for datatable orderable
	var $column_search = array('nama'); //set column field database for datatable searchable 
	var $order = array('nama' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		//add custom filter here
		if($this->input->post('dtp_input2'))
		{
			$vbulan = date("m",strtotime($this->input->post('dtp_input2')));
			$this->db->select('mjenissurat.nama, tagenda.id_jenissurat, COUNT(tagenda.id_jenissurat) as jumlah');
			  $this->db->join('tagenda', 'mjenissurat.id_jenissurat=tagenda.id_jenissurat');
			  $this->db->from('mjenissurat');
			  $this->db->where('MONTH(tgl_agenda)',$vbulan);
			  $this->db->where('YEAR(tgl_agenda)', $this->input->post('dtp_input2'));
			  $this->db->group_by('mjenissurat.id_jenissurat');
			  $query = $this->db->get();
		}


		$this->db->from($this->table);
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	public function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}


}
