<?php
        class Data_m extends CI_Model{

                function tampil_data(){
                    return $this->db->get('tagenda');
                }

                 function input_data($data){
                    $this->db->insert('tagenda',$data);
                }

 
                function hapus_data($where){
                    $this->db->where($where);
                    $this->db->delete('tagenda');

                }

                function edit_data($where){                              
                    return $this->db->get_where('tagenda',$where);

                }

                 function update_data($where,$data){
                    $this->db->where($where);
                    $this->db->update('tagenda',$data);

                }             

}