<?php 
class user extends CI_Model{
    function get_user(){ 
        $userArr = $this->db->get('user'); 
        if ($userArr->num_rows() > 0){
            $detail=$userArr->result_array();
            return $detail;
        }
        return false;
    }
    
    function save_user($data){
        $userArr = $this->db->insert('user', $data);
        if ($userArr){
          return true;
        }
        return false;   
    }
    
    function check_user($username, $password){
        $query=$this->db->get_where('user', array('username' => $username, 'password' =>$password));
        if ($query->num_rows() > 0) {
            $detail  = $query->result_array();          
            return $detail[0];
        }
    }

    function detail_usr($username){
        $userArr = $this->db->get_where('user', 
        array ('username'=>$username));
        if ($userArr->num_rows() > 0) {
         $detail  = $userArr->result_array();          
         return $detail[0];
         }
         return false;
    }

    function update_usr($username, $data){
        $this->db->where('username', $username);
        $this->db->update('user', $data);
     }

     function delete_usr($username){
        $query = $this->db->where('username', $username);
        $query = $this->db->delete('user');
       }

    public function update($data)
        {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $data['username']);
        $this->db->update('user', $data); 
       }

    public function is_username_exists($username){
		$query = $this->db->get_where('user', array('username' => $username));
		return $query->num_rows()>0;
	}
}
