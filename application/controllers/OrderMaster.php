<?php

class OrderMaster extends CI_Controller {

    public function index() {
        $this->load->model( 'CMModel' );
        $results = $this->CMModel->joinedData( 'payments_master',['user_master'=>'user_master.id = payments_master.user_id'],'payments_master.*,user_master.first_name as first_name, user_master.last_name as last_name, user_master.email as email',false,'payment_id');
        $this->load->view( 'common/header.php' );
        $this->load->view( 'orders/list', ['result'=>$results] );
        $this->load->view( 'common/footer' );
    }

    function delete( $a ) {
        $this->load->Model( 'CMModel' );
        //fetch data to find course id
        $data = $this->CMModel->fetchData( 'chapter_master', ['id'=>$a ]);
        $chapter = current($data);
        $course_id = $chapter->course_id;
        $image = $chapter->featured_image;
        $video = $chapter->featured_video;
        if(file_exists(UPLOAD_PATH.$image))
        {
            unlink(UPLOAD_PATH.$image);
        }
        if(file_exists(UPLOAD_PATH.$video))
        {
            unlink(UPLOAD_PATH.$video);
        }
        // delete Now
        $response = $this->CMModel->deleteOne( 'chapter_master', ['id'=>$a ] );
        if ( $response ) {
            $this->session->set_flashdata( 'success', 'Chapter deleted successfully!' );
        } else {
            $this->session->set_flashdata( 'success', 'Chapter could not be deleted successfully!' );
        }
        redirect( 'admin/course/chapter/'.$course_id );
    }

    function add($cid) {
        $dataHolder = [];
        $dataHolder['cid'] = $cid;
        if ( $this->input->post( 'save' ) == 'save' ) {
            $this->form_validation->set_rules( 'course_id', 'Course Id', 'required' );
            $this->form_validation->set_rules( 'title', 'Chapter Title', 'required' );
            $this->form_validation->set_rules( 'slug', 'Slug', 'required' );
            $this->form_validation->set_rules( 'shortdescription', 'Short Description', 'required' );
            $this->form_validation->set_rules( 'detaildescription', 'Detail Description', 'required' );
            
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
                $data['course_id']          = $this->input->post( 'course_id' );
                $data['title']              = $this->input->post( 'title' );
                $data['slug']               = $this->input->post( 'slug' );
                $data['short_description']  = $this->input->post( 'shortdescription' );
                $data['detail_description'] = $this->input->post( 'detaildescription' );
                $data['created_by']         = $this->input->post( 'created_by');
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

                $response = $this->CMModel->insertOne('chapter_master',$data);
                if ( $response ) {
                    $this->session->set_flashdata('success','Chapter added successfully!');
                    redirect('admin/course/chapter/'.$cid);
                } else {
                    $this->session->set_flashdata('error','Chapter could not be added!');

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
        $this->load->view( 'chapter/add',$dataHolder);
        $this->load->view( 'common/footer.php' );
    }

    function edit( $id ) {
        $dataHolder = [];
        if ( $this->input->post( 'update' ) == 'update' ) {

            $this->form_validation->set_message( 'xss_clean', 'No Kiddies Please.    ' );
            $this->form_validation->set_rules( 'title', 'Title', 'required' );
            $this->form_validation->set_rules( 'shortdescription', 'Short Description', 'required' );
            $this->form_validation->set_rules( 'detaildescription', 'Detail Description', 'required' );
            $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
            $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');

            if ( $this->form_validation->run() ) {

                $data['title']              = $this->input->post( 'title' );
                $data['short_description']  = $this->input->post( 'shortdescription' );
                $data['detail_description']  = $this->input->post( 'detaildescription' );
                $course_id                  = $this->input->post('course_id');
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
                $id = $this->input->post( 'chapterid' );
                $result = $this->CMModel->updateOne('chapter_master',$data, ['id'=>$id]);
                if($result){
                $this->session->set_flashdata('success','Chapter updated successfully');
                }
                redirect('admin/course/chapter/'.$course_id );
            }
            else {
                $dataHolder['validationError'] = validation_errors();    
            }
        }    
            //loading model
            $result = $this->CMModel->fetchData( 'chapter_master', "id = '$id'");
            

            // Passing Values to update view
            if ( is_array( $result ) && count( $result )>0 ) {
                $dataHolder['row'] = current( $result );
            }
            
        
            $this->load->view( 'common/header.php' );
            $this->load->view( 'chapter/update', $dataHolder );
            $this->load->view( 'common/footer' );
        
        }
}    
