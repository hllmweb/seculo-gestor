<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_visita extends CI_Model {
    public $table;
    public $schema;
    public $stored;

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    #insere visita
    function set_visita($p){
        $query = $this->db->query("INSERT INTO RM.ZMDVISITA (IDPERLET, DATAHORA, NMRESPONSAVEL, TELEFONE, EMAIL, OBSERVACAO, PRETENSAO) 
        VALUES (1, SYSDATE, '".$p['p_nmresponsavel']."', '".$p['p_telefone']."', '".$p['p_email']."', '".$p['p_observacao']."', '".$p['p_pretensao']."')");
    	return 1;
    }

    #lista visita
    function get_visita(){
        $query = $this->db->query("SELECT * FROM RM.ZMDVISITA");
        return $query->result_array();
    }

    

    

   
}