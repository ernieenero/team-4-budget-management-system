<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index(){
        $this->load->view('app/home');
    }
    public function about(){
        $this->load->view('app/about');
    }
    public function login(){
        $this->load->view('app/login-page');
    }
    public function signup(){
        $this->load->view('app/create-user-page');
    }
}
