<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index(){
        $this->load->view('templates/header.php');
        $this->load->view('app/home');
        $this->load->view('templates/footer.php');
    }
    public function about(){
        $this->load->view('templates/header.php');
        $this->load->view('app/about');
        $this->load->view('templates/footer.php');
    }
    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()==TRUE){
            $data = $this->input->post();
            if(isset($data['submit'])){
                unset($data['submit']);
                $this->load->model('user_model');
                if($this->user_model->login($data)){
                    return redirect('homepage');
                }
            }
        }
        $this->load->view('templates/header.php');
        $this->load->view('app/login-page');
        $this->load->view('templates/footer.php');
    }
    public function signup(){
        
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]', array(
            'required'      => 'Please Provide %s.',
            'is_unique'     => 'This %s already exists.'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required'=> 'Please Provide %s.',
        ));
        if($this->form_validation->run() == TRUE){
            $data = $this->input->post();
            if(isset($data['submit'])){
                unset($data['submit']);
                $this->load->model('user_model');
                if($this->user_model->addUser($data)){
                    redirect('homepage');
                }
            }
            
        }
        $this->load->view('templates/header.php');
        $this->load->view('app/create-user-page');
        $this->load->view('templates/footer.php');
    }
    public function homepage(){

        $testData['acc1'] = "Pesonal Saving 1";
        $testData['acc1_bal'] = 9999.99;
        $testData['total_expenses'] = 9999.99;
        $testData['username'] = 'User1';


        $testData['acc2'] = "Pesonal Saving 2";
        $testData['acc3'] = "Business";
        $testData['test'] = 'test1';

        
        $this->load->view('templates/header.php');
        $this->load->view('app/user-homepage',$testData);
        $this->load->view('templates/footer.php');
    }
}
