<?php
//
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Adicionar extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url', 'html', 'directory'));
        $this->load->library(array('session','form_validation'));
        
        //models
        $this->load->model('m_visita', 'visita', true);
    }

    
   // dashboard visita   
   function index() {       
        // $visita = $this->visita->set_visita();
        // echo $visita;
        // if($visita != 0)
        // {
        //     echo "Cadastro efetuado com sucesso";
        // }

        $data = array(
            'titulo_page'                        =>  'Adicionar Visita',            
        );

        $this->load->view('visita/adicionar', $data);

    }


}