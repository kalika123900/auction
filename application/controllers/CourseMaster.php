<?php

class CourseMaster extends CI_Controller {

    public function index() {
        $this->load->model( 'CMModel' );
        $results = $this->CMModel->fetchData( 'course_master' );
        $this->load->model( 'LoginModel' );
        $this->load->view( 'common/header.php' );

        $this->load->view( 'course/courselist', ['result'=>$results] );

        $this->load->view( 'common/footer' );
    }

    function deletecourse( $a ) {
        $this->load->Model( 'CMModel' );
        $response = $this->CMModel->deleteOne( 'course_master', ['id'=>$a ] );
        if ( $response ) {
            $this->session->set_flashdata( 'success', 'Course deleted successfully!' );
        } else {
            $this->session->set_flashdata( 'success', 'Course could not be deleted successfully!' );
        }
        redirect( 'admin/course' );
    }

    function addcourse() {
        $dataHolder = [];
        if ( $this->input->post( 'save' ) == 'save' ) {
              
            $this->form_validation->set_rules( 'title', 'Course Title', 'required' );
            $this->form_validation->set_rules( 'slug', 'Slug', 'required' );
            $this->form_validation->set_rules( 'subject', 'Subject', 'required' );
            $this->form_validation->set_rules( 'shortdescription', 'Short Description', 'required' );
            $this->form_validation->set_rules( 'detaildescription', 'Deatil Description ', 'required' );
            $this->form_validation->set_rules( 'price', 'Price ', 'required' );
            $this->form_validation->set_rules( 'saleprice', 'Sale Price ', 'required' );
            $this->form_validation->set_rules( 'article', 'Number of Article ', 'required' );
            $this->form_validation->set_rules( 'vhours', 'Video hours ', 'required' );
            if (empty($_FILES['fimage']['name']))
            {
                $this->form_validation->set_rules('fimage', 'Featured Image', 'required');
            }
            if (empty($_FILES['fvideo']['name']))
            {
                $this->form_validation->set_rules('fvideo', 'Featured Video', 'required');
            }
            $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
            $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');

            if ( $this->form_validation->run() ) {
                $data['title']              = $this->input->post( 'title' );
                $data['slug']               = $this->input->post( 'slug' );
                $data['subject_id']         = $this->input->post('subject');
                $data['short_description']  = $this->input->post( 'shortdescription' );
                $data['detail_description'] = $this->input->post( 'detaildescription' );
                $data['price']              = $this->input->post( 'price' );
                $data['sale_price']         = $this->input->post( 'saleprice' );
                $data['numberof_article ']  = $this->input->post( 'article' );
                $data['video_hours']        = $this->input->post( 'vhours' );
                $data['created_by']         = $this->input->post( 'createdby');
                $data['lastmodified_by']    = $this->input->post( 'modifiedby');
                $videodata    = '';
                $imagedata    = '';

                $newConfig = [];
                $newConfig['upload_path'] = UPLOAD_PATH;
                $newConfig['allowed_types'] = 'jpg|jpeg|png';
                $newConfig['max_size'] = 2000000;
                $this->load->library( 'upload', $newConfig, 'image_upload' );
                $this->image_upload->initialize( $newConfig );

                if ( !$this->image_upload->do_upload( 'fimage' ) ) {
                    $error = array( 'error' => $this->upload->display_errors() );

                    print_r( $error );

                    echo 'Error in Image uploads';
                    die() ;
                } else {
                    $imagedata = $this->image_upload->data();
                    $data['featured_image'] = $imagedata['file_name'];
                }

                $newConfig = [];
                $newConfig['upload_path'] = UPLOAD_PATH;
                $newConfig['allowed_types'] = 'mp4';
                $newConfig['max_size'] = 2000000;

                $this->load->library( 'upload', $newConfig, 'video_upload' );
                $this->video_upload->initialize( $newConfig );

                if ( !$this->video_upload->do_upload( 'fvideo' ) ) {
                    $this->session->set_flashdata( 'error' , $this->upload->display_errors() );
                       die() ;
                } else {
                    $videodata = $this->video_upload->data();
                    $data['featured_video'] = $videodata['file_name'];
                }

                $response = $this->CMModel->insertOne('course_master',$data);
                if ( $response ) {
                    $this->session->set_flashdata('success','Course added successfully!');
                    redirect('admin/course');
                } else {
                    $this->session->set_flashdata('error','Course could not be added!');

                }
            } else {
                $dataHolder['validationError'] = validation_errors();           

            }

        }
        $dataHolder['subjects'] = $this->CMModel->fetchData('subject_master');
        $this->load->view( 'common/header.php' );
        $this->load->view( 'course/courseadd',$dataHolder);
        $this->load->view( 'common/footer.php' );
    }

