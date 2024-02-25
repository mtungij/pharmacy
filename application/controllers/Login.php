
 <?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
   public  function signup(){



    $this->load-> view("create_account");

    // $user= [
    //     'full_name' => "James1",
    //     "phone_number" => '123',
    //     "role" => 'admin',
    //     "status" => 'open',
    //     "password" => sha1('1234'),
    // ];

    // $this->db->insert('tbl_user', $user);

    // echo "success";

     }


     public function store_user()
     {
        $this->form_validation->set_rules('full_name','Name','required');
		$this->form_validation->set_rules('phone_number','Phone number','required');
		$this->form_validation->set_rules('name','Name','required');                                        
		$this->form_validation->set_rules('address','Address','required');                                        
		$this->form_validation->set_rules('email','Email','required|is_unique[company.email]');
    $this->form_validation->set_rules('password','password','required');
    $this->form_validation->set_rules('confirm','password confirmation','required|matches[password]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

   
  //  print_r(validation_errors());
   
    
		if ($this->form_validation->run() ) {



      $user=[

        'full_name' => $this->input->post('full_name'),
        'phone_number' => $this->input->post('phone_number'),
        'password' => sha1($this->input->post('password')),
        'role' => 'admin',
        'status' => 'open',
      ];
  
  
      $company  = [
  
       
        'name' => $this->input->post('name'),
        'address' => $this->input->post('address'),
        'email' => $this->input->post('email'),
       
      ];
  
    
      $this->db->trans_start();
      $q = $this->db->insert('company', $company);

      $user['company_id'] = $this->db->insert_id();

      $this->db->insert('tbl_user', $user);

      $this->db->trans_complete();

      return redirect('home/index');

		}

        
     }
    } 