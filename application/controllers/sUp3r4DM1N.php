<?php
	class sUp3r4DM1N extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			$this->load->model('operator_m');
			 // Cek apakah terdapat session dengan nama authenticated
			if($this->session->userdata('logged_in') !== TRUE){ // Jika tidak ada
			  redirect('masuk'); // Redirect ke halaman login
			}
			}
	
	function index()
		 {
			 //Allowing akses to admin only
			  if($this->session->userdata('user_level')=='1'){
					$data			= array(); 
					$data ['op'] = $this->operator_m->view_data();
					$data ['bag'] = $this->operator_m->view_div();
					$this->load->view('operator_v',$data);
			  }else{
				  echo "Access Denied";
			  }
		 }
		 
	public function simpan()
    {
        $data = array(

            'nip'			=> $this->input->post('nip'),
            'nama'			=> $this->input->post('nama'),
            'id_divisi'		=> $this->input->post('id_divisi'),
			'password'		=> md5($this->input->post("password")),
			'user_level'	=> $this->input->post('user_level')

        );
		
        $this->operator_m->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data berhasil disimpan!
              </div>');

        //redirect
        redirect('sUp3r4DM1N');

    }
	
	public function edit($nip)
    {
        $nip = $this->uri->segment(3);

        $data = array(
            'operator' => $this->operator_m->edit($nip)
        );

        $this->load->view('edit_operator_v', $data);
    }
	
	    public function update()
    {
        $id['nip'] = $this->input->post("nip");
        $data = array(

            'nama'			=> $this->input->post("nama"),
            'id_divisi'		=> $this->input->post("id_divisi"),
			'password'		=> md5($this->input->post("password")),
			'user_level'	=> $this->input->post("user_level")

        );

        $this->operator_m->update($data, $nip);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data berhasil diperbarui!
              </div>');

        //redirect
        redirect('sUp3r4DM1N');

    }
	
	 public function hapus($nip)
    {
        $id['nip'] = $this->uri->segment(3);

        $this->operator_m->hapus($nip);

        //redirect
        redirect('sUp3r4DM1N');

    }

	
	}
	
		
?>
