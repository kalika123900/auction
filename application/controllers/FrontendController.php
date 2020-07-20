<?php
class FrontendController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CMModel');
        $this->lang->load('en','english');
    }
   function index()
   {
      $data= [];
      $data['userdata'] = $this->isLoggedIn();
      $data['user']  = $this->CMModel->fetchData('user_master');
      $this->load->view('frontend/common/header',$data);
      $this->load->view('home',$data);
      $this->load->view('frontend/common/footer',$data);
   }
   function isLoggedIn(){
     $userdata = $this->session->userdata();
     if(isset($userdata['id']))
     {
       return $userdata;
     }
     else if($_SERVER['SCRIPT_URL']!='/')
     {
       redirect('/');
     }
     else
     {
       return -1;
     }
   }
   function checkout()
   {
    $data['user_data'] = $this->session->userdata();
    $data['course']  = $this->CMModel->fetchData('course_master');
    $this->load->view('frontend/common/header',$data);
    $this->load->view('frontend/course/checkout',$data);
    $this->load->view('frontend/common/footer',$data);
   }
  function add($slug)
  {
    //echo"<h1>The Page is on Working Stage</h1>";die;
    $this->load->library('cart');
    $result  = $this->CMModel->fetchData('course_master',['slug'=>$slug]);
    if(count($result)>0)
    {
      $result = $result[0];
      if($result->sale_price==0)
      {
        $price = $result->price;
        $is_offered = 0;
      }
      else {
        $price  = $result->sale_price;
        $is_offered = 1;
      }
      $data   = array(  
        'id'            =>'UPS_'.$result->id,
        'qty'           => 1,
        'options'       => array('featured_image'=> $result->featured_image,'is_offered'=>$is_offered,'price'=>$result->price),
        'name'          => $result->title,
        'price'         => $price,
        );    
      $this->cart->insert($data);
      }
     redirect('checkout');
  }
  function remove($rowid)
  {
    $data = array(
      'rowid' => $rowid,
      'qty'   => 0
    );

    $this->cart->update($data);
    redirect('checkout');
  }
  public function study($courseId){
    $course = $this->CMModel->fetchData('course_master',['id'=>$courseId]);
    $data['course'] = $course;
    $userData = $this->session->userdata();
    if(isset($userData['id']))
    {

      $user_id = $userData['id'];
      $courseAssociated = $this->CMModel->fetchData('purchased_course',['course_id'=>$courseId,'user_id'=>$user_id]);

      if(count($courseAssociated)==0 && count($course)>0)
      {
        redirect(site_url('course/'.$course[0]->slug));
      }
      else if(count($course)==0)
      {
        redirect(site_url());
      }
    }
    else
    {
      redirect(site_url());
    }
    $notes = $this->CMModel->fetchData('notes_master',['course_id'=>$courseId,'user_id'=>$user_id]);
    if(count($notes)>0)
    {
      $notes = current($notes);
      $data['notes'] = $notes->notes;
    }
    else
    {
      $data['notes'] = '';
    }
    if($course[0]->type=='html')
    {
      $this->load->view('frontend/common/header.php');
      $this->load->view('frontend/studying/in-course.php',$data);
      $this->load->view('frontend/common/footer.php');
    }
    else if($course[0]->type=='video')
    {
      $this->load->view('frontend/common/header.php');
       $this->load->view('frontend/studying/in-course.php',$data);
      $this->load->view('frontend/common/footer.php');
    }

  }
  public function profile(){
    $userdata = $this->session->userdata();
    if(isset($userdata['id'])){
        $id = $userdata['id'];
    }
    else {
      redirect(site_url());
    }
    $data['userdata'] = $userdata;
    if(isset($_POST['save']))
    {
     $data = $_POST;
     $data_master['first_name']     = $this->input->post('first_name');
     $data_master['last_name']      = $this->input->post('last_name');
     $data_master['email']          = $this->input->post('email');
     $data_master['phone_number']   = $this->input->post('phone_number');
     $data_master['updated_on']    = date('Y-m-d h:i:s');
     
     $data_details['user_id'] = $id;
     $data_details['gender']  = $this->input->post('gender');
     $data_details['website'] = $this->input->post('website');
     $data_details['fb_link'] = $this->input->post('fb_link');
     $data_details['tw_link'] = $this->input->post('tw_link'); 
     $data_details['lk_link'] = $this->input->post('lk_link');
     $data_details['yt_link'] = $this->input->post('yt_link');
      print_r($data_master);die;
     $this->CMModel->updateOne('user_master',$data_master,['id'=>$id]);
     $this->CMModel->insertOrUpdate('user_details',$data_details);
    }
    if(isset($_POST['save_image']))
    {
      $id = $this->session->userdata()['id'];
      $newConfig['upload_path'] = UPLOAD_PATH;
      $newConfig['allowed_types'] = 'gif|jpg|png';
      $newConfig['max_size'] = 10000;
      $newConfig['max_width'] = 1500;
      $newConfig['max_height'] = 1500;

      $this->load->library( 'upload', $newConfig, 'image_upload' );
      $this->image_upload->initialize( $newConfig );
     
      if (!$this->image_upload->do_upload('profile_picture')) {
            $error = array('error' => $this->image_upload->display_errors());
            $this->session->set_flashdata('error',$error['error']);
      } else {
          $images_data = $this->image_upload->data();
          $this->CMModel->updateOne('user_master',['profile_picture'=>$images_data['file_name']],['id'=>$id]);
          $this->session->set_userdata(['profile_picture'=>$images_data['file_name']]);
      }
    }
    if(isset($_POST['change_password']) && $_POST['change_password'])
    {
        $this->form_validation->set_message('xss_clean', 'No Kiddies Please.    ');
        $this->form_validation->set_rules('current_password', 'Current Password', 'required');
        $this->form_validation->set_rules('new_password', 'New Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
        $this->form_validation->set_rules('user_id', 'Profile ID', 'required');
        if($this->form_validation->run())
        {   
          $current_password =  $this->input->post('current_password');  
          $new_password     =  $this->input->post('new_password');
          $confirm_password =  $this->input->post('confirm_password');
          $user_id          =  $this->input->post('user_id');
          if($new_password==$confirm_password)
          {
            $userdetails = $this->CMModel->fetchData('user_master',['id'=>$user_id]);         
            if(count($userdetails)>0)
            {
              $userdetails = current($userdetails);
              if(md5($current_password)==$userdetails->password)
              {
                $this->CMModel->updateOne('user_master',['password'=>md5($new_password)],['id'=>$user_id]);
                $this->session->set_flashdata('success','Your password has been changed successfully!');
              }
              else
              {
                $this->session->set_flashdata('error' , 'Current password is invalid, please try again!');
              }
            } 
            else
            {
              $this->session->set_flashdata('error' , 'Something went wrong, Refresh the page and try again!');
            }
          } 
          else
          {
              $this->session->set_flashdata('error' , 'Confirm password did not matched with new password');
          }
        } 
        else 
        {
           $this->session->set_flashdata('error' ,validation_errors());   
        }  
        redirect('/profile?target=password');
    }
    $userdata = $this->CMModel->fetchData('user_master',['id'=>$id]);
    $userdetails = $this->CMModel->fetchData('user_details',['user_id'=>$id]);
    $userMaster  = $userdata[0];
    if(count($userdetails)>0)
    {
      $userDetail  = $userdetails[0];
    }
    else {
      $userDetail = new stdClass(); 
    }
    
    $obj_merged = (object) array_merge((array) $userMaster, (array) $userDetail); 

    $data['userData'] = $obj_merged;
    $data['purchased_course'] = $this->CMModel->purchased_course($this->session->userdata()['id']);
    $this->load->view('frontend/common/header.php',$data);
    $this->load->view('frontend/profile/index.php',$data);
    $this->load->view('frontend/common/footer.php',$data);
  }
  public function logout(){
    $this->session->sess_destroy();
    redirect(site_url());
  }
  public function payment_process(){
    $data['user_data'] = $this->session->userdata();
    $data['course']  = $this->CMModel->fetchData('course_master');

    $this->load->view('frontend/common/header.php');
    $this->load->view('frontend/payment-process.php',$data);
    $this->load->view('frontend/common/footer.php');
  }
  public function product_landing($slug){
    $slug = strtolower($slug);
    $product = $this->CMModel->joinedData('product_management',['product_images'=>'product_images.product_id = product_management.id'],"product_management.*,  GROUP_CONCAT(`product_images`.`image_name` SEPARATOR ',') as product_images, GROUP_CONCAT(`product_images`.`is_featured` SEPARATOR ',') as featured_state",["product_management.product_slug" => "$slug"],false,['product_management.id']);
    
    if(count($product)<1)
    {
      redirect('404');
    }
    else
    {
      $userdata = $this->session->userdata();
      if(isset($userdata['id'])){
          $id = $userdata['id'];
      }
     
      $data['userdata']       = $userdata;
      $data['product']        = $product = current($product);
      $bdQuery                = $this->db->query("SELECT a.category_name as category_name, a.category_slug as category_slug, b.category_name as parent_name, b.category_slug as parent_slug FROM category_master as a LEFT JOIN category_master as b ON b.id = a.parent_id WHERE a.id = '$product->product_category'");
      $data['breadcrumb']     = $bdQuery->result();  
      $data['vendor']         = current($this->CMModel->fetchData('user_master',['id'=>$product->product_vendor_id]));
      $data['auctionItem']    = $this->CMModel->fetchData('auction_master',['product_id'=>$product->product_vendor_id]);
      $data['productCount']   = current($this->CMModel->joinedData('user_master',['product_management'=>'product_management.product_vendor_id = user_master.id'],'count(product_management.id) as productCount',['user_master.id'=>$product->product_vendor_id]));
     
      $this->load->view('frontend/common/header.php',$data);
      $this->load->view('frontend/product.php',$data);
      $this->load->view('frontend/common/footer.php',$data);
    
    }

  }
  public function pay_now(){
    
    $this->load->library('paypal_lib');

    $returnURL = base_url().'payment/success';
    $cancelURL = base_url().'payment/cancel';
    $notifyURL = base_url().'payment/ipn';
    
    $cart = $this->cart->contents(); 
    
    if(count($cart)==0)
    {
      redirect(site_url()); die();
    }
    // Get product data from the database
    
    $cart = $this->cart->contents(); 
    $subtotal = 0;
    $actualPrice = 0;
    $count = 0;
    if(count($cart)==0){
      redirect(site_url());
    }
    $productSelected = [];
    $couponsApplied  = [];
    foreach($cart as $row):
      $p = strpos($row['id'],'OU_',0); 
      $row         = (object)$row;
      if($p==1)
      {
         array_push($couponsApplied,['id'=>str_replace("COU_","",$row->id)]);
      }
      else
      {
          array_push($productSelected,['id'=>str_replace("UPS_","",$row->id),'qty'=>$row->qty]);
          $subtotal    = $row->subtotal + $subtotal;  
          $actualPrice = ($actualPrice)+($row->options['price']*$row->qty);

      }
    endforeach; 

    $discount = 0;
    foreach($cart as $row):
      $p = strpos($row['id'],'OU_',0); 
      if($p==1)
      {
          if($row['options']['discount_type']==2)
          {
            $discount = $discount + $subtotal * $row['price']/100;
          }
          else if($row['options']['discount_type']==1)
          {
            $discount = $discount + $row['price'];
          }
      }
    endforeach;
    
    $customData = [];
    $customData['user_id']  = $this->session->userdata()['id'];
    $customData['email']    = $this->session->userdata()['email'];
    $customData['purchased_product']    = $productSelected;
    $customData['applied_coupons']      = $couponsApplied;

    $data['item_name'] = 'Payment ID - P-'.rand(0,1000).'-'.time();
    $data['details']  = serialize($customData);
    $data['user_id']  = $customData['user_id'];
    $data['txn_id']   = 0;
    $data['payment_gross'] =  $subtotal-$discount;
    $data['currency_code'] = 'USD';
    $data['payment_status'] = 'pending';
    $this->paypal_lib->add_field('return', $returnURL);
    $this->paypal_lib->add_field('cancel_return', $cancelURL);
    $this->paypal_lib->add_field('notify_url', $notifyURL);
    $this->paypal_lib->add_field('item_name', $data['item_name']);
    $this->paypal_lib->add_field('custom', serialize($customData));
    $this->paypal_lib->add_field('item_number',  count($cart));
    $this->paypal_lib->add_field('amount', $subtotal-$discount);
    
    // Render paypal form
    $this->paypal_lib->paypal_auto_form();
    $this->CMModel->insertOne('payments_master',$data);
  }
  public function payment_success(){

    $paypalInfo = $this->input->post();
    if(!isset($paypalInfo['txn_id']))
    {
      redirect(site_url().'payment-process');
    }
    $itemName = $paypalInfo['item_name'];
    
    $paymentDetails = $this->CMModel->fetchData('payments_master', "item_name= '$itemName'");
    if(count($paymentDetails)==0)
    {
      redirect(site_url());
    }
    $paymentDetails = current($paymentDetails);
    
    $data['txn_id']         = $paypalInfo["txn_id"];
    $data['payment_status'] = 'done';
    
    $this->CMModel->updateOne('payments_master',$data,['payment_id'=>$paymentDetails->payment_id]);
    
    
    $customSoap             = unserialize($paymentDetails->details);
    $user_id                = $customSoap['user_id'];

    $purchasedItems = $customSoap['purchased_product'];
    $appliedCoupons = $customSoap['applied_coupons'];
    foreach($purchasedItems as $products)
    {
      $qty = $products['qty'];
      for($i=0;$i<$qty;$i++)
      {
        $assoc = [];
        $assoc['user_id']   = $user_id  ;
        $assoc['course_id'] = $products['id'];
        $assoc['is_quiz_attempted'] = 0;
        $assoc['assigned_at'] = time();
        $assoc['status'] = 0;
        $this->CMModel->insertOne('purchased_course',$assoc);
     }
    }
    foreach($appliedCoupons as $coupons)
    {
        $assoc = [];
        $assoc['user_id']     = $user_id  ;
        $assoc['coupon_id']   = $products['id'];
        $assoc['payment_id']  = $paymentDetails->payment_id;
        $this->CMModel->insertOne('coupon_consumption',$assoc);
    }
     $this->session->set_flashdata('payment_success','Payment successfully!');
     $this->cart->destroy();
     redirect(site_url().'profile?target=course');

  }
  public function payment_ipn(){
     $paypalInfo = $this->input->post();
        
        if(!empty($paypalInfo)){
            // Validate and get the ipn response
            $ipnCheck = $this->paypal_lib->validate_ipn($paypalInfo);

            // Check whether the transaction is valid
            if($ipnCheck){
                // Insert the transaction data in the database
                $data['user_id']        = $paypalInfo["custom"];
                $data['product_id']     = $paypalInfo["item_number"];
                $data['txn_id']         = $paypalInfo["txn_id"];
                $data['payment_gross']  = $paypalInfo["mc_gross"];
                $data['currency_code']  = $paypalInfo["mc_currency"];
                $data['payer_email']    = $paypalInfo["payer_email"];
                $data['payment_status'] = $paypalInfo["payment_status"];
                $this->product->insertTransaction($data);
            }
        }
  }
  public function payment_failure(){
    
  }
  public function privacy_policy(){
    $this->load->view('frontend/common/header.php');
    $this->load->view('frontend/privacy_policy.php');
    $this->load->view('frontend/common/footer.php');
  }
  public function faq(){
    $this->load->view('frontend/common/header.php');
    $this->load->view('frontend/faq.php');
    $this->load->view('frontend/common/footer.php');
  }
  public function four_not_four(){
    $this->load->view('frontend/common/header.php');
    $this->load->view('frontend/404.php');
    $this->load->view('frontend/common/footer.php');
  }
  public function search(){
    $q = $this->input->get('q');
    $data['search_for'] = $q;
    $data['resultCourseCount'] = $this->CMModel->searchCourseCount($q);
    $data['resultVideoCount']  = $this->CMModel->searchVideoCount($q);
    $data['resultsItem']       = $this->CMModel->search($q,0,10);
   
    $this->load->view('frontend/common/header.php',$data);
    $this->load->view('frontend/search.php',$data);
    $this->load->view('frontend/common/footer.php');
  }
  public function approval_wait(){
    $this->load->view('frontend/common/header.php');
    $this->load->view('frontend/approval-wait.php');
    $this->load->view('frontend/common/footer.php');
  }
  public function contactus(){
    $this->load->view('frontend/common/header.php');
    $this->load->view('frontend/contact-us.php');
    $this->load->view('frontend/common/footer.php');
  }
  public function start_quiz($slug){

    $courseDetails = $this->CMModel->fetchData('course_master',['slug'=>$slug]);
    
    if(count($courseDetails)==0)
    {
      redirect(site_url('404'));
    }
    
    $courseDetails = current($courseDetails);
    $data['course'] = $courseDetails;
    $userDetails = $this->session->userdata();
    if(!isset($userDetails['id']))
    {
      redirect(site_url());
    }
    $user_id = $userDetails['id'];

    $purchasedItems = $this->CMModel->fetchData('purchased_course',['course_id'=>$courseDetails->id,'user_id'=>$user_id]);
    
    if(count($purchasedItems)==0)
    {
      redirect('profile');
    }
    $purchasedItems = current($purchasedItems);
    if($purchasedItems->is_quiz_attempted==1)
    {
      //Check Quiz Status
      redirect('quiz-result/'.$purchasedItems->id);
    }
    $data['purchasedItems'] = $purchasedItems;
    $this->load->view('frontend/common/header.php');
    $this->load->view('frontend/quiz/start-quiz.php',$data);
    $this->load->view('frontend/common/footer.php');
  }
  public function quiz_result($pcid)
  {
    $purchasedCourse = $this->CMModel->fetchData('purchased_course',['id'=>$pcid]);
    if(is_array($purchasedCourse) && count($purchasedCourse)>0)
    {
     $quiz_master = $this->CMModel->fetchData('quiz_master',['pcourse_id '=>$pcid]);
     $quiz_master = current($quiz_master);
     $course_master = $this->CMModel->fetchData('course_master',['id'=>$quiz_master->course_id]);
     $course_master = current($course_master);
     if($quiz_master->is_completed==0)
     {
       redirect('/start-quiz/'.$course_master->slug);
     }

     $data['courseTitle'] = $course_master->title; 
     $question_meta = $this->CMModel->fetchData('quiz_meta',['quiz_id'=>$quiz_master->id]);
     $resultCorrectScore = 0;
     $resultWrongScore   = 0;
     $data['resultCorrectScore'] = 0;
     $data['resultWrongCount']   = 0;
     
     foreach($question_meta as $qm)
     {
       if($qm->correct_answer==$qm->given_answer)
       {
         $data['resultCorrectScore'] = $data['resultCorrectScore'] + 10;
       }
       else
       {
         $data['resultWrongCount'] = $data['resultWrongCount'] + 1;
       }
     }
     $data['certificate_path'] = UPLOADS.$quiz_master->certificate_path;
     if($quiz_master->certificate_path=='')
     {
        $userdata = $this->session->userdata()['display_name'];
        $filename = time().'.jpg';
        generate_certificate($userdata,$data['courseTitle'],UPLOAD_PATH.'/'.$filename);
        $this->CMModel->updateOne('quiz_master',['certificate_path'=>$filename],['id'=>$quiz_master->id]);
        $data['certificate_path'] = UPLOADS.'/'.$filename;


     }
     
     $this->load->view('frontend/common/header.php');
     $this->load->view('frontend/quiz/quiz-result.php',$data);
     $this->load->view('frontend/common/footer.php');
    }
    else
    {
      redirect('404');
    }
  }
  public function show_question($quiz,$question){
    
    if($question>1)
    {

      $quest = $this->CMModel->fetchData('quiz_meta',['quiz_id'=>$quiz],'',1,$question-2);
      $quest = current($quest);
      if($quest->given_answer=='')
      {
        redirect(404);
      }      
    }
    $data['qNo'] = $question;
    $question = $this->CMModel->fetchData('quiz_meta',['quiz_id'=>$quiz],'',1,$question-1);
    if(count($question)>0)
    {
      $question = current($question);
      if($question->given_answer!='')
      {
        redirect(404);
      }
      else
      {
        $questItem = $this->CMModel->fetchData('question_master',['id'=>$question->question_id]);
        $questItem = current($questItem);
        $data['question'] =  $questItem;
        $data['qm_id'] = $question->id;
        $data['qz_id'] = $quiz;
        $course = $this->CMModel->fetchData('course_master',['id'=>$questItem->course_id]);
        $data['course'] = current($course);
      }
    }

    $this->load->view('frontend/common/header.php');
    $this->load->view('frontend/quiz/question.php',$data);
    $this->load->view('frontend/common/footer.php');
  }
  public function profile_setting(){
    $userdata = $this->isLoggedIn();
    $filename=$this->input->get('filename');
    /*Handle Profile Picture Upload*/
    $id = $this->session->userdata()['id'];

    if(isset($_POST['save_image']))
    {
      $newConfig['upload_path'] = UPLOAD_PATH;
      $newConfig['allowed_types'] = 'gif|jpg|png';
      $newConfig['max_size'] = 10000;
      $newConfig['max_width'] = 1500;
      $newConfig['max_height'] = 1500;
      $new_name = time()."-".$_FILES["profile_picture"]['name'];
      $newConfig['file_name'] = $new_name;

      $this->load->library( 'upload', $newConfig, 'image_upload' );
      $this->image_upload->initialize( $newConfig );
     
      if (!$this->image_upload->do_upload('profile_picture')) {
            $error = array('error' => $this->image_upload->display_errors());
            $this->session->set_flashdata('error',$error['error']);
      } else {
          $images_data = $this->image_upload->data();
          $this->CMModel->updateOne('user_master',['profile_picture'=>$images_data['file_name']],['id'=>$id]);
          $this->session->set_userdata(['profile_picture'=>$images_data['file_name']]);
      }
    }
   
    if(isset($_POST['change_password']) && $_POST['change_password'])
    {
        $this->form_validation->set_message('xss_clean', 'No Kiddies Please.    ');
        $this->form_validation->set_rules('current_password', 'Current Password', 'required');
        $this->form_validation->set_rules('new_password', 'New Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
        $this->form_validation->set_rules('user_id', 'Profile ID', 'required');
       
        if($this->form_validation->run())
        {   
          $current_password =  $this->input->post('current_password');  
          $new_password     =  $this->input->post('new_password');
          $confirm_password =  $this->input->post('confirm_password');
          $user_id          =  $this->input->post('user_id');
          if($new_password==$confirm_password)
          {
            $userdetails = $this->CMModel->fetchData('user_master',['id'=>$user_id]);         
            
            if(count($userdetails)>0)
            {
              $userdetails = current($userdetails);
              if(md5($current_password)==$userdetails->password)
              {
                $this->CMModel->updateOne('user_master',['password'=>md5($new_password)],['id'=>$user_id]);
                $this->session->set_flashdata('success','Your password has been changed successfully!');
              }
              else
              {
                $this->session->set_flashdata('error' , 'Current password is invalid, please try again!');
              }
            } 
            else
            {
              $this->session->set_flashdata('error' , 'Something went wrong, Refresh the page and try again!');
            }
          } 
          else
          {
              $this->session->set_flashdata('error' , 'Confirm password did not matched with new password');
          }
        } 
        else 
        {
           $this->session->set_flashdata('error' ,validation_errors());   
        }  
        redirect('/profile-setting?target=password');
    }

    $userDetails = $this->session->userdata();
    $id = $userDetails['id'];
    $userdetails = $this->CMModel->fetchData('user_master',['id'=>$id]);
    $data['userdata'] = $userdata;
    $data['user'] = $userdetails[0];

    $this->load->view('frontend/common/header.php',$data);
    $this->load->view('frontend/profile-settings.php',$data);
    $this->load->view('frontend/common/footer.php',$data);
  }
  public function userUpTodate(){     
        $this->form_validation->set_message('xss_clean', 'No Kiddies Please.');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phonenumber', 'phonenumber', 'required');
        $this->form_validation->set_message('required', '<i class="fa fa-exclamation-triangle"></i> *The %s field is required!');
        $this->form_validation->set_message('alpha', '<i class="fa fa-exclamation-triangle"></i> *The %s field must be alphabets only!');
        if($this->form_validation->run()){
            $id                       = $this->session->userdata()['id'];
            $data['first_name']       = $this->input->post('fname');      
            $data['last_name']        = $this->input->post('lname');
            $data['email']            = $this->input->post('email');
            $data['phone_number']     = $this->input->post('phonenumber');
            $data['website']          = $this->input->post('website');
            $data['facebook']         = $this->input->post('fb_link');
            $data['twitter']          = $this->input->post('tw_link'); 
            $data['linkedin']         = $this->input->post('lk_link');
            $data['youtube']          = $this->input->post('yt_link');

            if(!empty($_FILES['profile_picture']['name'])){
                $config['upload_path'] = UPLOAD_PATH;
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2000000;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('profile_picture')){
                    $photodata = $this->upload->data();
                    $data['profile_picture'] = $photodata['file_name'];                                                                                                                   
                }
            }
             
            $result = $this->CMModel->updateOne('user_master',$data, ['id'=>$id]);
            if($result){
              $this->session->set_flashdata('success','User updated successfully!');
              $data=$this->session->userdata('id');
              //print_r($data);die;
              redirect("profile-dashboard");
          }
        }else 
          {
             $this->session->set_flashdata('error' ,validation_errors());   
          }   
  }
  public function isProfileInitialSet(){
    $userDetails = $this->session->userdata('id');
    $data = $this->CMModel->fetchData('user_master',['id'=>$userDetails]);
    if(empty($userDetails))
    {   
      redirect('/');
    }
    elseif(trim($data[0]->first_name)=='' && trim($data[0]->last_name)=='')
    {
      redirect('profile-setting');
    }
  }
  public function profile_dashboard(){
    $userdata = $this->isLoggedIn();
    $id = $userdata['id'];
    $data['user'] = $this->CMModel->fetchData('user_master',['id'=>$id]);
    if(count($data['user'])>0)
    {
      $data['user'] = current($data['user']);
    }
    $this->isProfileInitialSet();
    $data['userdata'] = $userdata;
    
    /*Fetch Product*/
    
    $data['products'] = $this->CMModel->joinedData('product_management',['product_images'=>'product_images.product_id = product_management.id'],['product_management.*, product_images.image_name'],"product_management.product_vendor_id = '$id' AND product_images.is_featured = '1'",'product_management.id');
    
    //print_r($data['userdata']);die;
    
    $this->load->view('frontend/common/header.php',$data);
    $this->load->view('frontend/profile-dashboard.php',$data);
    $this->load->view('frontend/common/footer.php',$data);
  }
  //product funtionality starts
  //functionality for display product fist step
  public function product_add(){
    $userdata = $this->isLoggedIn();
    $id=$userdata['id'];
    $data['categories'] = $this->CMModel->fetchData('category_master',['parent_id'=>null]);
    $data['userdata'] = $this->CMModel->fetchData('user_master',['id'=>$id]);
    $data['location'] = getLocation();
    $this->load->view('frontend/common/header.php',$data);
    $this->load->view('frontend/product-details',$data);
    $this->load->view('frontend/common/footer.php',$data);
  }

  public function get_subcategory(){
    
  }
  public function inbox($purchase_id)
  {
    $userdata = $this->isLoggedIn();
    $id=$userdata['id'];
    $data['categories'] = $this->CMModel->fetchData('category_master',['parent_id'=>null]);
    $data['userdata'] = $this->CMModel->fetchData('user_master',['id'=>$id]);
    $data['location'] = getLocation();
    $this->load->view('frontend/common/header.php',$data);
    $this->load->view('frontend/inbox',$data);
    $this->load->view('frontend/common/footer.php',$data);
  }

}