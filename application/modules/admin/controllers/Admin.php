<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Common_Back_Controller {

    public $data = "";

    function __construct() {
        parent::__construct();
        $this->check_admin_user_session();
        $this->load->model('admin_model');
    }

    public function index() { 
        
        $data['title'] = "Login | Register";
       
        $data['email'] = array('name' => 'email',
            'id' => 'email',
            'class'=> 'form-control',
            'type' => 'text',
            'value' => $this->form_validation->set_value('email'),
            'placeholder' => 'Email Id',
        );
        $data['password'] = array('name' => 'password',
            'id' => 'password',
            'class'=> 'form-control',
            'type' => 'password',
            'placeholder' => 'Password',
        );
        $this->load->view('login', $data);
    }

    public function login() {
        //$this->data['title'] = $this->lang->line('login_heading');
        if(!isset($_POST['email']) || !isset($_POST['password'])){
            redirect('admin/');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE){ 
          
            $errors = validation_errors();
            $this->session->set_flashdata('login_err', $errors);
            redirect('admin','refresh');
        } 
        else { 

            $data_val['email']      = $this->input->post('email');
            $data_val['password']   = $this->input->post('password'); 
            $isLogin = $this->admin_model->isLogin($data_val, ADMIN);
            if($isLogin){
                $this->session->set_flashdata('success', 'User authentication successfully done!. ');
                redirect('admin/dashboard');
            }
            else{
                $error = 'Invalid email or password';
                $this->session->set_flashdata('login_err', $error);
                redirect('admin','refresh');
            }
        }
        
    }

     public function logout() {

        $this->admin_logout(FALSE);
        $this->session->set_flashdata('success', 'Sign out successfully done! ');
        $response = array('status' => 1);
        echo json_encode($response);
        die;
    }
    
    public function dashboard() {
        $data['parent'] = "Dashboard";
        $data['title'] = "Dashboard";
        
        $this->load->admin_render('dashboard', $data, '');
    }

      //view admin profile
    public function admin_profile(){

        $data['title'] = "Admin profile";
        $where = array('id'=>$_SESSION[ADMIN_USER_SESS_KEY]['id']);
        $result = $this->common_model->getsingle(ADMIN,$where);
        $data['userData'] = $result;
        $this->load->admin_render('admin_profile', $data, '');
    }
    //update admin profile
    public function admin_update(){
        $this->form_validation->set_rules('fullName','name','trim|required');
        $this->form_validation->set_rules('email','email','trim|required');
        if($this->form_validation->run($this) == FALSE){
           $messages = (validation_errors()) ? validation_errors() : '';
           $response = array('status' => 0, 'message' => $messages);
        }
        else{
           $update_data = array();
            $image = array(); 
            $where_id = $this->input->post('admin_id');
            $existing_img = $this->input->post('exit_image');

            if (!empty($_FILES['image']['name'])) {
                $this->load->model('Image_model');
                $folder = 'user_avatar';
                $image = $this->Image_model->upload_image('image',$folder); //upload media of 
            }
            if(array_key_exists("error",$image) && !empty($image['error'])){
                $response = array('status' => 0, 'message' =>$image['error']); 
                echo json_encode($response); die;   
            }      
               
            if(array_key_exists("image_name",$image)){

                $admin_image = $image['image_name'];
                if(!empty($admin_image)){
                    $update_data['image'] = $admin_image;
                    $this->Image_model->delete_image(USER_AVATAR_PATH,$existing_img);
                }
            }

            $set = array('fullName','email');
            foreach ($set as $key => $val) {
                $post= $this->input->post($val);
                $update_data[$val] = (isset($post) && !empty($post)) ? $post :''; 
            }
            $update_where = array('id'=>$where_id);
            $userId = $this->common_model->updateFields(ADMIN, $update_data, $update_where);

           
            $u_id = $_SESSION[ADMIN_USER_SESS_KEY]['id'];
            $user = $this->common_model->getsingle(ADMIN, array('id'=>$u_id));
            //update session 
            $_SESSION[ADMIN_USER_SESS_KEY]['fullName']   = $user->fullName ;
            $_SESSION[ADMIN_USER_SESS_KEY]['email']      = $user->email ;
            $_SESSION[ADMIN_USER_SESS_KEY]['image']      = $user->image;
            $_SESSION[ADMIN_USER_SESS_KEY]['isLogin']    = TRUE ;
           
            $response = array('status' => 1, 'message' => 'Successfully Updated', 'url' => base_url('admin/admin_profile'));
           
        }
        echo json_encode($response); die;
    }

    public function changePassword()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('npassword', 'new password', 'trim|required|matches[rnpassword]|min_length[6]');
        $this->form_validation->set_rules('rnpassword', 'retype new password ','trim|required|min_length[6]');

        
       if($this->form_validation->run($this) == FALSE){
           $messages = (validation_errors()) ? validation_errors() : '';
           $response = array('status' => 0, 'message' => $messages);
        }
        else 
        {
            $password =$this->input->post('password');
            $npassword =$this->input->post('npassword');
            $select = "password";
            $where = array('id' => $_SESSION[ADMIN_USER_SESS_KEY]['id']); 
            $admin = $this->common_model->getsingle(ADMIN, $where,'password');
            if(password_verify($password, $admin->password)){
                $set =array('password'=> password_hash($this->input->post('npassword') , PASSWORD_DEFAULT)); 
                $update = $this->common_model->updateFields(ADMIN, $set, $where);
                if($update){
                    $res = array();
                    if($update){
                        $response = array('status' => 1, 'message' => 'Successfully Updated', 'url' => base_url('admin/admin_profile'));
                    }
                    else{
                         $response = array('status' => 0, 'message' => 'Failed! Please try again', 'url' => base_url('admin/admin_profile'));
                        
                    }
                    
                } 
            }else{
                 $response = array('status' => 0, 'message' => 'Your Current Password is Wrong !', 'url' => base_url('admin/admin_profile'));                 
            }
        }
        echo json_encode($response); die;  
    }//End Function
   

}