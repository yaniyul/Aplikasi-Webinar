<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('user'); 

      } 

      public function index()
      {
          $data['userArr']=$this->user->get_user();
          
          $this->load->view('user/layout/header_profile');
          $this->load->view('user/layout/sidebar_profile');
          $this->load->view('user/profile', $data);
          $this->load->view('user/layout/footer');
          
      }
  
    public function changepass(){
        $password = $this->input->post('password');
        $new_password = $this->input->post('password_baru');
        $new_password_2 = $this->input->post('rpw');

        if($password == NULL or $new_password == NULL or $new_password_2 == NULL){
            $this->session->set_flashdata('error_gantipass', 'Password tidak boleh kosong');
            redirect('profile');
        }

        if($new_password != $new_password_2){
            $this->session->set_flashdata('error_gantipass2', 'Password baru tidak cocok');
            redirect('profile');
        }

        $data = array(
            'username' => $this->session->userdata('username'),
            'password' => $new_password
        );

        // var_dump($data);
        $this->user->update($data);
        $this->session->set_flashdata('message', 'Password berhasil diubah');
        redirect('profile');
}
}
