<?php
	class Jenisarsip_m extends CI_Model{
		private $id_jenissurat;
		private $id_jenisarsip;
		private $nama;
		
		//accessor
		
		public function setIdJenisSurat($value){
			$this->id_jenissurat = $value;
		}
		public function setIdJenisArsip($value){
			$this->id_jenisarsip = $value;
		}
		public function setNama($value){
			$this->nama = $value;
		}
		
		
		//mutator
		
		public function getIdJenisSurat(){
			return $this->id_jenissurat;
		}
		public function getIdJenisArsip(){
			return $this->id_jenisarsip;
		}
		public function getNama(){
			return $this->nama;
		}
		
		public function view(){
			$this->db->select('*');
			$this->db->from('mjenisarsip');
			return $this->db->get();
		}
		public function view_jsurat(){
			$this->db->select('*');
			$this->db->from('mjenissurat');
			return $this->db->get();
		}
		
		public function insert(){
			$data	= array(
							
							'id_jenissurat' => $this->getIdJenisSurat(),
							'id_jenisarsip' => $this->getIdJenisArsip(),
							'nama' => $this->getNama()
						
			);
		$this->db->insert('mjenisarsip', $data);
		}
		
		public function update($id_jenisarsip){
		$data	=	array(
							'id_jenisarsip' => $this->getIdJenisArsip(),
							'nama' => $this->getNama()
							
					);
		$this->db->where('id_jenisarsip', $id_jenisarsip);
		$this->db->update('mjenisarsip', $data);
	}
	
		public function delete($id_jenisarsip)
			{

				$query = $this->db->delete("mjenisarsip",array("id_jenisarsip" => $id_jenisarsip));

				if($query){
					return true;
				}else{
					return false;
				}

			}

	
	}
?>