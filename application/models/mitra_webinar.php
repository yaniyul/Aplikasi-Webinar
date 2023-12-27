<?php 
class mitra_webinar extends CI_Model{
    function get_mitra_webinar(){ 
        $mitraArr = $this->db->get('mitra_webinar'); 
        if ($mitraArr->num_rows() > 0){
            $detail=$mitraArr->result_array();
            return $detail;
        }
        return false;
    }
    
    function save_mitra($data){
        $mitraArr = $this->db->insert('mitra_webinar', $data);
        if ($mitraArr){
          return true;
        }
        return false;   
    }

    function detail_mit($id_mitra){
        $mitraArr = $this->db->get_where('mitra_webinar', 
        array ('id_mitra'=>$id_mitra));
        if ($mitraArr->num_rows() > 0) {
         $detail  = $mitraArr->result_array();          
         return $detail[0];
         }
         return false;
    }

    function update_mit($id_mitra, $data){
        $this->db->where('id_mitra', $id_mitra);
        $this->db->update('mitra_webinar', $data);
     }

     function delete_mit($id_mitra){
        $query = $this->db->where('id_mitra', $id_mitra);
        $query = $this->db->delete('mitra_webinar');
       }

    public function is_idmitra_exists($id_mitra){
		$query = $this->db->get_where('mitra_webinar', array('id_mitra' => $id_mitra));
		return $query->num_rows()>0;
	}
}
?>