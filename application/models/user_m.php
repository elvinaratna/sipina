<?PHP
	class user_m extends CI_Model
	{
		
		public function getPegawai($nip){
        $this->db->where('nip', $nip); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('mpegawai')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
		}
		
		function validate($nip,$password){
			$this->db->where('nip',$nip);
			$this->db->where('password',$password);
			$result = $this->db->get('mpegawai',1);
			return $result;
		}
		
		public function update_user($nip, $userdata)
		{
			$this->db->where('nip', $nip);
			$this->db->update('mpegawai', $userdata);
		}

	}
?>