<?php

class QuestionController extends CI_Controller {

    public function index($cid) {
        $this->load->model( 'CMModel' );
        $results = $this->CMModel->joinedData( 'question_master',['course_master'=>'course_master.id = question_master.course_id'],'question_master.*,course_master.title as course_title',"question_master.course_id = '$cid'");
      
        $course = $this->CMModel->fetchData('course_master',['id'=>$cid]);
        if(count($course)<1)
        {
            redirect('admin/dashboard');
        }
        $course = current($course);
        $this->load->view( 'common/header.php' );

        $this->load->view( 'question/list', ['result'=>$results,'course'=>$course,'cid'=>$cid] );

        $this->load->view( 'common/footer' );
    }

    function delete( $id ) {
        $this->load->Model( 'CMModel' );
        $response = $this->CMModel->deleteOne( 'question_master', ['id'=>$id] );
        if ( $response ) {
            $this->session->set_flashdata( 'success', 'Question deleted successfully!' );
        } else {
            $this->session->set_flashdata( 'error', 'Question could not be deleted successfully!' );
        }
        redirect( 'admin/course/questions'.$course_id );
    }

    function add($cid) {
        $dataHolder = [];
        $dataHolder['cid'] = $cid;
        if ( $this->input->post( 'save' ) == 'save' ) {
            $this->form_validation->set_rules( 'courseid', 'Course id', 'required' );
            $this->form_validation->set_rules( 'question', 'Question', 'required' );
            $this->form_validation->set_rules( 'a', 'Option a', 'required' );
            $this->form_validation->set_rules( 'b', 'Option b', 'required' );
            $this->form_validation->set_rules( 'c', 'Option c', 'required' );
            $this->form_validation->set_rules( 'd', 'Option d', 'required' );
            $this->form_validation->set_rules( 'answer', 'Answer', 'required' );
            
            if ( $this->form_validation->run() ) {
                $data['course_id']  = $this->input->post( 'course_id' );
                $data['question']   = $this->input->post( 'question' );
                $data['option_a']   = $this->input->post( 'a');
                $data['option_b']   = $this->input->post( 'b');
                $data['option_c']   = $this->input->post( 'c');
                $data['option_d']   = $this->input->post( 'd');
                $data['answer']     = $this->input->post( 'answer' );
                $data['status']     = 'active';

                 $response = $this->CMModel->insertOne('question_master',$data);
                if ( $response ) {
                    $this->session->set_flashdata('success','Question added successfully!');
                    redirect('admin/course/questions/'.$cid);
                } else {
                    $this->session->set_flashdata('error','Question could not be added!');

                }
            } else {
                $dataHolder['validationError'] = validation_errors();           

            }

        }
        $course_details = $this->CMModel->fetchdata('course_master',['id'=>$cid]);
        if(count($course_details)<1){
            redirect('admin/course');
        }
        $dataHolder['course_details'] = current($course_details);
        $this->load->view( 'common/header.php' );
        $this->load->view( 'question/add',$dataHolder);
        $this->load->view( 'common/footer.php' );
    }

    function edit( $id ) 
        {   $dataHolder = [];
        
            if($this->input->post('update')=='update')
            {
    
                $this->form_validation->set_message('xss_clean', 'No Kiddies Please.    ');
                $this->form_validation->set_rules('course_id','Course Id','required');
                $this->form_validation->set_rules('question','Question','required');
                $this->form_validation->set_rules('a','Option a','required');
                $this->form_validation->set_rules('b','Option b','required');
                $this->form_validation->set_rules('c','Option c', 'required');
                $this->form_validation->set_rules('d','Option d', 'required');
                //$this->form_validation->set_rules('answer','Answer', 'required');
                $this->form_validation->set_rules('status','Status', 'required');
                $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
                $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');
    
                if($this->form_validation->run())
                {   
                    $data['course_id']       = $this->input->post('course_id'); 
                    $data['question']        = $this->input->post('question');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                    $data['option_a']        = $this->input->post('a');
                    $data['option_b']        = $this->input->post('b');
                    $data['option_c']        = $this->input->post('c');
                    $data['option_d']        = $this->input->post('d');
                    $data['answer']          = $this->input->post('answer');
                    $data['status']          = $this->input->post('status');
                    $id                      = $this->input->post('questionid');
                   
                    $course_id = $data['course_id'];
                     
                    $result = $this->CMModel->updateOne('question_master',$data, ['id'=>$id]);
                    if($result)
                    {
                        $this->session->set_flashdata('success','Question updated successfully!');
                    }
                    redirect('admin/course/questions/'.$course_id);   
                } 
                else {
                    $dataHolder['validationError'] = validation_errors();           
                }  
                
                
            }
                    //loading model
            $result = $this->CMModel->fetchData('question_master',['id'=>$id]);
            
            // Passing Values to update view
            if(is_array($result) && count($result)>0)
            {
                $result = current($result);
                $dataHolder['row'] = $result;
            }
            $this->load->view('common/header.php');
            $this->load->view('question/update',$dataHolder);
            $this->load->view('common/footer');
         }
        
 } 
    
