<?php
defined('BASEPATH') OR exit('NO direct script allowed');
class Employees extends CI_Controller {
var $pgToLoad;

public function construct() {
    parent::construct();
    #this will start the session
    session_start();
    $this->load->helper(array('form', 'url'));


    if(!isset($_SESSION['userId']) || !isset($_SESSION['userLevel']) || !isset($_SESSION['employeeid']) || !isset($_SESSION['firstname']) || !isset($_SESSION['lastname'])) {
        redirect('home', 'location');
    }

    #this will load the model
    $this->load->model('Contents');

    #get last uri segment to determine which content to load
    $continue = true;
    $i = 0;
    do {
        $i++;
        if ($this->uri->segment($i) != "") $this->pgToLoad = $this->uri->segment($i);
        else $continue = false;             
    } while ($continue);        
}

public function index() {       
    $this->main();
}   

public function main() {
    #set default content to load 
    $this->pgToLoad = empty($this->pgToLoad) ? "employees" : $this->pgToLoad;
    $disMsg = "";

    #this will delete the record selected
    if($this->uri->segment(2) == 'delete') { 
        $this->deleteRecord();
    }

    #this will check if the post value is trigger
    if(isset($_POST['addnew'])) {
        $this->addRecord(); 
    }                   

    #this will check if the post value is trigger
    if(isset($_POST['saveinfo'])) {
        $this->updateinfo();    
    }           

    if($this->uri->segment(2) == 'add' || $this->uri->segment(2) == 'edit') {
        #this display the form for products
        $this->displayForm();
    } else {
        #this will display the job orders
        $this->getAllEmployees();       
    }   


    if($this->uri->segment(2) == 'print') {
        #this display the form for products
        $this->pdf();
    } 

if($this->uri->segment(2) == 'do_upload') {
        #this display the form for products
        $this->do_upload();
    } 

    #this will logout the user and redirect to the page
    if($this->uri->segment(2) == 'logout') {
        session_destroy();
        redirect('home', 'location');
    }                   

    $data = array ( 'pageTitle' => 'Payroll System | ADMINISTRATION',
                    'disMsg'    => $disMsg,                                             
                    'mainCont'  => $this->mainCont );

    $this->load->view('mainTpl', $data, FALSE);
}


function do_upload(){

    if($this->input->post('upload')){

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '1024';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload()){

        $error = array('error' => $this->upload->display_errors());
        $this->load->view('pages/employeesform', $error);
        }

        else{

        $data=$this->upload->data();
        $this->thumb($data);
        $file=array(
        'img_name'=>$data['raw_name'],
        'thumb_name'=>$data['raw_name'].'_thumb',
        'ext'=>$data['file_ext'],
        'upload_date'=>time()
        );
        $this->Contents->add_image($file);
        $data = array('upload_data' => $this->upload->data());
        $this->load->view('pages/upload_success', $data);
        }
    }

    else{

    redirect(site_url('employees'));

    }

}

function thumb($data){

    $config['image_library'] = 'gd2';
    $config['source_image'] =$data['full_path'];
    $config['create_thumb'] = TRUE;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = 275;
    $config['height'] = 250;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();

}
    public function displayForm() {
    $data['level'] = $this->Contents->exeGetUserLevel();
    $data['status'] = $this->Contents->exeGetUserStatus();

    $data['employee'] = $this->Contents->exeGetEmpToEdit($_SESSION['userId']);      
    if($this->uri->segment(2) == 'edit') { 
        $data['employee'] = $this->Contents->exeGetEmpToEdit($_SESSION['userId']);
        $data['emp'] = $this->Contents->exeGetEmpToEdit($this->uri->segment(3));
        $data['info'] = $this->Contents->exeGetUserInfo($this->uri->segment(3));    
        $this->mainCont = $this->load->view('pages/employeesform', $data, TRUE);
    }                   
    $this->mainCont = $this->load->view('pages/employeesform', $data, TRUE);                
}

#this will add new record
public function addRecord() {
    if(empty($_POST['fname']) || empty($_POST['mname']) || empty($_POST['lname']) || empty($_POST['empass']) || empty($_POST['emailadd']) || empty($_POST['gender']) || empty($_POST['datehired']) || empty($_POST['salary'])) {    
        $disMsg = "Please fill up the form completely.";
        $_SESSION['disMsg'] = $disMsg;  
    } else {
        $addNew = $this->Contents->exeAddNewRecord();

        if($addNew['affRows'] > 0) {
            $_SESSION['disMsg'] = "New Employee has been added.";
            redirect('employees', 'location');          
        } else {
            $disMsg = "Unable to add new employee.";
        }       
    }           
}