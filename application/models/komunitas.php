<?php 
class komunitas extends CI_Model{
    function get_komunitas(){ 
        $komunitasArr = $this->db->get('komunitas'); 
        if ($komunitasArr->num_rows() > 0){
            $detail=$komunitasArr->result_array();
            return $detail;
        }
        return false;
    }
    
    function save_komunitas($data){
        $komunitasArr = $this->db->insert('komunitas', $data);
        if ($komunitasArr){
          return true;
        }
        return false;  
        $this->CI->session->set_flashdata('message', 'ditambah');
    }

    // function detail_kom($id_kegiatan){
    //     $komunitasArr = $this->db->get_where('komunitas', 
    //     array ('id_kegiatan'=>$id_kegiatan));
    //     if ($komunitasArr->num_rows() > 0) {
    //      $detail  = $komunitasArr->result_array();          
    //      return $detail[0];
    //      }
    //      return false;
    // }

    function update_kom($id_kegiatan, $data){
        // if($_POST['lampiran'] != ''){
        //     $data['lampiran'] = $_POST['lampiran'];
        // }
        $this->db->set($data);
        $this->db->where('id_kegiatan', $id_kegiatan);
        $this->db->update('komunitas', $data);
     }

     function delete_kom($id_kegiatan){
        $query = $this->db->where('id_kegiatan', $id_kegiatan);
        $query = $this->db->delete('komunitas');
       }

    function getkomunitasById($id_kegiatan){
        $this->db->select('*');
        $this->db->from('komunitas');
        $this->db->where('id_kegiatan', $id_kegiatan);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            return $query->row();
        } else {
            return null;
        }
    }

    function getDetailKomunitasById($id_kegiatan){
        $this->db->where('id_kegiatan', $id_kegiatan);
        $query = $this->db->get('komunitas');
        return $query->result_array();
    }

    public function is_idkomunitas_exists($id_kegiatan){
		$query = $this->db->get_where('komunitas', array('id_kegiatan' => $id_kegiatan));
		return $query->num_rows()>0;
	}

    function replaceAndDeleteOldFile($lampiran_baru, $lampiran, $folder_penyimpanan){
        if (move_uploaded_file($lampiran_baru['tmp_name'], $folder_penyimpanan.$lampiran_baru['name'])){
            if(file_exists($folder_penyimpanan.$lampiran)){
                unlink($folder_penyimpanan.$lampiran);
            }
            return true;
        } else {
            return false;
        }
    }
}
