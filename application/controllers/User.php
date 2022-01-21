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
        $this->load->view('templates/header.php');
        $this->load->view('app/login-page');
        $this->load->view('templates/footer.php');
    }
    public function signup(){
        $this->load->view('templates/header.php');
        $this->load->view('app/create-user-page');
        $this->load->view('templates/footer.php');
    }
}
