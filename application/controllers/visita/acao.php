<?php
//
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Acao extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url', 'html', 'directory'));
        $this->load->library(array('session','form_validation'));
        
        //models
        $this->load->model('m_visita', 'visita', true);
    }

    
   // dashboard visita   
   function add_visita() {       
        $p_nmresponsavel = $this->input->get_post('p_nmresponsavel');
        $p_email           = $this->input->get_post('p_email');
        $p_telefone        = $this->input->get_post('p_telefone');
        // $p_datahora        = $this->input->get_post('p_datahora');
        $data_hora         = new DateTime();
        $p_datahora        = $data_hora->format('d-m-Y H:i:s');
        $p_pretensao       = $this->input->get_post('p_pretensao');
        $p_observacao      = $this->input->get_post('p_observacao');
       
        $param = array(
            'p_nmresponsavel' => $p_nmresponsavel,
            'p_email'         => $p_email,
            'p_telefone'      => $p_telefone,
            'p_datahora'      => $p_datahora,
            'p_pretensao'     => $p_pretensao,
            'p_observacao'    => $p_observacao
        );

        $visita = $this->visita->set_visita($param);
        echo $visita;
        // echo $visita;
        // if($visita != 0)
        // {
        //     echo "Cadastro efetuado com sucesso";
        // }



        //$this->load->view('visita/adicionar', $data);

    }


}