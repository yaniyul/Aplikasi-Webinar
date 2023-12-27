<?php 
class daftar_bel extends CI_Model{
    function get_daftar_bel(){ 
        $daftar_belArr = $this->db->get('daftar_bel'); 
        if ($daftar_belArr->num_rows() > 0){
            $detail=$daftar_belArr->result_array();
            return $detail;
        }
        return false;
    }
    
    function save_daftar_bel($data){
        $daftar_belArr = $this->db->insert('daftar_bel', $data);
        if ($daftar_belArr){
          return true;
        }
        return false;   
    }

    function isAlreadyRegistered($id_belmawa, $username){
        $this->db->where('id_belmawa', $id_belmawa);
        $this->db->where('username', $username);
        $query = $this->db->get('daftar_bel');

        return $query->num_rows()>0;
    }

    function getBelmawaByUsername($username){
        $this->db->where('username', $username);
        $query = $this->db->get('daftar_bel');
        return $query->result_array();
    }

    function getBelmawaById($id_belmawa){
        $this->db->where('id_belmawa', $id_belmawa);
        $query = $this->db->get('daftar_bel');
        return $query->result_array();
    }

    function countRegistrationByIdBelmawa($id_belmawa){
        $this->db->where('id_belmawa', $id_belmawa);
        //$this->db->from('daftar_bel');
        return $this->db->count_all_results('daftar_bel');
    }

    
}