<?php

class LoginModel extends CI_Model {

    public function login_user( $email, $password ) {
        $query = $this->db->get_where( 'user_master', array( 'email'=> $email, 'password' => md5( $password ) ), 1, 0 );
        if ( $query->num_rows() == 1 ) {
            $row = $query->row();
            return $row;
        } else {
            return false;
        }
    }

  public function insertSubject( $subname, $subslug, $subdescription, $subphoto ) {
        $data = array(
            'subject_name'=>$subname,
            'subject_slug'=>$subslug,
            'subject_description'=>$subdescription,
            'Subject_photo'=>$subphoto,
        );
        $sql_query = $this->db->insert( 'subject_master', $data );
        if ( $sql_query ) {
            {
                return true;
            }
        } else {

            $this->session->set_flashdata( 'error', 'Somthing went worng. Error!!' );
            return false;

        }
    }
    public function insertuser( $fname,$lname,$email,$password,$phonenumber,$profilepicture){
        $data = array(
            'first_name'=>$fname,
            'last_name'=>$lname,
            'email'=>$email,
            'password'=>md5($password),
            'phone_number'=>$phonenumber,
            'profile_picture'=>$profilepicture,
            'role' => 'subadmin'
        );
        if(!$sql_query = $this->db->insert( 'user_master', $data ))
        {
            echo '<pre>';
            print_r($this->db->error()); die();
    
        }
        if ( $sql_query ) {
            {
                return true;
            }
        } else if($this->db->error()){
            echo '<pre>';
            print_r($this->db->error()); die();
        } else{

            $this->session->set_flashdata( 'error', 'Somthing went worng. Error!!' );
            return false;

        }
    }
    

    public function getdata() {
        $query = $this->db->select( 'id,subject_name,subject_slug,subject_description,subject_photo,status' )
        ->get( 'subject_master' );
        return $query->result();
    }

    public function getuserdetail( $uid ) {

        $ret = $this->db->select( 'subject_name,subject_slug,subject_description,subject_photo,status', 'id' )
        ->where( 'id', $uid )
        ->get( 'subject_master' );
        return $ret->row();
    }

    public function updatedetails( $subname, $subslug, $subdescription, $photodata, $id ) {

        $data = array(
            'subject_name'=>$subname,
            'subject_slug'=>$subslug,
            'subject_description'=>$subdescription,
            'subject_photo'=>$photodata
        );
        $sql_query = $this->db->where( 'id', $id );
        $this->db->update( 'subject_master', $data, array( 'id'=>$id ) );

        if ( $sql_query ) {
            return true;
        } else {
            $this->session->set_flashdata( 'error', 'Somthing went worng. Error!!' );
            return false;
        }
    }

    public function deleterow( $usid ) {
        $sql_query = $this->db->where( 'id', $usid )->delete( 'subject_master' );

        if ( $sql_query ) {
            return true;
        } else {
            $this->session->set_flashdata( 'error', 'Somthing went worng. Error!!' );
            return false; 
        }
    }

 


}

?>
