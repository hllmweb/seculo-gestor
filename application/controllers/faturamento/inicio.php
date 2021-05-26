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
        $this->load->model('m_faturamento', 'faturamento', true);
    }

    
   // dashboard faturamento   
   function index() {       
        $lista_faturamento_mes_anterior             = $this->faturamento->get_faturamento_mes_anterior();
        $lista_faturamento_mes                      = $this->faturamento->get_faturamento_mes();
        $lista_faturamento_ano                      = $this->faturamento->get_faturamento_ano();
        $lista_dispesas_mes                         = $this->faturamento->get_dispesas_mes();
        $lista_dispesas_ano                         = $this->faturamento->get_dispesas_ano();
        $lista_centro_custo_adm                     = $this->faturamento->get_centro_custo_adm();
        $lista_centro_custo_aca                     = $this->faturamento->get_centro_custo_aca();
        
        $qtd_aluno_integral_ano_atual               = $this->faturamento->get_quantidade_aluno_integral(array('p_ano' => date("Y")));
        $qtd_aluno_integral_ano_anterior            = $this->faturamento->get_quantidade_aluno_integral(array('p_ano' => date("Y")-1));

        $qtd_aluno_parcial_ano_atual                = $this->faturamento->get_quantidade_aluno_parcial(array('p_ano' => date("Y")));
        $qtd_aluno_parcial_ano_anterior             = $this->faturamento->get_quantidade_aluno_parcial(array('p_ano' => date("Y")-1));

        $qtd_bolsista_inteira_ano_atual             = $this->faturamento->get_quantidade_bolsita(array('p_ano' => date("Y"), 'p_codbolsa'=> 3));
        $qtd_bolsista_inteira_ano_anterior          = $this->faturamento->get_quantidade_bolsita(array('p_ano' => date("Y")-1, 'p_codbolsa'=> 3));
        
        $qtd_bolsista_meia_ano_atual                = $this->faturamento->get_quantidade_bolsita(array('p_ano' => date("Y"), 'p_codbolsa'=> 1));
        $qtd_bolsista_meia_ano_anterior             = $this->faturamento->get_quantidade_bolsita(array('p_ano' => date("Y")-1, 'p_codbolsa'=> 1));
        
        $qtd_bolsista_desconto_ano_atual            = $this->faturamento->get_quantidade_bolsista_desconto(array('p_ano' => date("Y")));
        $qtd_bolsista_desconto_ano_anterior         = $this->faturamento->get_quantidade_bolsista_desconto(array('p_ano' => date("Y")-1));

        $qtd_visitante_hoje                         = $this->faturamento->get_quantidade_visitante_hoje();
        $qtd_visitante_semana                       = $this->faturamento->get_quantidade_visitante_semana();
        $qtd_visitante_mes                          = $this->faturamento->get_quantidade_visitante_mes();

        $data = array(
            'titulo_page'                        =>  'Século Gestor - '.date('Y'),
            'lista_faturamento_mes_anterior'     => $lista_faturamento_mes_anterior,
            'lista_faturamento_mes'              => $lista_faturamento_mes,
            'lista_faturamento_ano'              => $lista_faturamento_ano,
            'lista_dispesas_mes'                 => $lista_dispesas_mes,
            'lista_dispesas_ano'                 => $lista_dispesas_ano,
            'lista_centro_custo_adm'             => $lista_centro_custo_adm,
            'lista_centro_custo_aca'             => $lista_centro_custo_aca,
            'qtd_aluno_integral_ano_atual'       => $qtd_aluno_integral_ano_atual,
            'qtd_aluno_integral_ano_anterior'    => $qtd_aluno_integral_ano_anterior,
            'qtd_aluno_parcial_ano_atual'        => $qtd_aluno_parcial_ano_atual,
            'qtd_aluno_parcial_ano_anterior'     => $qtd_aluno_parcial_ano_anterior,   
            'qtd_bolsista_inteira_ano_atual'             => $qtd_bolsista_inteira_ano_atual,
            'qtd_bolsista_inteira_ano_anterior'          => $qtd_bolsista_inteira_ano_anterior,
            'qtd_bolsista_meia_ano_atual'                => $qtd_bolsista_meia_ano_atual,
            'qtd_bolsista_meia_ano_anterior'             => $qtd_bolsista_meia_ano_anterior,
            'qtd_bolsista_desconto_ano_atual'            => $qtd_bolsista_desconto_ano_atual,
            'qtd_bolsista_desconto_ano_anterior'         => $qtd_bolsista_desconto_ano_anterior,
            'qtd_visitante_hoje'                         => $qtd_visitante_hoje,
            'qtd_visitante_semana'                       => $qtd_visitante_semana,
            'qtd_visitante_mes'                          => $qtd_visitante_mes
        );

        $this->load->view('faturamento/index', $data);
    }


}