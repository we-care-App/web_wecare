<?php
defined('BASEPATH') OR exit('No derict script access allowed');

class MY_Controller extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('isLogged')){
            redirect('Auth_c');
        }
    }
}