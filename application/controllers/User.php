<?php
 
class User extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->cek_status();
        if($this->user_model->is_level() != "User"){
            redirect("auth");
        }
    }
 
    public function index(){
        $data['user'] = $this->user_model->get_user('users');
        $data['categories'] = $this->user_model->get('category');
        $this->load->view('user/index', $data);
    }

    public function tambah(){
        $data['user'] = $this->user_model->get_user('users');
        $this->load->view('user/tambah',$data);

    }

    public function tambahdata(){
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $status = $this->input->post('status');
 
        $data = array(
            'email' => $email,
            'name' => $name,
            'status' => $status
            );
        $this->user_model->tambah_data($data,'category');
        redirect('user/index');
    }

    public function hapus($id){
        $where = array('id' => $id);
        $this->user_model->hapus_data($where,'category');
        redirect('user/index');
    } 

    public function update($name){
        $where = array('name' => $name);
        $data['category'] = $this->user_model->edit_data($where,'category')->result();
        $data['user'] = $this->user_model->get_user('users');
        $this->load->view('user/update',$data);
    }

    public function updatedata(){
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $status = $this->input->post('status');
        $data = array(
            'email' => $email,
            'name' => $name,
            'status' => $status);
        $where = array('id' => $id);
        $this->user_model->update_data($where,$data,'category');
        redirect('user/index');
    }


}


?>