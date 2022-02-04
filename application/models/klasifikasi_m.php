<?php
	class Klasifikasi_m extends CI_Model{
		private $id_jenisarsip;
		private $kode_klasifikasi;
		private $nama;
		
		//accessor
		
		public function setIdJenisArsip($value){
			$this->id_jenisarsip = $value;
		}
		public function setKodeKlasifikasi($value){
			$this->kode_klasifikasi = $value;
		}
		public function setNama($value){
			$this->nama = $value;
		}
		
		
		//mutator
		
		public function getIdJenisArsip(){
			return $this->id_jenisarsip;
		}
		public function getKodeKlasifikasi(){
			return $this->kode_klasifikasi;
		}
		public function getNama(){
			return $this->nama;
		}
		
		public function view(){
			$this->db->select('*');
			$this->db->from('mklasifikasi');
			return $this->db->get();
		}
		
		public function insert(){
			$data	= array(
							
							'id_jenisarsip' => $this->getIdJenisArsip(),
							'kode_klasifikasi' => $this->getKodeKlasifikasi(),
							'nama' => $this->getNama()
						
			);
		$this->db->insert('mklasifikasi', $data);
		}
		
		public function update($kode_klasifikasi, $id_jenisarsip){
		$data	=	array(
							'id_jenisarsip' => $this->getIdJenisArsip(),
							'kode_klasifikasi' => $this->getKodeKlasifikasi(),
							'nama' => $this->getNama()
							
					);
		$this->db->where('id_jenisarsip', $id_jenisarsip);
		$this->db->where('kode_klasifikasi', $kode_klasifikasi);
		$this->db->update('mklasifikasi', $data);
	}
	
		public function delete($id_jenisarsip, $kode_klasifikasi)
			{

				$query = $this->db->delete("mklasifikasi",array("id_jenisarsip" => $id_jenisarsip, "kode_klasifikasi" => $kode_klasifikasi));

				if($query){
					return true;
				}else{
					return false;
				}

			}

	
	}
?>