<?php 
class belmawa extends CI_Model{
    function get_belmawa(){ 
        // $this->db->where('id_belmawa', 'asc');
        $belmawaArr = $this->db->get('belmawa'); 
        if ($belmawaArr->num_rows() > 0){
            $detail=$belmawaArr->result_array();
            return $detail;
        }
        return false;
    }
    
    function save_belmawa($data){
        $belmawaArr = $this->db->insert('belmawa', $data);
        if ($belmawaArr){
          return true;
        }
        return false;  
        $this->CI->session->set_flashdata('message', 'ditambah');
    }

    // function detail_bel($id_belmawa){
    //     $belmawaArr = $this->db->get_where('belmawa', 
    //     array ('id_belmawa'=>$id_belmawa));
    //     if ($belmawaArr->num_rows() > 0) {
    //      $detail  = $belmawaArr->result_array();          
    //      return $detail[0];
    //      }
    //      return false;
    // }

    function update_bel($id_belmawa, $data){
        $this->db->where('id_belmawa', $id_belmawa);
        $this->db->update('belmawa', $data);
     }

     function delete_bel($id_belmawa){
        $query = $this->db->where('id_belmawa', $id_belmawa);
        $query = $this->db->delete('belmawa');
       }

    function getbelmawaById($id_belmawa){
        $this->db->select('*');
        $this->db->from('belmawa');
        $this->db->where('id_belmawa', $id_belmawa);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            return $query->row();
        } else {
            return null;
        }
    }

    function getDetailbelmawaById($id_belmawa){
        $this->db->where('id_belmawa', $id_belmawa);
        $query = $this->db->get('belmawa');
        return $query->result_array();
    }

    public function is_idbelmawa_exists($id_belmawa){
		$query = $this->db->get_where('belmawa', array('id_belmawa' => $id_belmawa));
		return $query->num_rows()>0;
	}
}
