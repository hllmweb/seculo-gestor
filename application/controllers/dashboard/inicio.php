<?php
//
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicio extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        #$this->load->helper(array('form', 'url', 'html', 'directory'));
        #$this->load->library(array('session','form_validation'));
        
        //models
        //$this->load->model('m_espaco', 'espaco', true);
    }

    
   // dashboard   
   function index() {       
        $this->load->view('dashboard/index');
    }


}