<?php


class ApiController extends CI_Controller{
    
    public function index(){
       
        $this->load->model('CMModel');
        $action = $this->input->post('action');
        $response = ['status'=>0,'message'=>'','data'=>''];
        if($action=='')
        {
          $response['message'] = 'Invalid action, please don\'t kiddies!';
        }
        else if(!method_exists('APIController',$action))
        {
          $response['message'] = 'Invalid action, please don\'t kiddies!';
        }
        else
        { 
          $data = call_user_func(array($this,$action));
          $response['data'] = $data['data'];
          $response['status'] = $data['status'];
          $response['message'] = ($data['message']==''?'Api responded successfully!':$data['message']);
        }
        echo json_encode($response); die();
   }

   
   public function signup()
   { 
    $this->load->model('CMModel');
    
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run())
    {
      $data['email']             = $this->input->post('email');
      $data['password']          = $this->input->post('password');
      $data['role']              = 1;
      $data['register_at']       = date('Y-m-d h:i:s');
      $data['password']          = md5($data['password']);
      $data['status']            = 1;
      $userExisting = $this->CMModel->fetchData('user_master',['email'=>$data['email']]);
      if(count($userExisting)>0)
      {
        $response['data'] = [];
        $response['status'] = 0;
        $response['message'] = 'Email already exists';
        return $response;
      }

      $result = $this->CMModel->insertOne('user_master',$data);
      if($result)
      {
        $results = $this->CMModel->fetchData('user_master',['id'=>$result]);  
        $result = current($results);
        $row = $result;
        $data = array(
          'id' => $row->id,
          'display_name' => ucfirst( $row->first_name ).' '.ucfirst( $row->last_name ),
          'email' => $row->email,
          'type'  => $row->role,
          'profile_picture'=>'',
          'is_logged_in' => TRUE,
          'register_at' => $row->register_at,
          'validated' => $row->status
        );
        $this->session->set_userdata( $data );
        $response = []; 
        $response['data'] = $result;
        $response['status'] = 1;
        $response['message'] = 'User signup successfully';
      }
      else 
      {
        $error = $this->db->error(); 
        $response = []; 
        $response['data'] = '';
        $response['status'] = 0;
        $response['message'] =  $error['message'];
      }
    }
    else 
    {
      $response = []; 
      $response['data'] = '';
      $response['status'] = 0;
      $response['massage'] = validation_errors();
    }
    return $response;
   }
   public function signupc()
   { 
    $this->load->model('CMModel');
    
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', ' Last Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required');
    $this->form_validation->set_rules('abn_name', 'Company ABN Number', 'required');
    $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');
    if($this->form_validation->run())
    {
      if($this->input->post('password') != $this->input->post('cpassword'))
      {

        $response['data'] = [];
        $response['status'] = 0;
        $response['message'] = 'Password and Confirm password did not matched!';
        return $response;
      }
      $data['first_name']        = $this->input->post('fname');
      $data['last_name']         = $this->input->post('lname');
      $data['email']             = $this->input->post('email');
      $data['phone_number']      = $this->input->post('phone_number');
      $data['password']          = $this->input->post('password');
      $data['role']              = 'company';
      $data['password']          = md5($data['password']);
      $data['status']            = 1; 

      $result = $this->CMModel->insertOne('user_master',$data);
      if($result)
      {
        $results = $this->CMModel->fetchData('user_master',['id'=>$result]);  
        $result = current($results);

        $row = $result;
        $this->CMModel->insertOrUpdateMeta('user_meta',['user_id'=>$row->id,'metakey'=>'occupation','metavalue'=>$this->input->post('occupation'),'status'=>1]);
        $this->CMModel->insertOrUpdateMeta('user_meta',['user_id'=>$row->id,'metakey'=>'abn_name',  'metavalue'=>$this->input->post('abn_name'),'status'=>1]);
        
        $data = array(
              'id' => $row->id,
              'display_name' => ucfirst( $row->last_name ),
              'email' => $row->email,
              'role'  => 'company',
              'profile_picture'=>'',
              'is_logged_in' => TRUE,
              'validated' => $row->status
          );
        $this->session->set_userdata( $data );
        $response = []; 
        $response['data'] = $result;
        $response['status'] = 1;
        $response['message'] = 'User signup successfully';
      }
      else 
      {
        $error = $this->db->error(); 
        $response = []; 
        $response['data'] = '';
        $response['status'] = 0;
        $response['message'] =  $error['message'];
      }
    }
    else 
    {
      $response = []; 
      $response['data'] = '';
      $response['status'] = 0;
      $response['massage'] = validation_errors();
    }
    return $response;
   }
   public function login(){
      $data = [];
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      if($this->form_validation->run())
      {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $results = $this->CMModel->fetchData('user_master',['email'=>$email]);
      if(count($results)>0){
      $result = current($results);
      $row = $result;
      //print_r($row);die;
      if($row->password==md5($password) && $row->status==1){
      $results = $this->CMModel->updateOne('user_master',['last_login_ip'=>$_SERVER['REMOTE_ADDR']],['email'=>$email]);
      $data = array(
      'id' => $row->id,
      'display_name' => ucfirst( $row->first_name ).' '.ucfirst( $row->last_name ),
      'email' => $row->email,
      'role' => $row->role,
      'is_logged_in' => TRUE,
      'profile_picture'=>'',
      'register_at' => $row->register_at,
      'validated' => $row->status
      );
     
      if($row->profile_picture!='')
      {
      $data['profile_picture'] = $row->profile_picture;
      }
      $this->session->set_userdata( $data );
      $response = [];
      $response['data'] = [];
      $response['status'] = 1;
      $response['message'] = 'Login successfully!';
      }
      else {
      $response = [];
      $response['data'] = [];
      $response['status'] = 0;
      $response['message'] = 'Invalid login credentials';
      }
      }
      else {
      $response = [];
      $response['data'] = [];
      $response['status'] = 0;
      $response['message'] = 'Invalid login credentials';
      }
      }
      else
      {
      $response = [];
      $response['data'] = [];
      $response['status'] = 0;
      $response['message'] = validation_errors();;
      }
      return $response;
      }
   public function removeCode(){
      $cc = $this->input->post('code');
      $this->cart->update(['rowid'=>$cc,'qty'=>0]);
      $response = [];
      $response['status'] = 1;
      $response['message'] = 'Removed Coupon Code Successfully!';
      $response['data'] = [];
      return $response;

   }
   public function applyCode(){
     $code = $this->input->post('code');
     $result = $this->CMModel->fetchData('coupons_master',['coupon_code'=>$code]);
     if(count($result)>0)
     {
       $codeDetails = current($result);
       if($codeDetails->coupon_type=='all')
       {
         if(strtotime($codeDetails->validity_date)>=time())
         {
           /*condition to check if number of usage has been done*/
           $results = $this->CMModel->fetchData('coupon_consumption',['user_id'=>$this->session->userdata['id'],'coupon_id'=>$codeDetails->id]);
         
           $isUsed = (count($results)>=$codeDetails->redumption_per_user)?true:false;
           if($isUsed==false)
           {
              $this->cart->insert(['id'=>'COU_'.$codeDetails->id, 'qty'=>'1','price'=>$codeDetails->discount_amount,'name'=>$codeDetails->coupon_code, 'options' => array('discount_type'=>$codeDetails->discount_type)]);
              $response = [];
              $response['status'] = 1;
              $response['message'] = 'Coupon Applied successfully!';
              $response['data'] = [];
              return $response;
            }
           else
           {
                $response = [];
                $response['status'] = 0;
                $response['message'] = 'Entered coupon code can be used only '.$codeDetails->redumption_per_user.' time(s)';
                $response['data'] = [];
                return $response;
           }
         }
         else
         {
            $response = [];
            $response['status'] = 0;
            $response['message'] = 'Code validity is expired!';
            $response['data'] = [];
            return $response;
         }
       }
       else
       {
          /*Check if for this user too*/
          $assigned_users = $codeDetails->assigned_users;
          $assigned_users = array_map('trim',explode(',',$assigned_users));
          $resultsConsumption = $this->CMModel->fetchData('coupon_consumption',['user_id'=>$this->session->userdata['id'],'coupon_id'=>$codeDetails->id]);
          if(in_array($this->session->userdata()['email'],$assigned_users) && ($codeDetails->redumption_per_user==-1 || count($resultsConsumption)<$codeDetails->redumption_per_user))
          {
             $this->cart->insert(['id'=>'COU_'.$codeDetails->id, 'qty'=>'1','price'=>$codeDetails->discount_amount,'name'=>$codeDetails->coupon_code, 'options' => array('discount_type'=>$codeDetails->discount_type)]);
              $response = [];
              $response['status'] = 1;
              $response['message'] = 'Coupon Applied successfully!';
              $response['data'] = [];
              return $response;
          }
          else
          {
              $response = [];
              $response['status'] = 0;
              $response['message'] = 'This coupon code is invalid for you!';
              $response['data'] = [];
              return $response;
          }
       }
     }
     else
     {
       $response = [];
       $response['status'] = 0;
       $response['message'] = 'Invalid code';
       $response['data'] = [];
       return $response; 
     }
    }
    public function activeCompany(){
      $id = $this->input->post('id');
      $userMaster = $this->CMModel->updateOne('user_master',['status'=>1],['id'=>$id]);
      $response = [];
      $this->session->set_flashdata('success','Company account activated successfully!');
      $response['status'] = 1;
      $response['data'] = [];
      $response['message'] = 'Company account activated successfully!';
      return $response;
    }
    public function updatecart(){
     $id  =  $this->input->post('cart_id');
     $qty =  $this->input->post('qty');
     $act =  $this->input->post('act');
     $performed = false;
     if($act=='plus')
     {
        $qty = (int)$qty + 1;
        $performed = true;
     }
     else
     {
        if($qty>='2')
        {
          $qty = (int)$qty - 1;
          $performed = true;
        }
        else
        {
          $this->session->set_flashdata('error','Min number of order reached!');     
          return false;
        }
        
     }
     $data = array('rowid'=>$id,'qty'=>$qty);
     $this->cart->update($data);
     $response = [];
     $this->session->set_flashdata('success','Cart updated successfully!');
     return $response;
    }
    
  public function saveNotes(){
   $notes  = trim($this->input->post('notes'));
   $course = trim($this->input->post('course'));
   $userdata = $this->session->userdata();
   if(isset($userdata['id']))
   {
     $data['user_id'] = $userdata['id'];
     $data['course_id'] =  $course;
     $data['notes'] = $notes;
     $this->CMModel->insertOrUpdate('notes_master',$data);
     $response = [];
     $response['status'] = 1;
     $response['message'] = 'Notes saved successfully!';
     $response['data'] = [];
     return $response;
   }
   else
   {
     $response = [];
     $response['status'] = 0;
     $response['message'] = 'Please login your account first';
     $response['data'] = [];
     return $response;
   }
  }
  public function quizSetup(){
    $pcid     = $this->input->post('pcourse_id');
    $quizExists = $this->CMModel->fetchData('quiz_master',['pcourse_id'=>$pcid]);
    $result = []; 
    if(count($quizExists)==0)
    {
     
      $purchase_course = $this->CMModel->fetchData('purchased_course',['id'=>$pcid]);
      $purchase_course = current($purchase_course);
      $course_id = $purchase_course->course_id;
      $questions = $this->CMModel->fetchData('question_master',['course_id'=>$course_id], 'RAND()','10');
      $quiz = [];
      $quiz['pcourse_id'] =  $pcid;
      $quiz['user_id'] = $this->session->userdata()['id'];
      $quiz['course_id'] = $course_id;
      $quiz['is_completed'] = 0;
      $quiz['start_time'] = time();
      $quiz['end_time'] = '';
      $quiz['status'] = '0';
      $response = $this->CMModel->insertOne('quiz_master',$quiz);
      if($response!=false)
      {
        foreach($questions as $q)
        {
          $quizQ['quiz_id']         = $response;
          $quizQ['question_id']     = $q->id;
          $quizQ['correct_answer']  = $q->answer;
          $quizQ['status'] =  1;
          $this->CMModel->insertOne('quiz_meta',$quizQ);
        }
        $result['status']  = true;
        $result['message'] = 'Moving to you next page!';
        $result['data']    = ['quiz_id'=>$response,'status'=>0,'question'=>1];
      }
      else
      {
        $result['status']  = false;
        $result['message'] = 'Our servers are facing issue, please connect Web-master!';
        $result['data']    = [];
      }
      return $result;
    }
    else
    {
      $quizExists = current($quizExists);
      if($quizExists->is_completed!='1')
      { $quizOffset = 0;
        $questions = $this->CMModel->fetchData('quiz_meta',['quiz_id'=>$quizExists->id],'',10,0);
      
        foreach($questions as $key=>$qa)
        {
          if($qa->given_answer=='')
          {
            $quizOffset = $key+1;
            break;
          }
        }
      
        if($quizOffset!=0)
        {
           $result['status']  = true;
           $result['message'] = 'Moving to you next page!';
           $result['data']    = ['quiz_id'=>$quizExists->id,'status'=>0,'question'=>$quizOffset];
        }
        else
        { 
          $this->CMModel->updateOne('quiz_meta',['is_completed'=>1],['id'=>$quizExists->id]);
          $result['status']  = true;
          $result['message'] = 'You have done the quiz already!';
          $result['data']    = ['quiz_id'=>$quizExists->id,'status'=>1,'question'=>-1,'pcid'=>$pcid];
          
        }
      
      }
      else
      {
        // code for certificate redirection;
        $result['status']  = true;
        $result['message'] = 'You have done the quiz already!';
        $result['data']    = ['quiz_id'=>$quizExists->id,'status'=>1,'question'=>0];
      }
     
    }
     return $result;
  }
  public function get_subcategory(){
    $sub_cat  = $this->input->post('category_id');
    $response = $this->CMModel->fetchData('category_master',['parent_id'=>$sub_cat]);
    $result = [];
    $result['status'] = 'success';
    $result['data']     = $response;
    $result['message']  = 'Sub Category found successfully!';
    return $result; 
  }
  public function get_deligates(){
    $key = $this->input->post('key');
    $location = getLocation();
    $response = [];
    $response['status'] = 'success';
    $response['data'] = $location[$key];
    $response['message'] = 'Api Responded successfully!';
    return $response; 
  }
  public function submitAnswer(){
    $qz       = $this->input->post('qz');
    $qm       = $this->input->post('qm');
    $of       = $this->input->post('of');
    $answer   = $this->input->post('ar');
    $qz = (int)$qz;
    $qmItem   = $this->CMModel->fetchData('quiz_meta',['id'=>$qm]); 
    $response = [];
     
    if(count($qmItem )>0)
    {
      $qmItem = current($qmItem);
      if($qmItem->given_answer=='')
      {
        
        $this->CMModel->updateOne('quiz_meta',['given_answer'=>$answer],['id'=>$qm]);
        if($of==10)
        {
          $this->CMModel->updateOne('quiz_master',['is_completed'=>'1'],['id'=>$qz]);
          $quizItem = $this->CMModel->fetchData('quiz_master',['id'=>$qz]);
          $quizItem = current($quizItem);
          $this->CMModel->updateOne('purchased_course',['is_quiz_attempted'=>'1'],['id'=>$quizItem->pcourse_id]);
          $response['status'] = true;
          $response['message'] = 'Answer submitted successfully, Ready for the Next question!';
          $response['data'] = ['code'=>'200','qz'=>$qz,'of'=>-1,'pcid'=>$quizItem->pcourse_id];
        }
        else
        {
          $response['status'] = true;
          $response['message'] = 'Answer submitted successfully, Ready for the Next question';
          $response['data'] = ['code'=>'200','qz'=>$qz,'of'=>$of+1];
        }
        
      }
      else
      {
        $response['status'] = true;
        $response['message'] = 'Invalid Request, Please contact webmaster!';
        $response['data'] = ['code'=>'500'];
      }
    }
    else
    {
      $response['status'] = true;
      $response['message'] = 'Invalid Request, Please contact webmaster!';
      $response['data'] = ['code'=>'404'];
    }
    return $response;
  }
  public function generateSlug($name){
    
    $slugifyName = str_replace(' ','-',$name);
    
    $product = $this->CMModel->fetchData('product_management',"product_slug LIKE '$slugifyName%'");

    if(count($product)>0)
    {
      $slugifyName = $slugifyName.'-'.count($product);
    }
    return $slugifyName;
  }
    public function product_add(){
    
      $this->form_validation->set_rules('name', 'Title', 'required');
      $this->form_validation->set_rules('category', 'Category', 'required');
      $this->form_validation->set_rules('price', 'Price', 'required');
      $this->form_validation->set_rules('vendor_id', 'Vendor ID', 'required');
      $this->form_validation->set_rules('description', 'Product Description', 'required');
      
    if($this->form_validation->run())
    {  if(count($_FILES)<1)
        {
            $response['data'] = '';
            $response['status'] = 0;
            $response['message'] = 'Product Images are required.';
            return $response;
        }
        $product_data = [];
          
        foreach($_POST as $key=>$value)
        { if(in_array($key,['quant','radio','action','subcategory']))
            continue;

            $product_data['product_'.$key] = $value;
        }

        $product_data['product_slug'] =  $this->generateSlug($this->input->post('name'));
        
        $product_id = $this->CMModel->insertOne('product_management',$product_data);
        

        for($i=0; $i<count($_FILES['upload_imgs']['name']);$i++){
          
              $_FILES['file']['name']     = $_FILES['upload_imgs']['name'][$i];
              $_FILES['file']['size']     = $_FILES['upload_imgs']['size'][$i];
              $_FILES['file']['type']     = $_FILES['upload_imgs']['type'][$i];
              $_FILES['file']['error']    = $_FILES['upload_imgs']['error'][$i];
              $_FILES['file']['tmp_name'] = $_FILES['upload_imgs']['tmp_name'][$i];
            
              $config = [];
              $config['upload_path'] = 'uploads/';
              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['max_size'] = 2000000;
              $config['file_name'] = time().'-'.$_FILES['file']['name'];
              
              $this->upload->initialize($config);
              
              if($this->upload->do_upload('file')){
                // Get data about the file
                $uploadData = $this->upload->data();
                
                $proImageData = [];
                $proImageData['product_id'] =  $product_id;
                $proImageData['image_name'] =  $uploadData['file_name'];
                $proImageData['product_id'] =  $product_id;

                if($i==0)
                { 
                  $proImageData['is_featured'] = 1;
                  $this->CMModel->insertOne('product_images',$proImageData);
                }
                else
                {
                  $proImageData['is_featured'] = 0;
                  $this->CMModel->insertOne('product_images',$proImageData);
                }
              }
              else
              {
                  print_r($this->upload->display_errors());
              } 
        
      }
     $this->session->set_flashdata('success','Product added successfully!');
     $response['status'] = 'success';
     $response['data'] =[];
     $response['message'] = 'Product Added successfully!';
     return $response; 
    
    }
    else { 
      
      $response = []; 
      $response['data'] = '';
      $response['status'] = 'failure';
      $response['message'] = validation_errors();
      
      return $response;
    }  
  }
  public function buy_product(){
    $userdata = $this->session->userdata();
    $response = [];
    if(!isset($userdata['id']))
    {
      $response['status'] = 'failure';
    }
    $pro_id = $this->input->post('pro_id');
    $product = $this->CMModel->fetchData('product_management',['id'=>$pro_id]);
    $purchase = [];
    $purchase['qty'] = 1;
    $purchase['product_id'] = 1;
    $purchase['qty'] = 1;
    $purchase['customer_id'] = 1;
    $purchase['vendor_id'] = 1;
    $purchase['is_vendor_reviewed'] = 0;
    $purchase['is_customer_reviewed'] = 0;
    $purchase['purchase_date'] = date('Y-m-d h:i:s');
    $purchase['status'] = 1;
    $id = $this->CMModel->insertOne('purchase_master',$purchase);
    if($id==false)
    {
      $response = [];
      $response['status'] = 'fail';
      $response['message']   = 'Sorry, this product can not be purchase';
      $response['data']   = '';
    }
    else {
      $response = [];
      $response['status'] = 'success';
      $response['message']   = 'Product purchased successfully!';
      $response['data'] = ['purchase_id'=>$id];
      $this->session->set_flashdata('Product purchased successfully!');
    }
    return $response;
  }
}