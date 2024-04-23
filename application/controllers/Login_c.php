<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

    // public function __construct() {
    //     $this->load->Model('def_models');
    // }

	public function index()
	{
        $this->load->view('login/login.php');
    }

    // public function login() {

    //     $error = false;

    //     $username = $this->session->userdata('username');
    //     $password = $this->session->userdata('password');

        

    //     if ($username == "dhika" && $password == "123") {
    //         $_SESSION['$username'] = $username;
    //         redirect("$this->load->view('home.php')");
    //     } else {
    //         $error == true;
    //     }
    // }
}