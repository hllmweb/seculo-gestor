<?php
//
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicio extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url', 'html', 'directory'));
        $this->load->library(array('session','form_validation'));
        
        //models
        $this->load->model('m_visita', 'visita', true);
    }

    
   // dashboard visita   
   function index() {       
        $lista_visita = $this->visita->get_visita();

        $data = array(
            'titulo_page'    => 'Século Gestor - Visita - '.date('Y'),            
            'lista_visita'   => $lista_visita       
        );

        $this->load->view('visita/index', $data);

    }


}