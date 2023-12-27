<?php 
class daftar_web extends CI_Model{
    function get_daftar_web(){ 
        $daftar_webArr = $this->db->get('daftar_web'); 
        if ($daftar_webArr->num_rows() > 0){
            $detail=$daftar_webArr->result_array();
            return $detail;
        }
        return false;
    }
    
    function save_daftar_web($data){
        $daftar_webArr = $this->db->insert('daftar_web', $data);
        if ($daftar_webArr){
          return true;
        }
        return false;   
    }

    function isAlreadyRegistered($id_webinar, $username){
        $this->db->where('id_webinar', $id_webinar);
        $this->db->where('username', $username);
        $query = $this->db->get('daftar_web');

        return $query->num_rows()>0;
    }

    function getWebinarByUsername($username){
        $this->db->where('username', $username);
        $query = $this->db->get('daftar_web');
        return $query->result_array();
    }

    function getWebinarById($id_webinar){
        $this->db->where('id_webinar', $id_webinar);
        $query = $this->db->get('daftar_web');
        return $query->result_array();
    }

    function countRegistrationByIdWebinar($id_webinar){
        $this->db->where('id_webinar', $id_webinar);
        //$this->db->from('daftar_web');
        return $this->db->count_all_results('daftar_web');
    }

    public function getJumlahPendaftarByIdWebinar($id_webinar){
        $this->db->where('id_webinar', $id_webinar);
        return $this->db->count_all_results('daftar_web');
    }

    
}