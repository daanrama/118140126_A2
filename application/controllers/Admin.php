<?php
 
class Admin extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->cek_status();
        if($this->admin_model->is_level() != "Admin"){
            redirect("auth");
        }
    }
 
    public function index(){
        $data['user'] = $this->admin_model->get_user('users');
        $data['categories'] = $this->admin_model->get('category');
        $this->load->view('admin/index', $data);
    }
    public function tambah(){
        $data['user'] = $this->admin_model->get_user('users');
        $this->load->view('admin/tambah',$data);

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
        $this->admin_model->tambah_data($data,'category');
        redirect('admin/index');
    }

    public function hapus($id){
        $where = array('id' => $id);
        $this->admin_model->hapus_data($where,'category');
        redirect('admin/index');
    } 

    public function update($name){
        $where = array('name' => $name);
        $data['category'] = $this->admin_model->edit_data($where,'category')->result();
        $data['user'] = $this->admin_model->get_user('users');
        $this->load->view('admin/update',$data);
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
        $this->admin_model->update_data($where,$data,'category');
        redirect('admin/index');
    }


}


?>