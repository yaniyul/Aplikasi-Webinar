<?php 
class daftar_kom extends CI_Model{
    function get_daftar_kom(){ 
        $daftar_komArr = $this->db->get('daftar_kom'); 
        if ($daftar_komArr->num_rows() > 0){
            $detail=$daftar_komArr->result_array();
            return $detail;
        }
        return false;
    }
    
    function save_daftar_kom($data){
        $daftar_komArr = $this->db->insert('daftar_kom', $data);
        if ($daftar_komArr){
          return true;
        }
        return false;   
    }

    function isAlreadyRegistered($id_kegiatan, $username){
        $this->db->where('id_kegiatan', $id_kegiatan);
        $this->db->where('username', $username);
        $query = $this->db->get('daftar_kom');

        return $query->num_rows()>0;
    }

    function getKegiatanByUsername($username){
        $this->db->where('username', $username);
        $query = $this->db->get('daftar_kom');
        return $query->result_array();
    }

    function getKegiatanById($id_kegiatan){
        $this->db->where('id_kegiatan', $id_kegiatan);
        $query = $this->db->get('daftar_kom');
        return $query->result_array();
    }

    function countRegistrationByIdkegiatan($id_kegiatan){
        $this->db->where('id_kegiatan', $id_kegiatan);
        //$this->db->from('daftar_kom');
        return $this->db->count_all_results('daftar_kom');
    }

    
}