<?php
	class Jenissurat_m extends CI_Model{
		private $id_jenissurat;
		private $nama;
		
		//accessor
		
		public function setIdJenisSurat($value){
			$this->id_jenissurat = $value;
		}
		public function setNama($value){
			$this->nama = $value;
		}
		
		
		//mutator
		
		public function getIdJenisSurat(){
			return $this->id_jenissurat;
		}
		public function getNama(){
			return $this->nama;
		}
		
		public function view(){
			$this->db->select('*');
			$this->db->from('mjenissurat');
			return $this->db->get();
		}
		
		public function insert(){
			$data	= array(
							
							'id_jenissurat' => $this->getIdJenisSurat(),
							'nama' => $this->getNama()
						
			);
		$this->db->insert('mjenissurat', $data);
		}
		
		public function update($id_jenissurat){
		$data	=	array(
							'id_jenissurat' => $this->getIdJenisSurat(),
							'nama' => $this->getNama()
							
					);
		$this->db->where('id_jenissurat', $id_jenissurat);
		$this->db->update('mjenissurat', $data);
	}
	
		public function delete($id_jenissurat)
			{

				$query = $this->db->delete("mjenissurat",array("id_jenissurat" => $id_jenissurat));

				if($query){
					return true;
				}else{
					return false;
				}

			}

	
	}
?>