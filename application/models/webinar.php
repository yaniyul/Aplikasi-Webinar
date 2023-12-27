<?php 
class webinar extends CI_Model{
    function get_webinar(){ 
        $webinarArr = $this->db->get('webinar'); 
        if ($webinarArr->num_rows() > 0){
            $detail=$webinarArr->result_array();
            return $detail;
        }
        return false;
    }
    
    function save_webinar($data){
        $webinarArr = $this->db->insert('webinar', $data);
        if ($webinarArr){
          return true;
        }
        return false;  
        $this->CI->session->set_flashdata('message', 'ditambah');
    }

    function detail_usr($id_webinar){
        $webinarArr = $this->db->get_where('webinar', 
        array ('id_webinar'=>$id_webinar));
        if ($webinarArr->num_rows() > 0) {
         $detail  = $webinarArr->result_array();          
         return $detail[0];
         }
         return false;
    }

    function update_web($id_webinar, $data){
        $this->db->where('id_webinar', $id_webinar);
        $this->db->update('webinar', $data);
     }

     function delete_web($id_webinar){
        $query = $this->db->where('id_webinar', $id_webinar);
        $query = $this->db->delete('webinar');
       }

    function getWebinarById($id_webinar){
        $this->db->select('*');
        $this->db->from('webinar');
        $this->db->where('id_webinar', $id_webinar);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            return $query->row();
        } else {
            return null;
        }
    }

    function getDetailWebinarById($id_webinar){
        $this->db->where('id_webinar', $id_webinar);
        $query = $this->db->get('webinar');
        return $query->result_array();
    }

    public function is_idwebinar_exists($id_webinar){
		$query = $this->db->get_where('webinar', array('id_webinar' => $id_webinar));
		return $query->num_rows()>0;
	}

    
}
