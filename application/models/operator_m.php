<?php
		class operator_m extends CI_Model
		{
			
			
			 public function view_data(){
				 $query = $this->db->get("mpegawai");
				 return $query->result();
			 }
			 
			public function view_div(){
				 $query = $this->db->get("mdivisi");
				 return $query->result();
			 }
			 
			 public function getById($nip)
			{
				return $this->db->get_where($this->mpegawai, ["nip" => $nip])->row();
			}
			
			public function simpan($data)
			{
				$query = $this->db->insert("mpegawai", $data);
				if($query){
					return true;
				}else{
					return false;
				}
			}
			public function edit($nip)
			{

				$query = $this->db->where("nip", $nip)
						->get("mpegawai");

				if($query){
					return $query->row();
				}else{
					return false;
				}

			}

			public function update($data, $nip)
				{

					$query = $this->db->update("mpegawai", $data, $nip);

					if($query){
						return true;
					}else{
						return false;
					}

				}

			public function hapus($nip)
			{

				$query = $this->db->delete("mpegawai",array("nip" => $nip));

				if($query){
					return true;
				}else{
					return false;
				}

			}
			 
		}

?>