<?php
		class view_m extends CI_Model
		{

			 function view_data()
			 {
			  $query = $this->db->get("tagenda");
			  return $query->result();
			 }

			 public function searchRecord($isi)
			{
				$this->db->select('*');
				$this->db->from('tagenda');
				$this->db->like('isi_ringkas', $isi, 'both');
				$query = $this->db->get();

				if($query->num_rows()>0){
				  return $query->result();
				}
			}
			 
			 public function get_current_page($limit, $start) {
				$this->db->limit($limit, $start);
				$query = $this->db->get('tagenda');
				$rows = $query->result();
 
				if ($query->num_rows() > 0) {
					foreach ($rows as $row) {
						$data[] = $row;
					}
             
					return $data;
				}
 
				return false;
			}
     
			public function get_total() {
				return $this->db->count_all('tagenda');
			}
			 
		}

?>