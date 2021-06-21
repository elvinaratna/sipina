<?php
	class Sisipan_m extends CI_Model{
		private $id_agenda;
		private $id_jenissurat;
		private	$id_jenisarsip;
		private	$kode_klasifikasi;
		private	$tgl_agenda;
		private	$no_surat;
		private	$no_urut;
		private	$tgl_surat;
		private	$hal;
		private	$isi_ringkas;
		private	$dari;
		private	$tujuan;
		private	$nip;
		
		//accessor
			
		public function setIdAgenda($value){
			$this->id_agenda = $value;
		}
		public function setIdJenisSurat($value){
			$this->id_jenissurat = $value;
		}
		public function setIdJenisArsip($value){
			$this->id_jenisarsip = $value;	
		}
		public function setKodeKlasifikasi($value){
			$this->kode_klasifikasi = $value;	
		}
		public function setTglAgenda($value){
			$this->tgl_agenda = $value;	
		}
		public function setNoSurat($value){
			$this->no_surat = $value;	
		}
		public function setNoUrut($value){
			$this->no_urut = $value;	
		}
		public function setNoSisipan($value){
			$this->no_sisipan = $value;	
		}
		public function setTglSurat($value){
			$this->tgl_surat = $value;	
		}
		public function setHal($value){
			$this->hal = $value;	
		}
		public function setIsiRingkas($value){
			$this->isi_ringkas = $value;	
		}
		public function setDari($value){
			$this->dari = $value;	
		}
		public function setTujuan($value){
			$this->tujuan = $value;	
		}
		public function setNip($value){
			$this->nip = $value;	
		}
		
		
		//mutator
		
		public function getIdAgenda(){
			return $this->id_agenda;
		}
		public function getIdJenisSurat(){
			return $this->id_jenissurat;
		}
		public function getIdJenisArsip(){
			return $this->id_jenisarsip;
		}
		public function getKodeKlasifikasi(){
			return $this->kode_klasifikasi;
		}
		public function getTglAgenda(){
			return $this->tgl_agenda;
		}
		public function getNoSurat(){
			return $this->no_surat;
		}
		public function getNoUrut(){
			return $this->no_urut;
		}
		public function getNoSisipan(){
			return $this->no_sisipan;
		}
		public function getTglSurat(){
			return $this->tgl_surat;
		}
		public function getHal(){
			return $this->hal;
		}
		public function getIsiRingkas(){
			return $this->isi_ringkas;
		}
		public function getDari(){
			return $this->dari;
		}
		public function getTujuan(){
			return $this->tujuan;
		}
		public function getNip(){
			return $this->nip;
		}
		
		
		public function view(){
			$tahun = date("Y");
			$tahun_lalu = date("Y", strtotime("-1 years"));
			$this->db->where('YEAR(tgl_agenda)',$tahun);
			$this->db->order_by('tgl_agenda', 'desc');
			$query = $this->db->get("tagenda");
			return $query->result();
		}

		public function view2(){
			$tahun_lalu = date("Y", strtotime("-1 years"));
			$this->db->where('YEAR(tgl_agenda)',$tahun_lalu);
			$this->db->order_by('tgl_agenda', 'desc');
			$query = $this->db->get("tagenda");
			return $query->result();
		}
		
		public function insert(){
			$data	= array(

							'id_jenissurat' 	=> $this->getIdJenisSurat(),
							'id_jenisarsip'		=> $this->getIdJenisArsip(),
							'kode_klasifikasi'	=> $this->getKodeKlasifikasi(),
							'tgl_agenda'		=> $this->getTglAgenda(),
							'no_surat'			=> $this->getNoSurat(),
							'no_urut'			=> $this->getNoUrut(),
							'no_sisipan'		=> $this->getNoSisipan(),
							'tgl_surat'			=> $this->getTglSurat(),
							'hal'				=> $this->getHal(),
							'isi_ringkas'		=> $this->getIsiRingkas(),
							'dari'				=> $this->getDari(),
							'tujuan'			=> $this->getTujuan(),
							'nip'				=> $this->getNip()
						
			);
		$this->db->insert('tagenda', $data);
		}
		
		public function update($id_agenda){
		$data	=	array(
							'id_jenissurat' 	=> $this->getIdJenisSurat(),
							'id_jenisarsip'		=> $this->getIdJenisArsip(),
							'kode_klasifikasi'	=> $this->getKodeKlasifikasi(),
							'tgl_agenda'		=> $this->getTglAgenda(),
							'no_surat'			=> $this->getNoSurat(),
							'no_urut'			=> $this->getNoUrut(),
							'no_sisipan'		=> $this->getNoSisipan(),
							'tgl_surat'			=> $this->getTglSurat(),
							'hal'				=> $this->getHal(),
							'isi_ringkas'		=> $this->getIsiRingkas(),
							'dari'				=> $this->getDari(),
							'tujuan'			=> $this->getTujuan(),
							'nip'				=> $this->getNip()
							
					);
		$this->db->where('id_agenda', $id_agenda);
		$this->db->update('tagenda', $data);
	}
	
	public function delete($id_agenda){
		$this->db->where('id_agenda', $id_agenda);
		$this->db->delete('tagenda');
	}
	
	
	
	}
?>