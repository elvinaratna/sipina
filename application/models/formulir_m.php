<?php
		class formulir_m extends CI_Model
		{
			 public function view($id_jenissurat,$id_jenisarsip,$kode_klasifikasi){

			 	if(($id_jenisarsip =='KP.03') and ($kode_klasifikasi == '01')){

					$tahun = date("Y");
					$this->db->select_max('no_urut');
					$this->db->where('id_jenissurat', $id_jenissurat);
					$this->db->where('id_jenisarsip','KP.03');
					$this->db->where('kode_klasifikasi','01');
					$this->db->where('YEAR(tgl_agenda)',$tahun);
					$this->db->where('no_sisipan', 0);
					$query = $this->db->get('tagenda');

					if ($query->num_rows() > 0)
					{
						$res2 = $query->result_array();
						$result = $res2[0]['no_urut'];

						$row = $query->result_array();
						$data['query'] = 1 + $row[0]['no_urut'];


						return $data['query'];
					}

					return NULL;

				}elseif(($id_jenisarsip =='KP.03') and ($kode_klasifikasi == '02')){
					$tahun = date("Y");
					$this->db->select_max('no_urut');
					$this->db->where('id_jenissurat', $id_jenissurat);
					$this->db->where('id_jenisarsip','KP.03');
					$this->db->where('kode_klasifikasi','02');
					$this->db->where('YEAR(tgl_agenda)',$tahun);
					$this->db->where('no_sisipan', 0);
					$query = $this->db->get('tagenda');

					if ($query->num_rows() > 0)
					{
						$res2 = $query->result_array();
						$result = $res2[0]['no_urut'];

						$row = $query->result_array();
						$data['query'] = 1 + $row[0]['no_urut'];


						return $data['query'];
					}

					return NULL;

				}else{

					$tahun = date("Y");
					$this->db->select_max('no_urut');
					$this->db->where('id_jenissurat', $id_jenissurat);
					$this->db->where('YEAR(tgl_agenda)',$tahun);
					$this->db->where('no_sisipan', 0);
					$query = $this->db->get('tagenda');

					if ($query->num_rows() > 0)
					{
						$res2 = $query->result_array();
						$result = $res2[0]['no_urut'];

						$row = $query->result_array();
						$data['query'] = 1 + $row[0]['no_urut'];


						return $data['query'];
					}

					return NULL;
				}

			 }



			 public function view_sisip($id_jenissurat, $tglsurat){

					$this->db->select_max('no_sisipan');
					$this->db->where('id_jenissurat', $id_jenissurat);
					$this->db->where('tgl_surat <=',$tglsurat);
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

			public function view_urut($id_jenissurat, $tglsurat){
					$this->db->select_max('no_urut');
					$this->db->where('id_jenissurat', $id_jenissurat);
					$this->db->where('tgl_surat <=',$tglsurat);
					$query = $this->db->get('tagenda');

					if ($query->num_rows() > 0)
					{
						$res2 = $query->result_array();
						$result = $res2[0]['no_urut'];

						$row = $query->result_array();
						$data['query'] = $row[0]['no_urut'];


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
			 
			public function insert_data($data){
				$this->db->insert('tagenda', $data);
			}
			 
			 
			 function jenissurat()
			 {
			  $query = $this->db->get("mjenissurat");
			  return $query->result();
			 }
			 
			  function caridata()
			 {
				$tahun = date("Y");
				$this->db->where('YEAR(tgl_agenda)',$tahun);
				$this->db->order_by('tgl_agenda', 'desc');
			    $query = $this->db->get("tagenda");
			  	return $query->result();
			 }


			 function laporan()
			 {
				$tahun = date("Y");
				$this->db->where('YEAR(tgl_agenda)',$tahun);
			  $this->db->select('mjenissurat.nama, tagenda.id_jenissurat, COUNT(tagenda.id_jenissurat) as jumlah');
			  $this->db->join('tagenda', 'mjenissurat.id_jenissurat=tagenda.id_jenissurat');
			  $this->db->from('mjenissurat');
			  $this->db->group_by('mjenissurat.id_jenissurat');
			  $query = $this->db->get();
			  return $query->result();
			 }
			 
			  function laporan_bulanan($tglsurat)
			 {
				$vbulan = date("m",strtotime($tglsurat));
			  $this->db->select('mjenissurat.nama, tagenda.id_jenissurat, COUNT(tagenda.id_jenissurat) as jumlah');
			  $this->db->join('tagenda', 'mjenissurat.id_jenissurat=tagenda.id_jenissurat');
			  $this->db->from('mjenissurat');
			  $this->db->where('MONTH(tgl_agenda)',$vbulan);
			  $this->db->where('YEAR(tgl_agenda)', $tglsurat);
			  $this->db->group_by('mjenissurat.id_jenissurat');
			  $query = $this->db->get();
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