    function updateCourse( $id ) {

        $dataHolder = [];
        if ( $this->input->post( 'update' ) == 'update' ) {
               
                $this->form_validation->set_message( 'xss_clean', 'No Kiddies Please.    ' );
                $this->form_validation->set_rules( 'title', 'Title', 'required' );
                $this->form_validation->set_rules( 'subject', 'Subject', 'required' );
                $this->form_validation->set_rules( 'shortdescription', 'Short Description', 'required' );
                $this->form_validation->set_rules( 'detaildescription', 'Detail Description ', 'required' );
                $this->form_validation->set_rules( 'price', 'Price','required');
                $this->form_validation->set_rules( 'saleprice', 'Sale Price','required' );
                $this->form_validation->set_rules( 'article', 'Number of Article','required' );
                $this->form_validation->set_rules( 'vhours', 'Video hours','required' );
                $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
                $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');
                
            

                if ( $this->form_validation->run() ) {

                    $data['title']              = $this->input->post( 'title' );
                    $data['subject_id']         = $this->input->post( 'subject' );
                    $data['short_description']  = $this->input->post( 'shortdescription' );
                    $data['detail_description'] = $this->input->post( 'detaildescription' );
                    $data['price']              = $this->input->post( 'price' );
                    $data['sale_price']         = $this->input->post( 'saleprice' );
                    $data['numberof_article']   = $this->input->post( 'article' );
                    $data['video_hours']        = $this->input->post( 'vhours' );
                    $data['type']               = $this->input->post( 'type');
                    $id                         = $this->input->post( 'courseid' );

                    if(!empty($_FILES['fimage']['name']))
                    {   
                        $config = [];
                        $config['upload_path'] = UPLOAD_PATH;
                        $config['allowed_types'] = 'jpg|jpeg|png|mp4';
                        $config['max_size'] = 2000000;
                        $this->load->library( 'upload', $config ,'fimage' );
                        $this->fimage->initialize( $config );
                        if ($this->fimage->do_upload( 'fimage' ) ) {
                            $imagedata = $this->fimage->data();
                            $data['featured_image'] = $imagedata['file_name'];
                        }
                    }
                    if(!empty($_FILES['fvideo']['name']))
                    {   
                        $config = [];
                        $config['upload_path'] = UPLOAD_PATH;
                        $config['allowed_types'] = 'jpg|jpeg|png|mp4';
                        $config['max_size'] = 2000000;
                        $this->load->library( 'upload', $config ,'fvideo' );
                        $this->fvideo->initialize( $config );
                        if ($this->fvideo->do_upload( 'fvideo' ) ) {
                            $videodata = $this->fvideo->data();
                            $data['featured_video'] = $videodata['file_name'];
                        }
                    }
                   
                    if(!empty($_FILES['course_content']['name']))
                    {   
                        $document_root = $_SERVER['DOCUMENT_ROOT'];

                        $dir = $document_root.'/uploads/course/';

                      
                        if($data['type']=='html')
                        {
                          
                          if(is_dir($dir.$id ))
                          {
                          

                            delete_directory($dir.$id);
                            
                            mkdir($dir.$id,0755);
                            $newFile = $dir.$id.'/'.$_FILES['course_content']['name'];
                            
                            move_uploaded_file($_FILES['course_content']['tmp_name'],$newFile);
                            chmod($newFile,0755);
                            $zip = new ZipArchive;
                            $res = $zip->open($dir.$id.'/'.$_FILES['course_content']['name']);
                            $data['course_content'] = '/uploads/course/'.$id.'/index.html';
                            if ($res === TRUE) {
                            $zip->extractTo($dir.$id );
                            $zip->close();
                          
                            } 
                            else 
                            {
                            
                            }    
                          }
                          else
                          {
                            mkdir($dir.$id,0755);
                            $newFile = $dir.$id.'/'.$_FILES['course_content']['name'];
                   
                            move_uploaded_file($_FILES['course_content']['tmp_name'],$newFile);
                            chmod($newFile,0755);
                            $zip = new ZipArchive;
                            $res = $zip->open($newFile);
                            $data['course_content'] = '/uploads/course/'.$id.'/index.html';
                            if ($res === TRUE) {
                            $zip->extractTo($dir.$id );
                            $zip->close();
                            
                            } else {
                          
                            }
                         
                          }
                        }
                        else
                        {

                        }
                    }
                    
                    $result = $this->CMModel->updateOne('course_master',$data, ['id'=>$id]);
                    if($result){
                    $this->session->set_flashdata('success','Course updated successfully');
                    }
                    redirect('admin/course');
                }
                else {
                    $dataHolder['validationError'] = validation_errors();    
                }
            }    
                //loading model
            $result = $this->CMModel->fetchData( 'course_master', "id = '$id'");
            

            // Passing Values to update view
            if ( is_array( $result ) && count( $result )>0 ) {
                $dataHolder['row'] = current( $result );
            }
            $dataHolder['subjects'] = $this->CMModel->fetchData('subject_master');
            
            $this->load->view( 'common/header.php' );
            $this->load->view( 'course/courseupdate', $dataHolder );
            $this->load->view( 'common/footer' );
        
        }
}    
