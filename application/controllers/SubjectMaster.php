<?php
class SubjectMaster extends CI_Controller{
    
    public function index(){
        $this->load->model('CMModel');
        $results = $this->CMModel->fetchData('subject_master');
        $this->load->model('LoginModel');
        $this->load->view('common/header.php');  
        $this->load->view('subject/list',['result'=>$results]);       
        $this->load->view('common/footer');
}
    function add()
    {   //Setting validation rules
        $dataHolder = [];
        if($this->input->post('save')=='save'){
           
            $this->form_validation->set_rules('subname','Subject Name','required');
            $this->form_validation->set_rules('subslug','Subject Slug','required');
            $this->form_validation->set_rules('subdescription','Subject Description ','required');
            $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
            $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');
            
            if($this->form_validation->run()){
                $subname = $this->input->post('subname');
                $subslug = $this->input->post('subslug');
                $subdescription = $this->input->post('subdescription');
                $newConfig = [];
                $newConfig['upload_path'] = UPLOAD_PATH;
                $newConfig['allowed_types'] = 'jpg|jpeg|png';
                $newConfig['max_size'] = 2000000;
                $this->load->library('upload', $newConfig); 
               
                if (!$this->upload->do_upload('subphoto'))
                {
                    $this->session->set_flashdata('error',$this->upload->display_errors());
                   
                }
                else 
                {
                    $photoData = $this->upload->data(); 
                    
                    $this->load->model('LoginModel');
                    $response = $this->LoginModel->insertSubject($subname,$subslug,$subdescription,$photoData['file_name']);
                    if($response)
                    {
                        $this->session->set_flashdata('success', 'Subject added successfully!');
                        redirect(site_url().'admin/subject');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Error in subject add, Please contact administrator!');
                    }
                }
                //loading model
                
            }
            else
            {
                $dataHolder['validationError'] = validation_errors();                 
            }
        }
        $this->load->view('common/header.php');
        $this->load->view('subject/add',$dataHolder); 
        $this->load->view('common/footer');
    }
         
    function getdetails($id)
    {   $dataHolder = [];
        
        if($this->input->post('update')=='update')
        {

            $this->form_validation->set_message('xss_clean', 'No Kiddies Please.    ');
            $this->form_validation->set_rules('subname','Subject Name','required');
            $this->form_validation->set_rules('subslug','Subject Slug','required');
            $this->form_validation->set_rules('subdescription','Subject Description ','required');
            $this->form_validation->set_rules('subid','Subject Id', 'required');
            $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
            $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');

            if($this->form_validation->run())
            {   
                $data['subject_name']        = $this->input->post('subname');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                $data['subject_slug']        = $this->input->post('subslug');
                $data['subject_description'] = $this->input->post('subdescription');
                $id                          = $this->input->post('subid');
               
               
                  if(!empty($_FILES['subphoto']['name'])){
                    $config['upload_path'] = UPLOAD_PATH;
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['max_size'] = 2000000;
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('subphoto')){
                        $photodata = $this->upload->data();
                        $data['subject_photo'] = $photodata['file_name'];                                                                                                                   
                    }
                }
                $result = $this->CMModel->updateOne('subject_master',$data, ['id'=>$id]);
                if($result)
                {
                    $this->session->set_flashdata('success','Subject updated successfully!');
                }
                redirect('admin/subject');   
            } 
            else {
                $dataHolder['validationError'] = validation_errors();           
            }  
            
            
        }
                //loading model
        $result = $this->CMModel->fetchData('subject_master',['id'=>$id]);
        
        // Passing Values to update view
        if(is_array($result) && count($result)>0)
        {
            $result = current($result);
            $dataHolder['row'] = $result;
            
        }
        $this->load->view('common/header.php');
        $this->load->view('subject/update',$dataHolder);
        $this->load->view('common/footer');
     }
    function deletesubject($usid){
        $response = $this->CMModel->deleteOne( 'subject_master', ['id'=>$usid ] );
        if ( $response ) {
            $this->session->set_flashdata( 'success', 'Subject deleted successfully!' );
        } else {
            $this->session->set_flashdata( 'success', 'Subject could not be deleted successfully!' );
        }
        redirect( 'admin/subject' );
    }
}
