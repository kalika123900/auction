<?php
class CategoryMaster extends CI_Controller{
    
    public function index(){
        $this->load->model('CMModel');
        $results = $this->CMModel->fetchData('category_master');
        $this->load->model('LoginModel');
        $this->load->view('common/header.php');  
        $this->load->view('category/list',['result'=>$results]);       
        $this->load->view('common/footer');
}
    function add()
    {   //Setting validation rules
        //echo correct;die;
        
        $dataHolder = [];
        if($this->input->post('save')=='save'){
           
            $this->form_validation->set_rules('category_name','Category Name','required');
            
            $this->form_validation->set_rules('category_slug','Category Slug','required');
            $this->form_validation->set_rules('category_description','Category Description ','required');
            $this->form_validation->set_rules('parent_id','Parent Category ','required');
            $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
            $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');
            $data = [];
            if($this->form_validation->run()){
                $data['category_name']          = $this->input->post('category_name');
                $data['category_slug']          = $this->input->post('category_slug');
                $data['category_description']   = $this->input->post('category_description');
                $data['parent_id']              = $this->input->post('parent_id');
     
                $response = $this->CMModel->insertOne('category_master',$data);
                if($response)
                {
                    $this->session->set_flashdata('success','Category added successfully!');
                }       
             }

            else
            {
                 $this->session->set_flashdata('error',validation_errors());                 
            }
        }
        $dataHolder['categories'] = $this->CMModel->fetchData('category_master');
        $this->load->view('common/header.php');
        $this->load->view('category/add',$dataHolder); 
        $this->load->view('common/footer');
    }
         
    function getdetails($id)
    {   $dataHolder = [];
        
        if($this->input->post('update')=='update')
        {

            $this->form_validation->set_message('xss_clean', 'No Kiddies Please.    ');
            $this->form_validation->set_rules('category_name','Category Name','required');
            $this->form_validation->set_rules('category_slug','Category Slug','required');
            $this->form_validation->set_rules('category_description','Category Description ','required');
            $this->form_validation->set_rules('parent_id','Parent Category ','required');
            $this->form_validation->set_rules('category_id','Category Id', 'required');
            $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
            $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');

            if($this->form_validation->run())
            {   
                $data['category_name']        = $this->input->post('category_name');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                $data['category_slug']        = $this->input->post('category_slug');
                $data['category_description'] = $this->input->post('category_description');
                $data['parent_id']            = $this->input->post('parent_id');
                $id                           = $this->input->post('category_id');
                
                $result = $this->CMModel->updateOne('category_master',$data, ['id'=>$id]);
                if($result)
                {
                    $this->session->set_flashdata('success','Category updated successfully!');
                }
                redirect('admin/category');   
            } 
            else {
                $dataHolder['validationError'] = validation_errors();           
            }  
            
            
        }
                //loading model
        $result = $this->CMModel->fetchData('category_master',['id'=>$id]);
        
        // Passing Values to update view
        if(is_array($result) && count($result)>0)
        {
            $result = current($result);
            $dataHolder['row'] = $result;
            
        }
        $dataHolder['categories'] = $this->CMModel->fetchData('category_master');
        $this->load->view('common/header.php');
        $this->load->view('category/update',$dataHolder);
        $this->load->view('common/footer');
     }
    function delete($id){
        $response = $this->CMModel->deleteOne( 'category_master', ['id'=>$id ] );
        if ( $response ) {
            $this->session->set_flashdata( 'success', 'Category deleted successfully!' );
        } else {
            $this->session->set_flashdata( 'success', 'Category could not be deleted successfully!' );
        }
        redirect('admin/category');
    }
}
