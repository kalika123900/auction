<?php

class AdminController extends CI_Controller{
        
public function __construct()
     {
          parent::__construct();
          
        $this->load->database();
        $this->load->library('session');
        $this->load->model('LoginModel');
        $this->load->library('form_validation');
          
      }
   
  function index()
  {   $data = [];
      if($this->input->post('submit')==true)
      {
          $email    = $this->input->post('email');
          $password = $this->input->post('password');
          $result = $this->LoginModel->login_user($email, $password);
          if($result) 
          { $row = $result;
            $data = array(
              'id' => $row->id,
              'display_name' => ucfirst( $row->first_name ).' '.ucfirst( $row->last_name ),
              'email' => $row->email,
              'password'=>$row->password,
              'is_logged_in' => TRUE,
              'validated' => true
          );
          $this->session->set_userdata( $data );
          redirect('admin/dashboard');
          }
          else 
          {
            $data['error'] = 'Invalid user credentials, Please try again.';
          }
        }
      $this->load->view('login',$data);
  }
  public function is_logged_in()
    {
      $is_logged_in = $this->session->userdata('is_logged_in');
     
      if (!isset($is_logged_in) || $is_logged_in != true)
      {
        redirect("Login");
      }
      else{
        $this->session->set_flashdata('error','you are not loggedin please try again');
      }
  }
  function dashboard(){
    $this->load->view('dashboard/index');
  }
  function logout(){
    redirect('/');
  }
   function list(){
    $this->load->model('CMModel');
    $results = $this->CMModel->fetchData('user_master');
    $this->load->view('common/header.php');  
    $this->load->view('user/list',['result'=>$results]);       
    $this->load->view('common/footer');
   }
  
   function add()
  { 
    $dataHolder = [];
    if($this->input->post('save')=='save'){
      $this->form_validation->set_rules('fname', 'First Name', 'required');
      $this->form_validation->set_rules('lname', 'Last Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('password', 'cpassword', 'required');
      $this->form_validation->set_rules('phonenumber', 'phonenumber', 'required');
      //$this->form_validation->set_rules('profilepicture', 'profilepicture', 'required');
      $this->form_validation->set_message('required', 'Enter %s');

      if($this->form_validation->run())
      {
        $fname          = $this->input->post('fname');
        $lname          = $this->input->post('lname');
        $email          = $this->input->post('email');
        $password       = $this->input->post('password');
        $cpassword       = $this->input->post('cpassword');
        
        if($password!=$cpassword):

           $this->session->set_flashdata('error','Password and confirm password did not matched!');
        
        else:
        $phonenumber    = $this->input->post('phonenumber');
        
        $profilepicture = '';
        $newConfig = [];
        $newConfig['upload_path'] = UPLOAD_PATH;
        $newConfig['allowed_types'] = 'jpg|jpeg|png';
        $newConfig['max_size'] = 2000000;
        $this->load->library('upload', $newConfig); 

       
       
        if (!$this->upload->do_upload('profilepicture'))
        {
            $this->session->set_flashdata('error',$this->upload->display_errors());
           
        }
        else 
        {
            $photoData = $this->upload->data(); 
            
            $this->load->model('LoginModel');
            $response = $this->LoginModel->insertuser($fname,$lname,$email,$password,$phonenumber,$photoData['file_name']);
            if($response)
            {
                $this->session->set_flashdata('success', 'User added successfully!');
                redirect(site_url().'admin/user');
            }
            else
            {
                $this->session->set_flashdata('error', 'Error in subject add, Please contact administrator!');
            }
        }
        //loading model
      endif;
        
    }
    else
    {
        $dataHolder['validationError'] = validation_errors();                 
    }
}
      $this->load->view('common/header.php');
      $this->load->view('user/add',$dataHolder); 
      $this->load->view('common/footer');
}
function edit($id)
{   $dataHolder = [];
    
    if($this->input->post('update')=='update')
    {

        $this->form_validation->set_message('xss_clean', 'No Kiddies Please.    ');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('phonenumber', 'phonenumber', 'required');
        $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
        $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');

        if($this->form_validation->run())
        {   
            $data['first_name']   = $this->input->post('fname');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            $data['last_name']    = $this->input->post('lname');
            $data['email']        = $this->input->post('email');
            $data['password']     = $this->input->post('password');
            $data['phone_number'] = $this->input->post('phonenumber');
            $id                   = $this->input->post('userid');
           
           
              if(!empty($_FILES['profilepicture']['name'])){
                $config['upload_path'] = UPLOAD_PATH;
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2000000;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('profilepicture')){
                    $photodata = $this->upload->data();
                    $data['profile_picture'] = $photodata['file_name'];                                                                                                                   
                }
            }
            $result = $this->CMModel->updateOne('user_master',$data, ['id'=>$id]);
            if($result)
            {
                $this->session->set_flashdata('success','User updated successfully!');
            }
            redirect('admin/user');   
        } 
        else {
            $dataHolder['validationError'] = validation_errors();           
          }  
        
      }
            //loading model
        $result = $this->CMModel->fetchData('user_master',['id'=>$id]);
    
    // Passing Values to update view
    if(is_array($result) && count($result)>0)
    {
        $result = current($result);
        $dataHolder['row'] = $result;
        
    }
      $this->load->view('common/header.php');
      $this->load->view('user/update',$dataHolder);
      $this->load->view('common/footer');
 }
   function delete($id)
  {
    $response = $this->CMModel->deleteOne( 'user_master', ['id'=>$id ] );
    if ( $response ) {
        $this->session->set_flashdata( 'success', 'User deleted successfully!' );
    } else {
        $this->session->set_flashdata( 'success', 'User could not be deleted successfully!' );
    }
    redirect( 'admin/user' );
}
function awaiting_companies(){
    $this->load->model('CMModel');
    $results = $this->CMModel->fetchData('user_master',['role'=>'company','status'=>'inactive']);
    $this->load->view('common/header.php');  
    $this->load->view('user/company-list',['result'=>$results]);       
    $this->load->view('common/footer');
}
}
?>