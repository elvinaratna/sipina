<?php
		class Divisi_m extends CI_Model
		{
			private $id_divisi;
			private $nama;
			
			public function setIdDivisi($value){
			$this->id_divisi = $value;
			}
			public function setNama($value){
				$this->nama = $value;
			}

			public function getIdDivisi(){
			return $this->id_divisi;
			}
			public function getNama(){
				return $this->nama;
			}

			public function view_div(){
				 $query = $this->db->get("mdivisi");
				 return $query->result();
			 }
			 
			public function insert(){
			$data	= array(
					'nama' => $this->getNama()
			);
			$this->db->insert('mdivisi', $data);
			}
			
			public function update($id_divisi){
			$data	=	array(
								'nama' => $this->getNama()
								
						);
			$this->db->where('id_divisi', $id_divisi);
			$this->db->update('mdivisi', $data);
			}
			
			public function delete($id_divisi){
				$this->db->where('id_divisi', $id_divisi);
				$this->db->delete('mdivisi');
				return true;
			}

		}

?>