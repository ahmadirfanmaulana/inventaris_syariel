<?php
  /**
   *
   */
  class User extends CI_Controller
  {
    public function index()
    {
      $data['active'] = 'akun';

      $this->load->model('ModelofUser');
      $data["query"] = $this->ModelofUser->getAllData();
      $data['content']='user_view';
      $this->load->view("template",$data);

    }
    function hapus($id){
        $this->db->delete('user',array('id' => $id));
        redirect('user');
    }
  }

 ?>
