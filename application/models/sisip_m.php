<?php
		class sisip_m extends CI_Model
		{
			 public function view($id_jenissurat){

					$tahun = date("Y");
					$this->db->select_max('no_urut');
					$this->db->where('id_jenissurat', $id_jenissurat);
					$this->db->where('YEAR(tgl_agenda)',$tahun);
					$query = $this->db->get('tagenda');

					if ($query->num_rows() > 0)
					{
						$res2 = $query->result_array();
						$result = $res2[0]['no_sisipan'];

						$row = $query->result_array();
						$data['query'] = 1 + $row[0]['no_sisipan'];


						return $data['query'];
					}

					return NULL;

			 }
			 
			 public function view_nomorsurat(){
				$this->db->select('*');
				$this->db->from('tagenda');
				$this->db->order_by('id_agenda', 'desc');
				$this->db->limit(1);
				$query = $this->db->get();
				return $query;
			 }
			 
			  public function view_cetak($id_agenda){
				$this->db->select('*');
				$this->db->from('tagenda');
				$this->db->where('id_agenda', $id_agenda);
				$this->db->limit(1);
				$query = $this->db->get();
				return $query;
			 }
			 
			public function sisip_data($data){
				$this->db->insert('tagenda', $data);
			}
			 
			 
			 function jenissurat()
			 {
			  $query = $this->db->get("mjenissurat");
			  return $query->result();
			 }
			 

			 
			 function pegawai()
			 {
			  $query = $this->db->get("mpegawai");
			  return $query->result();
			 }

			 function jenisarsip($id_jenissurat)
			 {
			  $this->db->where('id_jenissurat', $id_jenissurat);
			  $query = $this->db->get('mjenisarsip');
			  $output = '<option value="">---SELECT---</option>';
			  foreach($query->result() as $row)
			  {
			   $output .= '<option value="'.$row->id_jenisarsip.'">'.$row->id_jenisarsip.' - '.$row->nama.'</option>';
			  }
			  return $output;
			 }

			 function klasifikasi($id_jenisarsip)
			 {
			  $this->db->where('id_jenisarsip', $id_jenisarsip);
			  $query = $this->db->get('mklasifikasi');
			  $output = '<option value="">---SELECT---</option>';
			  foreach($query->result() as $row)
			  {
			   $output .= '<option value="'.$row->kode_klasifikasi.'">'.$row->kode_klasifikasi.' - '.$row->nama.'</option>';
			  }
			  return $output;
			 }
			 function dari()
			 {
			  $query = $this->db->get("mdari");
			  return $query->result();
			 }
			 function tujuan()
			 {
			  $query = $this->db->get("mtujuan");
			  return $query->result();
			 }
			 
			 
		}

?>