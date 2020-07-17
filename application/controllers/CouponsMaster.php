<?php

class CouponsMaster extends CI_Controller {

    public function index() {
        $this->load->model( 'CMModel' );
        $data['result'] = $this->CMModel->fetchData('coupons_master',false,'id');
        $this->load->view( 'common/header.php' );
        $this->load->view( 'coupons/index',$data);
        $this->load->view( 'common/footer' );
    }

    function delete( $a ) {
        $this->load->Model( 'CMModel' );
        //fetch data to find course id
        $data = $this->CMModel->fetchData( 'coupons_master', ['id'=>$a ]);
        // delete Now
        $response = $this->CMModel->deleteOne( 'coupons_master', ['id'=>$a ] );
        if ( $response ) {
            $this->session->set_flashdata( 'success', 'Coupons deleted successfully!' );
        } 
        else {
            $this->session->set_flashdata( 'success', 'Coupons could not be deleted successfully!' );
        }
        redirect( 'admin/coupons/');
    }

    function create(){
        if ( $this->input->post( 'save' ) == 'save' ) {
            $this->form_validation->set_rules( 'coupon_code', 'Coupon Code', 'required' );
            $this->form_validation->set_rules( 'redumption_per_user', 'Redumption Per User', 'required' );
            $this->form_validation->set_rules( 'validity_date', 'Validity Date', 'required' );
            $this->form_validation->set_rules( 'discount_type', 'Discount Type', 'required' );
            $this->form_validation->set_rules( 'discount_amount', 'Discount Amount', 'required' );
            
            if ( $this->form_validation->run() ) {
                $data['coupon_code']                = $this->input->post( 'coupon_code' );
                $data['coupon_type']                = $this->input->post( 'coupon_type' );
                $data['redumption_per_user']        = $this->input->post( 'redumption_per_user' );
                $data['validity_date']              = $this->input->post( 'validity_date' );
                $data['discount_type']              = $this->input->post( 'discount_type' );
                $data['discount_amount']            = $this->input->post( 'discount_amount');
                if($data['coupon_type']=='specific')
                {
                    $data['assigned_users'] = $this->input->post('specific_user');
                }
                $response = $this->CMModel->insertOne('coupons_master',$data);
                if ( $response ) {
                    $this->session->set_flashdata('success','Chapter added successfully!');
                    redirect('admin/coupons/');
                } 
                else 
                {
                    $this->session->set_flashdata('error','Something went wrong, please check all the entries!');
                }
            } 
            else 
            {  
                 $this->session->set_flashdata('error',validation_errors());           
            }
        }
      
        $this->load->view('common/header.php');
        $this->load->view('coupons/add.php');
        $this->load->view('common/footer.php');
    }

}    
